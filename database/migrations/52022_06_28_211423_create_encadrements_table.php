<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('encadrements', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            
            $table->BigInteger('enseignant_id')->unsigned();
            
            $table->BigInteger('etudiant_id')->unsigned();
            
            $table->enum('theme',['one','two']);
            $table->enum('anneeAcademique',['one','two']);
            //$table->primary(['enseignant_id', 'etudiant_id']);
        });
            Schema::table('encadrements', function($table) {
                
            
            //$table->softDeletes();
            $table->foreign('enseignant_id')  
                  ->references('id')  
                  ->on('enseignants')
                  ->onUpdate('cascade')  
                  ->onDelete('cascade');
            $table->foreign('etudiant_id')  
                  ->references('id')  
                  ->on('etudiants')
                  ->onUpdate('restrict')  
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
        Schema::dropIfExists('encadrements');
    }
}
