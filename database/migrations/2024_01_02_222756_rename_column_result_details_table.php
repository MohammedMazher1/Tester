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
        Schema::create('exam_result_details', function (Blueprint $table) {
            $table->renameColumn('examResult_id','exam_result_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_result_details', function (Blueprint $table) {
            $table->renameColumn('exam_result_id','examResult_id');
        });
    }
};
