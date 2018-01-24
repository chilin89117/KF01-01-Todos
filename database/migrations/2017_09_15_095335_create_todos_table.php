<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
  public function up()
  {
    Schema::create('todos', function (Blueprint $table) {
      $table->increments('id');
      $table->string('todo');
      $table->boolean('completed')->default(0);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('todos');
  }
}
