<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForumThreadVisitationTimestampsCreateTable extends Migration
{
    public function up()
    {
        Schema::table('forum_thread_visitations', function (Blueprint $table) {
            $table->create();
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('thread_id');
            $table->timestamp('visited_at');
            $table->timestamps();
        });
    }
}
