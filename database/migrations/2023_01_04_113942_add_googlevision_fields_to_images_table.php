<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ad_images', function (Blueprint $table) {
            //
            $table->text('labels')->nullable()->after('ad_id');
            $table->text('adult')->nullable()->after('ad_id');
            $table->text('spoof')->nullable()->after('ad_id');
            $table->text('medical')->nullable()->after('ad_id');
            $table->text('violence')->nullable()->after('ad_id');
            $table->text('racy')->nullable()->after('ad_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ad_images', function (Blueprint $table) {
            //
            $table->dropColumn(['labels', 'adult', 'spoof', 'medical', 'violence', 'racy']);
        });
    }
};
