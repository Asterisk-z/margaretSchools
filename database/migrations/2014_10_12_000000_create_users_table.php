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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'student'])->default('student');
            $table->string('registration_number');
            $table->string('department');
            $table->string('faculty');
            $table->string('gender');
            $table->string('sessionOfEnrolement');
            $table->timestamp('dob')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->enum('temp_password', ['YES', 'NO'])->default('YES');
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
