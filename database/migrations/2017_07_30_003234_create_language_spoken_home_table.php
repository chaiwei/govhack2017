<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageSpokenHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE `language_spoken_home` (
          `sex_abs` int(1) DEFAULT NULL,
          `gender` varchar(7) DEFAULT NULL,
          `LANP_2016` int(4) DEFAULT NULL,
          `language_spoken_at_home` varchar(30) DEFAULT NULL,
          `state` int(1) DEFAULT NULL,
          `state_name` varchar(28) DEFAULT NULL,
          `region_type` varchar(5) DEFAULT NULL,
          `geography_level` varchar(38) DEFAULT NULL,
          `ASGS_2016` varchar(9) DEFAULT NULL,
          `region` varchar(45) DEFAULT NULL,
          `time` int(4) DEFAULT NULL,
          `census_year` int(4) DEFAULT NULL,
          `value` int(6) DEFAULT NULL,
          `flag_codes` varchar(10) DEFAULT NULL,
          `flags` varchar(10) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE `language_spoken_home`');
    }
}
