<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {

            $table->increments($column='teachers_id',$primary=true);
            $table->string($column='teachers_name',$length=200);
            $table->string($column='classteacher_of',$length=50);
            $table->bigInteger($column='salary',$auto_increment=false,$unsigned=true,$length=255);
           
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
        Schema::dropIfExists('teachers');
    }
}
