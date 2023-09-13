<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->company();                    
            $table->city();          
            $table->city();            
            $table->dateTimeTz('departure_time');              
            $table->dateTimeTz('arrival_time');                
            $table->string('train_number', 64);                
            $table->tinyInteger('carriage');                   
            $table->boolean('in_time')->default(true);         
            $table->boolean('deleted')->default(false);   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
