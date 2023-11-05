<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    DB::unprepared('
    CREATE TRIGGER calculate_total_price
    AFTER INSERT ON orders
    FOR EACH ROW
    BEGIN
    DECLARE total_price DECIMAL(10, 2);
    SET total_price = (
    SELECT SUM(products.price * orders.quantity)
    FROM orders
    JOIN products ON orders.product_id = products.id
    WHERE orders.user_id = NEW.user_id AND orders.created_at = NEW.created_at
    );
    INSERT INTO orders_list (user_id, Total_price, created_at)
    VALUES (NEW.user_id, total_price, NEW.created_at);
    END;
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

    DB::unprepared('DROP TRIGGER IF EXISTS calculate_total_price');

}
};

