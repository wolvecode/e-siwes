<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('verified')->default(false);
            $table->foreignId('request_id')->nullable()->constrained('students', 'id');
            $table->string('placement_attachment')->nullable();
            $table->string('placement_description')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
