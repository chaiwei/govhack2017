<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgecareServiceProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement('CREATE TABLE `agecare_service_providers` (
            `id` int(11) NOT NULL,
            `provider_name` varchar(94) DEFAULT NULL,
            `organisation_type` varchar(25) DEFAULT NULL,
            `service_name` varchar(67) DEFAULT NULL,
            `address1` varchar(50) DEFAULT NULL,
            `address2` varchar(50) DEFAULT NULL,
            `suburb` varchar(50) DEFAULT NULL,
            `state` varchar(50) DEFAULT NULL,
            `postcode` int(6) DEFAULT NULL,
            `latlng` varchar(100) DEFAULT NULL,
            `AgedCarePlanningRegion2015` varchar(23) DEFAULT NULL,
            `care_type` varchar(64) DEFAULT NULL,
            `residential_places` varchar(3) DEFAULT NULL,
            `home_care_low_places` varchar(3) DEFAULT NULL,
            `home_care_high_places` varchar(3) DEFAULT NULL,
            `transition_care_places` varchar(3) DEFAULT NULL,
            `ABS_remoteness` varchar(25) DEFAULT NULL,
            `australian_government_funding2015_2016` varchar(13) DEFAULT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE `agecare_service_providers`');
    }
}
