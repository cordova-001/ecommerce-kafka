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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->required();
            $table->string('surname')->required();
            $table->string('other_name')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('zone')->required();
            $table->string('district')->required();
            $table->string('educational_qualification')->nullable();
            $table->string('professional_qualification')->nullable();
            $table->string('profession')->nullable();
            $table->string('professional_status')->nullable();
            $table->string('college_professional_group')->nullable();
            $table->string('artisan_trade')->nullable();
            $table->string('artisan_certificate')->nullable();
            $table->string('employment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
