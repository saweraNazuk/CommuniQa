<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForumTableCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_categories', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('user_id')->unsigned();
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('parent_category')->unsigned();
            $table->string('title');
            $table->string('subtitle');
            $table->integer('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('forum_categories');
    }
}
