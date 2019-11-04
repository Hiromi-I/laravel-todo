<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests\StoreTask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks/index', [
            'tasks' => $tasks,
        ]);
    }

    public function create()
    {
        return view('tasks/create');
    }

    public function store(StoreTask $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect()->route('tasks.index');
    }
}
