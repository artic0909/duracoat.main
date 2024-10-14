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
        Schema::create('admin_teams_models', function (Blueprint $table) {
            $table->id();
            $table->string('t_img');
            $table->string('t_name');
            $table->string('t_prof');
            $table->text('t_insta');
            $table->text('t_fb');
            $table->text('t_twit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_teams_models');
    }
};
