<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('naissances', function (Blueprint $table) {
            $table->id();
            $table->string('nomDeNe');
            $table->date('dateNaissance');
            $table->string('nomDePere');
            $table->string('nomDeMere');
            $table->string('adresse');
            $table->string('sexe');
            $table->string('orderDeNaissance');
            $table->date('dateEnrgistrement');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naissances');
    }
};