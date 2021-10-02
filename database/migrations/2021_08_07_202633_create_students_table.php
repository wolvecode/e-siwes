<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('bio',1025)->nullable();
            $table->foreignId('session_id')->nullable()->constrained('sessions');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('organization_id')->nullable()->constrained('organizations');
            $table->string('matric_no')->unique();
            $table->string('git_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('role')->default('Student');
            $table->string('location')->nullable();
            $table->string('password');
            $table->boolean('assign')->default(false);
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
        Schema::dropIfExists('students');
    }
}
