<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('surveys', function (Blueprint $table) {
            $table->increments('seq');  /* Primary key */
            $table->integer('penR')->nullable(); /* 1 = Yes, 0 = No */

            $table->float('tetR')->nullable(); /* 1 = Yes, 0.5 = Intermediate, 0 = No */
            $table->float('erythR')->nullable();
            $table->float('oxaR')->nullable();

            
            $table->string('sex', 1)->nullable();
            $table->integer('age')->nullable(); /* 1 = 16-20, 2 = 21-25, 3 = 26-30, 4 = 31+ */
            $table->integer('living')->nullable(); 
            $table->integer('abUse')->nullable();
            $table->integer('acne')->nullable();
            $table->boolean('makeup')->nullable();
            $table->boolean('soap')->nullable();
            /*$table->integer('handwash');*/
            $table->integer('diet')->nullable();
            $table->integer('meatPrep')->nullable();
            $table->integer('dietOrganic')->nullable();
            $table->boolean('hosp')->nullable();
            $table->integer('meat')->nullable();
            $table->integer('meatLast')->nullable();
            $table->integer('meatHouse')->nullable();
            $table->string('nation', 100)->nullable();
            $table->string('nation5yrs', 100)->nullable();
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
