<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('input_forms', function (Blueprint $table) {
            $table->id();
            $table->string('programs')->nullable();
            $table->string('performance')->nullable();
            $table->string('participants')->nullable();
            $table->string('pt_q1')->nullable();
            $table->string('pt_q2')->nullable();
            $table->string('pt_q3')->nullable();
            $table->string('pt_q4')->nullable();
            $table->string('pt_total')->nullable();
            $table->string('fr_q1')->nullable();
            $table->string('fr_q2')->nullable();
            $table->string('fr_q3')->nullable();
            $table->string('fr_q4')->nullable();
            $table->string('fr_total')->nullable();
            $table->string('fund')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('input_forms');
    }
};
