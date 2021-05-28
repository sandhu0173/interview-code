<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tasks;
class Api extends Controller
{
    //get all task
    function tasks(Request $request)
    {
        $tasks=Tasks::all();
        return response()->json($tasks);
    }
    //get sorttask task
    function sorttask(Request $request)
    {
        $tasks=Tasks::where('status','Todo')->orderBy('due_date','ASC')->get();
        return response()->json($tasks);
    }
    //get  task detail
    function taskdetail(Request $request,$id)
    {
        $task=Tasks::find($id);
        return response()->json($task);
    }
    //store task detail
    function storetask(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'due_date' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
         }
        $task=Tasks::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'due_date'=>$request->due_date,
            'status'=>$request->status,
        ]);
        return response()->json($task);
    }
    //update  task detail
    function updatetask(Request $request,$id)
    {
        $validator=Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'due_date' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
         }
         $task=Tasks::find($id);
        $task->title=$request->title;
        $task->description=$request->description;
        $task->due_date=$request->due_date;
        $task->status=$request->status;
        $task->save();
        return response()->json($task);
    }
    //delete  task detail
    function deletetask(Request $request,$id)
    {
        $task=Tasks::find($id);
        $task->delete();
        $message="Success";
        return response()->json($message);
    }
    
}
