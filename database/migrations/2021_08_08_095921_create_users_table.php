<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('bio')->nullable();
            $table->string('git_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->enum('role', [1, 2, 3]); // where 1 = Super Admin, 2 = Admin, and 3 = Supervisor
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('message_id')->nullable()->constrained('messages', 'id');
            $table->timestamp('email_verified_at')->nullable();
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
}
