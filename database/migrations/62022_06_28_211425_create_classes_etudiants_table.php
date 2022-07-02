<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_etudiants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            
            $table->BigInteger('etudiant_id')->unsigned();
            
            $table->BigInteger('classe_id')->unsigned();
            
            $table->enum('anneeAcademique',['one','two']);
            $table->timestamps();
            //$table->primary(['etudiant_id', 'classe_id']);
        });
        Schema::table('classe_etudiants', function($table) {
            $table->foreign('etudiant_id')  
                  ->references('id')  
                  ->on('etudiants') 
                  ->onUpdate('cascade')  
                  ->onDelete('cascade');
            $table->foreign('classe_id')  
                  ->references('id')  
                  ->on('classes') 
                  ->onUpdate('cascade')  
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
        Schema::dropIfExists('classes_etudiants');
    }
}
