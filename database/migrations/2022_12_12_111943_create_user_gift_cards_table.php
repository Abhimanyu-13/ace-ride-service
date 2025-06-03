<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGiftCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('user_gift_cards')) {
            Schema::create('user_gift_cards', function (Blueprint $table) {
                $table->id(); // Primary key (BIGINT UNSIGNED)
                $table->unsignedBigInteger('user_id')->nullable(); // Ensure consistency
                $table->unsignedBigInteger('gift_card_id')->nullable();
                $table->decimal('amount', 12, 2)->nullable();
                $table->timestamp('expiry_date')->nullable();
                $table->json('buy_for_data')->nullable();
                $table->tinyInteger('is_used')->default(0)->comment('1 = yes, 0 = no'); // Fixed default value
                $table->timestamps();
                $table->softDeletes();

                // Ensure referenced tables exist before adding foreign keys
                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('SET NULL')
                    ->onUpdate('CASCADE');

                $table->foreign('gift_card_id')
                    ->references('id')
                    ->on('gift_cards')
                    ->onDelete('SET NULL')
                    ->onUpdate('CASCADE');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_gift_cards');
    }
}
