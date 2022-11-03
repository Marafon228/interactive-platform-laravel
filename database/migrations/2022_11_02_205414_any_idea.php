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
        Schema::create('any_idea', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('link_project')->nullable();
            $table->string('presentation')->nullable();
            $table->string('participation_experience');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('any_idea');
    }
};
