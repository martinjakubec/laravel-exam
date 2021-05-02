<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

function predump($thingy)
{
    echo '<pre>';
    var_dump($thingy);
    echo '</pre>';
}

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $order = $request->input('order_by');
        if ($order == 'AZ') {
            return view('index', [
                'tasks' => \App\Models\Task::orderBy('title')->get(),
            ]);
        } else if ($order == 'ZA') {
            return view('index', [
                'tasks' => \App\Models\Task::orderByDesc('title')->get(),
            ]);
        } else {
            return view('index', [
                'tasks' => \App\Models\Task::all(),
            ]);
        }
    }

    public function show(Request $request, $id)
    {
        $task = \App\Models\Task::find($id);
        return view('task', array(
            'id' => $id,
            'title' => $task->title,
            'description' => $task->description,
            'date_added' => $task->created_at
        ));
    }
    public function destroy(Request $request, $id)
    {
        $task = \App\Models\Task::find($id);
        if ($task) {
            $task->delete();
        } else {
            return 'I am so not going to fall for that.';
        }
        return view('delete_task', ['id' => $id]);
    }
}
