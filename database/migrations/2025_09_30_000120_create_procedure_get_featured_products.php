<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::unprepared(<<<SQL
DROP PROCEDURE IF EXISTS sp_get_featured_products;
CREATE PROCEDURE sp_get_featured_products(IN p_limit INT)
BEGIN
    SELECT p.*
    FROM products p
    WHERE p.status = 'active' AND p.is_featured = 1
    ORDER BY p.price DESC
    LIMIT p_limit;
END;
SQL);
    }

    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_featured_products');
    }
};





