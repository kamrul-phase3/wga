<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->text('upstream_dependencies')->nullable();
            $table->text('external_dependencies')->nullable();
            $table->text('desktop_applications')->nullable();
            $table->text('mobile_apps')->nullable();
            $table->text('risk_assets')->nullable();
            $table->text('risk_vulnerabilities')->nullable();
            $table->text('bia_scorecards')->nullable();
            $table->enum('dashboard_type', ['A', 'B'])->default('A');
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
        Schema::dropIfExists('companies');
    }
}
