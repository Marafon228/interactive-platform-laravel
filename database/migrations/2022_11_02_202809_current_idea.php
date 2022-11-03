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
        Schema::create('current_idea', function (Blueprint $table) {
            $table->id();
            $table->integer('participation_experience_count');
            $table->integer('id_team_captain');
            $table->integer('selected_task');
            $table->text('summary');//резюме
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_idea');
    }
};
