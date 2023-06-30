<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodolist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     const TODOLIST = "todolist",
     TASK = "task",
     STEP = "step";
    public function up():void
    {
       self::createTodoListTable();
       self::createTaskTable();
       self::createStepTable();

    }

    public function down()
    {
        $drop = [
            self::TODOLIST,
            self::TASK,
            self::STEP,
        ];

        foreach($drop as $tableName){
            Schema::dropIfExists($tableName);
        }
    }

    protected static function createTodoListTable(){
        Schema::create(self::TODOLIST, function(Blueprint $table){
            $table->id();
            
        });
    }

    protected static function createTaskTable(){
        Schema::create(self::TASK, function(Blueprint $table){
            $table->id();
            
        });
    }

    protected static function createStepTable(){
        Schema::create(self::STEP, function(Blueprint $table){
            $table->id();
            
        });
    }
}
