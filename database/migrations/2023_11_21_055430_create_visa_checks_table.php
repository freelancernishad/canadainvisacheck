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
        Schema::create('visa_checks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('status');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('d_o_b');
            $table->string('passport_no');
            $table->string('gmail');
            $table->string('national_id_no');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('contact_no');
            $table->string('job');
            $table->string('job_category');
            $table->date('date_of_issue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_checks');
    }
};
