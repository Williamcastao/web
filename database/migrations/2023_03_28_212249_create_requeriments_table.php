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
        Schema::create('requeriments', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->bigInteger('typerequeriments_id')->unsigned();
            $table->foreign('typerequeriments_id')->references('id')->on('typerequeriments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requerimetns');
    }
};
