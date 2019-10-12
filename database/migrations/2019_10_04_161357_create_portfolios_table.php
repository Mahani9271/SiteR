<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->longText('content');
            $table->text('price');
            $table->text('installments_price');
            $table->text('Installments_period');
            $table->text('tumbpic_path');
            $table->integer('gallery_id');
            $table->text('simple_path');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
