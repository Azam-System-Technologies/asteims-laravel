<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_template', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('salary_templateID');
            $table->string('salary_grades');
            $table->string('baisc_grades');
            $table->string('overtime_rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salary_template');
    }
}
