<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateBymeMission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->increments('ID')->unique();
            $table->string('missionName');
            $table->string('missionNumbe');
            $table->boolean('canceled');
            $table->dateTime('dateofupdate');
           
            $table->timestamps();
        });
        //DB::statement("ALTER TABLE `missions` ADD `ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY");
        DB::statement("ALTER TABLE `missions` MODIFY  `missionNumbe`  VARCHAR(250)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
