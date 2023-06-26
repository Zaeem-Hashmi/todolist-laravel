<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function show()
    {
        return view('task');
    }

    public function add()
    {
        return view('task_add');
    }

    public function update()
    {

    }

    public function store(Request $request)
    {
//        dd(Auth::user());
        $validator = Validator::make($request->all(), [
            'task_name' =>  'required',
            'task_duration' => 'required',
            'task_detail' => 'required',
        ])->validate();
        $task  = new Tasks();
        $task->user_id  = Auth::user()->id;
        $task->task_name = $request->task_name;
        $task->task_duration = $request->task_duration;
        $task->task_description = $request->task_detail;
        $task->save();
        return redirect()->back()->with("alert-success","task added successfully");
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {

    }
}
