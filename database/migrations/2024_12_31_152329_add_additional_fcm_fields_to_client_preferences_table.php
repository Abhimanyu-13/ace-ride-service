<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFcmFieldsToClientPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_preferences', function (Blueprint $table) {
            $table->text('fcm_private_key_id')->after('fcm_measurement_id')->nullable();
            $table->text('fcm_private_key')->after('fcm_private_key_id')->nullable();
            $table->text('fcm_client_email')->after('fcm_private_key')->nullable();
            $table->text('fcm_client_id')->after('fcm_client_email')->nullable();
            $table->text('fcm_client_cert_url')->after('fcm_client_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_preferences', function (Blueprint $table) {
            $table->dropColumn('fcm_private_key_id');
            $table->dropColumn('fcm_private_key');
            $table->dropColumn('fcm_client_email');
            $table->dropColumn('fcm_client_id');
            $table->dropColumn('fcm_client_cert_url');
        });
    }
}
