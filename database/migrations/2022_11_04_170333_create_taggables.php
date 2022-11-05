<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('taggables', function (Blueprint $table) {
                $table->integer('tag_id')->index()->unsigned();
                $table->integer('taggable_id')->index()->unsigned();
                $table->string('taggable_type');
                /*$table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();*/
            }
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
