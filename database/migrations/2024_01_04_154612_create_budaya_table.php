<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudayaTable extends Migration
{
    public function up()
    {
        Schema::create('budaya', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->longText('description');
            $table->unsignedBigInteger('daerah_id')->nullable();
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->string('image', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('budaya');
    }
}


