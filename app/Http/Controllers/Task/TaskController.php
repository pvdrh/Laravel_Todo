<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
       
        return view('tasks.list', [
            'tasks'=>$tasks
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function edit($id){
        $task = Task::find($id);
        return view('tasks.edit')->with('task',$task);

    }

    public function update(Request $request, $id){
        $name = $request->get('name');
        $deadline = $request->get('deadline');
        $content = $request->get('content');
        // Cập nhật
        $task = Task::find($id);
        $task->name = $name;
        $task->status = 1;
        $task->content = $content;
        $task->deadline = $deadline;
        $task->save();
        return view('tasks.edit');
    }

    public function list(){
        return view('tasks.list');
    }

    public function destroy($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.index');
    }

    public function store(Request $request){
        
         //Lay du lieu trong form
          $name=$request->get('name');
          $deadline=$request->get('deadline');
          $content=$request->get('content');
          
          $deadline = str_replace('T', ' ', $deadline). ':';

          //Tao du lieu moi
          
          $task = new Task();
          $task->name = $name;
          $task->content = $content;
          $task->deadline = $deadline;
          $task->status = 0;
          $task->save();

          return redirect()->route('task.index');
    }

    public function complete($id)
    {
        $task = Task::find($id);
        $task = new Task();
        $task->status=2;
        $task->save();

        return redirect()->route('task.index');
    }

    public function reComplete($id)
    {
        $task = Task::find($id);
        $task = new Task();
        $task->status=1;
        $task->save();

        return redirect()->route('task.index');
    }
}
