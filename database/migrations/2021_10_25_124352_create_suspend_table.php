<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuspendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspend', function (Blueprint $table) {
            $table->string('id_suspend', 255)->primary();
            $table->string('id_user', 255);
            $table->string('id_admin', 255);
            $table->date('tgl_suspend');
            $table->text('catatan_suspend');
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
        Schema::dropIfExists('suspend');
    }
}
