<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Non-negative stock enforcement
        DB::unprepared(<<<SQL
DROP TRIGGER IF EXISTS trg_products_stock_non_negative_ins;
CREATE TRIGGER trg_products_stock_non_negative_ins
BEFORE INSERT ON products FOR EACH ROW
BEGIN
    IF NEW.stock < 0 THEN
        SET NEW.stock = 0;
    END IF;
END;
SQL);

        DB::unprepared(<<<SQL
DROP TRIGGER IF EXISTS trg_products_stock_non_negative_upd;
CREATE TRIGGER trg_products_stock_non_negative_upd
BEFORE UPDATE ON products FOR EACH ROW
BEGIN
    IF NEW.stock < 0 THEN
        SET NEW.stock = 0;
    END IF;
END;
SQL);

        // Discount bounds 0..100
        DB::unprepared(<<<SQL
DROP TRIGGER IF EXISTS trg_products_discount_bounds_ins;
CREATE TRIGGER trg_products_discount_bounds_ins
BEFORE INSERT ON products FOR EACH ROW
BEGIN
    IF NEW.discount IS NOT NULL THEN
        IF NEW.discount < 0 THEN SET NEW.discount = 0; END IF;
        IF NEW.discount > 100 THEN SET NEW.discount = 100; END IF;
    END IF;
END;
SQL);

        DB::unprepared(<<<SQL
DROP TRIGGER IF EXISTS trg_products_discount_bounds_upd;
CREATE TRIGGER trg_products_discount_bounds_upd
BEFORE UPDATE ON products FOR EACH ROW
BEGIN
    IF NEW.discount IS NOT NULL THEN
        IF NEW.discount < 0 THEN SET NEW.discount = 0; END IF;
        IF NEW.discount > 100 THEN SET NEW.discount = 100; END IF;
    END IF;
END;
SQL);
    }

    public function down()
    {
        DB::unprepared(<<<SQL
DROP TRIGGER IF EXISTS trg_products_stock_non_negative_ins;
DROP TRIGGER IF EXISTS trg_products_stock_non_negative_upd;
DROP TRIGGER IF EXISTS trg_products_discount_bounds_ins;
DROP TRIGGER IF EXISTS trg_products_discount_bounds_upd;
SQL);
    }
};





