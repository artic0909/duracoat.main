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
        Schema::create('admin_bending_service_models', function (Blueprint $table) {
            $table->id();
            $table->string('sb_icon');
            $table->string('sb_image');
            $table->string('sb_title');
            $table->text('sb_s_desc');
            $table->text('sb_l_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_bending_service_models');
    }
};
