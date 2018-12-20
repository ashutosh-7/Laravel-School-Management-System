<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments($column='student_id',$primary=true);
            $table->string($column='students_name',$length=200);
            $table->string($column='students_class',$length=50);
            $table->Integer($column='students_age',$auto_increment=false,$unsigned=true);
            $table->string($column='class_teacher',$length=200);
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
        Schema::dropIfExists('students');
    }
}
