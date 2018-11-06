<?php
// Author: Tien Quang Nguyen
// Date: Nov 6, 2018

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadlineUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headline_user', function (Blueprint $table) {
            $table->unsignedInteger('headline_id');
            $table->unsignedInteger('user_id');
            $table->primary(['headline_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headline_user');
    }
}
