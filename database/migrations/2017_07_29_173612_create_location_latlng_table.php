<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationLatlngTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement('CREATE TABLE `location_latlng` (
            `code` int(5) NOT NULL,
            `name` varchar(40) DEFAULT NULL,
            `latlng` varchar(30) DEFAULT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

        DB::statement('ALTER TABLE `location_latlng` 
          ADD PRIMARY KEY (`code`);
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE `location_latlng`');
    }
}
