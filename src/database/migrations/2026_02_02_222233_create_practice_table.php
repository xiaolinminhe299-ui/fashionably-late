<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice', function (Blueprint $table) {
            $table->id();
            $table->foreignID('category_id')->constrained()->cascadeOnDelete();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->tinyInteger('gender'); // 1: 男性, 2: 女性, 3: その他
            $table->string('email', 255);
            $table->string('tel', 255);
            $table->string('address', 255)->nullable();
            $table->string('building', 255)->nullable();
            $table->text('detail')->nullable();
            $table->timestamps(); // created_at, updated_at
        });
    }

    /*
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practice');
    }
}
