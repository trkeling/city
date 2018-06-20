<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_area', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->nullable();
            $table->string('shortname',100)->nullable();
            $table->string('name',100)->nullable();
            $table->string('merger_name', 255)->nullable();
            $table->integer('level')->nullable();
            $table->string('pinyin',100)->nullable();
            $table->string('code', 100)->nullable();
            $table->string('zip_code', 100)->nullable();
            $table->string('first', 50)->nullable();
            $table->string('lng', 100)->nullable();
            $table->string('lat',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_area');
    }
}
