<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiadepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bia_departments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('bia_id')->nullable();
            $table->string('companybiadepartment_id')->nullable();
            $table->string('menu_icon')->nullable();
            $table->string('title_icon')->nullable();
            $table->unsignedInteger('gq_sp')->nullable();
            $table->unsignedInteger('gq_bl')->nullable();
            $table->unsignedInteger('se_6_vr')->nullable();
            $table->unsignedInteger('se_6_tr')->nullable();
            $table->unsignedInteger('se_7_nc')->nullable();
            $table->unsignedInteger('se_7_dcl')->nullable();
            $table->unsignedInteger('se_7_ecl')->nullable();
            $table->unsignedInteger('se_9_oid')->nullable();
            $table->unsignedInteger('cp_spct')->nullable();
            $table->unsignedInteger('cp_tap')->nullable();
            $table->set('status', ['published', 'active', 'draft'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biadepartments');
    }
}
