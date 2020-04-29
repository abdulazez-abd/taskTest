<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        // $tasks=DB::table('tasks')->get();
        $task =  Task::orderBy(created_at)->get();
        return view('tasks.index',compact('tasks'));
    }  

    public function show($id){

        // $task = DB::table('task')->find($id);
        $task = Task::where('id',$id)->get();

        return view('tasks.show',compact('task'));
    }
    public function store(Request $request){
        $request->validate([
                'name' => 'required|max:255',
        ]);

        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect()->back();
    }
    public function destroy($id){
        // DB::table('tasks')->where('id' , '=', $id)->delete();
        $task=Task::find($id);
        $task->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $tasks = Task::Orderby(created_at)->get();
        $task = Task::findOrFiail($id);
        return view ('task' , compact('task','tasks'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->name = $request->name;
        $task->save();
        return redirect('/');  
    }
  
}
