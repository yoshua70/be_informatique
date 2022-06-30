<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            //$table->bigInteger('enseignant_id')->index();
            
            //$table->bigInteger('matiere_id')->index();
            
            //$table->bigInteger('classe_id')->index();
            
            $table->enum('anneeAcademique',['one','two']);
            //$table->primary(['enseignant_id', 'matiere_id' ,'classe_id']);
       
            $table->foreignId('enseignant_id')  
                  ->references('id')  
                  ->on('enseignants')  
                  ->onDelete('cascade');
            $table->foreignId('matiere_id')  
                  ->references('id')  
                  ->on('matieres')  
                  ->onDelete('cascade');
            $table->foreignId('classe_id')  
                  ->references('id')  
                  ->on('classes')  
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
}
