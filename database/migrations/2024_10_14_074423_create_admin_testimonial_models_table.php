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
        Schema::create('admin_testimonial_models', function (Blueprint $table) {
            $table->id();
            $table->string('tst_img');
            $table->string('tst_name');
            $table->string('tst_prof');
            $table->text('tst_msg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_testimonial_models');
    }
};
