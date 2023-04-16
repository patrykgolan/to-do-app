<?php

use App\Models\ToDoTaskStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('to_do_task_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        // create default statuses
        $taskStatuses = ['To Do', 'Completed'];
        foreach ($taskStatuses as $taskStatus){
            ToDoTaskStatus::firstOrCreate([
                'title' => $taskStatus
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_do_task_statuses');
    }
};
