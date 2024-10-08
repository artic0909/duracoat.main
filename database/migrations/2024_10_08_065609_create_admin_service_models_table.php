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
        Schema::create('admin_service_models', function (Blueprint $table) {
            $table->id();
            $table->string('s_icon');
            $table->string('s_image');
            $table->string('s_title');
            $table->text('s_s_desc');
            $table->text('s_l_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_service_models');
    }
};
