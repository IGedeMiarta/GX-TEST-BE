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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('lattitude');
            $table->string('longitude');
            $table->unsignedBigInteger('office_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('probability_id');
            $table->boolean('lead_type')->comment('1=in,0=out');
            $table->unsignedBigInteger('channel_id');
            $table->unsignedBigInteger('media_id');
            $table->unsignedBigInteger('source_id');
            $table->text('general_notes');

            $table->foreign('office_id')->references('id')->on('branch_offices')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('lead_statuses')->onDelete('cascade');
            $table->foreign('probability_id')->references('id')->on('probabilities')->onDelete('cascade');
            $table->foreign('channel_id')->references('id')->on('channels')->onDelete('cascade');
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');
            $table->foreign('source_id')->references('id')->on('sources')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
