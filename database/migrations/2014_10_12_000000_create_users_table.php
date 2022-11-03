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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->dateTime('date_of_birth');
            $table->string('country');
            $table->string('city');
            $table->string('citizenship');
            $table->integer('gender');//0- м 1-ж
            //$table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->text('education')->nullable();//Вуз специальность год окончания
            $table->integer('employment');//0- по найму 1- на себя 2-без работы
            $table->integer('work_experience');//Опыт работы (лет)
            $table->text('skills');//
            $table->text('achievements');//достижения / проф опыт
            $table->integer('presence_team');//наличие команды
            $table->integer('role_team');//0-участник 2-капитан
            $table->string('patent')->nullable();//Патенты док прик
            $table->string('company')->nullable();//Компания  док прик
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_image')->nullable();
            $table->integer('id_current_idea')->nullable();
            $table->integer('id_science_idea')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
