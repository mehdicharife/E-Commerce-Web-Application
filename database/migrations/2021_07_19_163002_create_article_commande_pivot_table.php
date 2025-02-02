<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCommandePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_commande', function (Blueprint $table) {
            $table->primary(['article_id', 'commande_id']);
            

            $table->unsignedBigInteger('article_id');
            $table->index('article_id');

            $table->unsignedBigInteger('commande_id');
            $table->index('commande_id');
            
            $table->unsignedBigInteger('quantity')->nullable();
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
        Schema::dropIfExists('article_commande');
    }
}
