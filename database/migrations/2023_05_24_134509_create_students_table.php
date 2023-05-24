<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->change();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->integer('age')->unsigned();
            $table->string('phone', 20);
            $table->string('cpf', 13);
            $table->boolean('married');
            $table->enum('gender', ["male", "female"]);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
