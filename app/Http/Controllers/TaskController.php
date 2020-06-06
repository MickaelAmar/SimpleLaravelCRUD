<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::get();
    }

    public function get(int $id)
    {
        return Task::findOrFail($id);
    }

    public function edit(Request $request, $id)
    {
        return view('tasks.form', ['task' => Task::findOrFail($id)]);
    }

    public function create(Request $request)
    {
        $this->validateTask($request);

        $task = new Task($request->all());
        $task->save();

        return redirect()->route('tasks.edit', $task->id);
    }

    public function update()
    {
        Task::findOrFail($id)->update($request->all());
        return redirect()->route('tasks.edit', ['id' => $id]);
    }

    public function delete()
    {

    }

    protected function validateTask(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'priority' => 'nullable|numeric'
        ]);
    }
}
