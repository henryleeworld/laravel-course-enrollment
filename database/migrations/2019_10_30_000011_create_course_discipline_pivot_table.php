<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('course_discipline', function (Blueprint $table) {
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('discipline_id')->constrained()->onDelete('cascade');
        });
    }
};
