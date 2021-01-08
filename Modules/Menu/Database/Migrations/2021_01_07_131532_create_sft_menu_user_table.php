<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSftMenuUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sft_menu_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('sft_user');
            $table->foreignId('menu_id')->constrained('sft_menu');
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
        Schema::dropIfExists('sft_menu_user');
    }
}
