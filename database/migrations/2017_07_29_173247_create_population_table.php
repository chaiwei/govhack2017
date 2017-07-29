<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopulationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE TABLE `population` (
          `id` int(11) NOT NULL,
          `Year` int(4) DEFAULT NULL,
          `SA2Code` int(5) DEFAULT NULL,
          `SA2Name` varchar(40) DEFAULT NULL,
          `gender` varchar(6) DEFAULT NULL,
          `age0` int(3) DEFAULT NULL,
          `age1` int(3) DEFAULT NULL,
          `age2` int(3) DEFAULT NULL,
          `age3` int(3) DEFAULT NULL,
          `age4` int(3) DEFAULT NULL,
          `age5` int(3) DEFAULT NULL,
          `age6` int(3) DEFAULT NULL,
          `age7` int(3) DEFAULT NULL,
          `age8` int(3) DEFAULT NULL,
          `age9` int(3) DEFAULT NULL,
          `age10` int(3) DEFAULT NULL,
          `age11` int(3) DEFAULT NULL,
          `age12` int(3) DEFAULT NULL,
          `age13` int(3) DEFAULT NULL,
          `age14` int(3) DEFAULT NULL,
          `age15` int(3) DEFAULT NULL,
          `age16` int(3) DEFAULT NULL,
          `age17` int(3) DEFAULT NULL,
          `age18` int(3) DEFAULT NULL,
          `age19` int(3) DEFAULT NULL,
          `age20` int(3) DEFAULT NULL,
          `age21` int(3) DEFAULT NULL,
          `age22` int(3) DEFAULT NULL,
          `age23` int(3) DEFAULT NULL,
          `age24` int(3) DEFAULT NULL,
          `age25` int(3) DEFAULT NULL,
          `age26` int(3) DEFAULT NULL,
          `age27` int(3) DEFAULT NULL,
          `age28` int(3) DEFAULT NULL,
          `age29` int(3) DEFAULT NULL,
          `age30` int(3) DEFAULT NULL,
          `age31` int(3) DEFAULT NULL,
          `age32` int(3) DEFAULT NULL,
          `age33` int(3) DEFAULT NULL,
          `age34` int(3) DEFAULT NULL,
          `age35` int(3) DEFAULT NULL,
          `age36` int(3) DEFAULT NULL,
          `age37` int(3) DEFAULT NULL,
          `age38` int(3) DEFAULT NULL,
          `age39` int(3) DEFAULT NULL,
          `age40` int(3) DEFAULT NULL,
          `age41` int(3) DEFAULT NULL,
          `age42` int(3) DEFAULT NULL,
          `age43` int(3) DEFAULT NULL,
          `age44` int(3) DEFAULT NULL,
          `age45` int(3) DEFAULT NULL,
          `age46` int(3) DEFAULT NULL,
          `age47` int(3) DEFAULT NULL,
          `age48` int(3) DEFAULT NULL,
          `age49` int(3) DEFAULT NULL,
          `age50` int(3) DEFAULT NULL,
          `age51` int(3) DEFAULT NULL,
          `age52` int(3) DEFAULT NULL,
          `age53` int(3) DEFAULT NULL,
          `age54` int(3) DEFAULT NULL,
          `age55` int(3) DEFAULT NULL,
          `age56` int(3) DEFAULT NULL,
          `age57` int(3) DEFAULT NULL,
          `age58` int(3) DEFAULT NULL,
          `age59` int(3) DEFAULT NULL,
          `age60` int(3) DEFAULT NULL,
          `age61` int(3) DEFAULT NULL,
          `age62` int(3) DEFAULT NULL,
          `age63` int(3) DEFAULT NULL,
          `age64` int(3) DEFAULT NULL,
          `age65` int(3) DEFAULT NULL,
          `age66` int(3) DEFAULT NULL,
          `age67` int(3) DEFAULT NULL,
          `age68` int(3) DEFAULT NULL,
          `age69` int(3) DEFAULT NULL,
          `age70` int(3) DEFAULT NULL,
          `age71` int(3) DEFAULT NULL,
          `age72` int(3) DEFAULT NULL,
          `age73` int(3) DEFAULT NULL,
          `age74` int(3) DEFAULT NULL,
          `age75` int(3) DEFAULT NULL,
          `age76` int(3) DEFAULT NULL,
          `age77` int(3) DEFAULT NULL,
          `age78` int(3) DEFAULT NULL,
          `age79` int(3) DEFAULT NULL,
          `age80` int(3) DEFAULT NULL,
          `age81` int(3) DEFAULT NULL,
          `age82` int(3) DEFAULT NULL,
          `age83` int(3) DEFAULT NULL,
          `age84` int(3) DEFAULT NULL,
          `age85` int(3) DEFAULT NULL,
          `total` int(5) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

  
        DB::statement('ALTER TABLE `population`
          ADD PRIMARY KEY (`id`),
          ADD KEY `SA2Code` (`SA2Code`);');
  
        DB::statement('ALTER TABLE `population`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE `population`');
    }
}
