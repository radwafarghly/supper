<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('user-name')->unique();
            $table->longtext('address')->nullable();
            $table->string('phone',10)->unique()->nullable();
            $table->string('fb-link')->nullable();
            $table->string('twitter-link')->nullable();
            $table->longtext('skills')->nullable();
            $table->year('birth_year')->nullable();
            $table->longtext('education')->nullable();
            $table->string('disability-type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
