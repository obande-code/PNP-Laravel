<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePnpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnps', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('Rank', 255)->nullable();
            $table->string('station', 255)->nullable();
            $table->string('home', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('device', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pnps');
    }
}
