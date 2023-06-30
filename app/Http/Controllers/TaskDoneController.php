<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskDone;
use Illuminate\Http\Request;

class TaskDoneController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $date = $request->input('date');

        $query = TaskDone::query();

        // Search by date
        if ($date) {
            $query->whereDate('created_at', $date);
        }

        $task_done = $query->get();

        return view('task_done.dashboard', [
            'task_done' => $task_done
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task_id = $request->value;
        $task = Task::findOrFail($task_id);
         

        TaskDone::create([
            'title' => $task->title,
            'timestarted' => $task->timestarted,
            'target_time_to_complete' => $task->target_time_to_complete
        ]);


        $task->update([
            'task_id' => 0
        ]);

        //dd($task);
        $task->delete();

        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = TaskDone::findOrFail($id);

        $task->delete();

        return redirect(route('taskdone.index'));
    }
}
