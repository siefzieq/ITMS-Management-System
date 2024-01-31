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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->foreignId('order_id')->constrained('orders');
            $table->string('type');
            $table->string('PIC');
            $table->date('project_start');
            $table->date('project_end');
            $table->string('project_duration')->nullable();
            $table->string('project_status')->default('In Review');
            $table->foreignId('lead_id')->nullable()->constrained('lead_developers');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
