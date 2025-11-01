<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'slug')) {
                $table->string('slug')->unique()->after('title');
            }
            
            // Check if foreign keys already exist before adding them
            $foreignKeys = DB::select("
                SELECT CONSTRAINT_NAME 
                FROM information_schema.KEY_COLUMN_USAGE 
                WHERE TABLE_SCHEMA = DATABASE() 
                AND TABLE_NAME = 'products' 
                AND CONSTRAINT_NAME LIKE '%_foreign'
            ");
            
            $existingKeys = array_column($foreignKeys, 'CONSTRAINT_NAME');
            
            if (!in_array('products_cat_id_foreign', $existingKeys)) {
                $table->foreign('cat_id')->references('id')->on('categories')->cascadeOnUpdate()->restrictOnDelete();
            }
            
            if (Schema::hasColumn('products', 'child_cat_id') && !in_array('products_child_cat_id_foreign', $existingKeys)) {
                $table->foreign('child_cat_id')->references('id')->on('categories')->cascadeOnUpdate()->nullOnDelete();
            }
            
            if (Schema::hasColumn('products', 'brand_id') && !in_array('products_brand_id_foreign', $existingKeys)) {
                $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnUpdate()->nullOnDelete();
            }
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'slug')) {
                // Only drop if it was created by this migration; keep simple to avoid errors
                // $table->dropUnique(['slug']);
            }
            $table->dropForeign(['cat_id']);
            if (Schema::hasColumn('products', 'child_cat_id')) {
                $table->dropForeign(['child_cat_id']);
            }
            if (Schema::hasColumn('products', 'brand_id')) {
                $table->dropForeign(['brand_id']);
            }
        });
    }
};


