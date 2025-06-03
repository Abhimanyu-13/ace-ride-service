<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('gift_cards')) { // ✅ Check if table exists
            Schema::create('gift_cards', function (Blueprint $table) {
                $table->id(); // Creates BIGINT UNSIGNED primary key
                $table->string('name');
                $table->string('title')->nullable();
                $table->string('image')->nullable();
                $table->string('short_desc')->nullable();
                $table->decimal('amount', 12, 2)->nullable();
                $table->timestamp('expiry_date')->nullable();
                $table->tinyInteger('is_deleted')->default(0)->comment('0- No, 1- Yes')->nullable();
                $table->unsignedBigInteger('added_by')->nullable(); // Ensure unsignedBigInteger
                $table->timestamps();
                $table->softDeletes();

                // ✅ Foreign Key Constraint (Ensuring `users` table exists before this)
                $table->foreign('added_by')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('gift_cards');
    }
}
