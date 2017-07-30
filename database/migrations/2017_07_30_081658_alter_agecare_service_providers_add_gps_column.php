<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAgecareServiceProvidersAddGpsColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement('ALTER TABLE `agecare_service_providers` ADD `lat` VARCHAR(50) NULL AFTER `latlng`, ADD `lng` VARCHAR(50) NULL AFTER `lat`;');
        DB::statement('UPDATE `agecare_service_providers` SET lat = substring_index(`latlng`,',',1), lng = substring_index(`latlng`,',',-1);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
