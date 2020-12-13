<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiaAssessmentTable extends Migration {
    public function up() {
        Schema::create('bia_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('bia_id')->nullable();
            $table->unsignedInteger('department_id')->nullable();
            $table->boolean('section_id')->default(1);
            $table->string('meta')->nullable();
            $table->text('data')->nullable();
            $table->boolean('reset')->default(0);
            $table->timestamps();
            $table->index(['bia_id', 'department_id', 'section_id', 'meta']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bia_assessments');
    }
}
