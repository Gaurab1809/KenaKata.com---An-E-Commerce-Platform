<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::unprepared(<<<SQL
CREATE OR REPLACE VIEW view_product_overview AS
SELECT
    p.id,
    p.title,
    p.slug,
    p.status,
    p.condition,
    p.price,
    p.discount,
    p.stock,
    p.is_featured,
    p.brand_id,
    b.title AS brand_title,
    p.cat_id,
    c.title AS category_title,
    p.child_cat_id,
    cc.title AS child_category_title,
    p.created_at,
    p.updated_at
FROM products p
LEFT JOIN categories c ON c.id = p.cat_id
LEFT JOIN categories cc ON cc.id = p.child_cat_id
LEFT JOIN brands b ON b.id = p.brand_id;
SQL);
    }

    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS view_product_overview');
    }
};





