<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrimaryCurrencyRateToCartVendorDeliveryFeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart_vendor_delivery_fee', function (Blueprint $table) {
            $table->decimal('primary_currency_delivery_fee', 64, 0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_vendor_delivery_fee', function (Blueprint $table) {
            $table->dropColumn('primary_currency_delivery_fee');
        });
    }
}
