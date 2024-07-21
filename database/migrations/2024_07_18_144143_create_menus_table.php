<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration {
    public function up() {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('harga');
            $table->string('kategori');
            $table->string('status');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('menus');
    }
}
