<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('science_idea', function (Blueprint $table) {
            $table->id();
            $table->string('inn');
            $table->string('address');
            $table->integer('nomination');//Номинация выбрать
            $table->integer('direction');//Направление выбрать
            $table->string('revenue')->nullable();//Выручка (руб)
            $table->string('project_readiness_stage');//Стадия готовности проекта
            $table->string('experience_participation');//Опыт участия в программах поддержки наукоемких проектов
            $table->string('name');//Название проекта
            $table->string('link_project')->nullable();
            $table->string('presentation');//Файл
            $table->string('business_plan');//Файл
            $table->string('copies_security_documents');//Файлы
            $table->string('confirmation_project_development')->nullable();//ссылки на публикации, исследования, заключения
            $table->string('media_file');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('science_idea');
    }
};
