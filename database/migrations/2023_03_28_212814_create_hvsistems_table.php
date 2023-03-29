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
        Schema::create('hvsistems', function (Blueprint $table) {
            $table->id();
            $table->longText('maintenancedescription');
            $table->longText('softwarefeatures');
            $table->longText('hardwarefeatures');
            $table->longText('comments');
            $table->date('maintenancedate');
            $table->bigInteger('systems_id')->unsigned();
            //uniones
            $table->foreign('systems_id')->references('id')->on('systems');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hvsistems');
    }
};
