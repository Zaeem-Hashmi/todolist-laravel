<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $validator = Validator::make($request->all(), [
            'task_name' =>  'required',
            'task_duration' => 'required',
            'task_description' => 'required',
        ])->validate();
        return redirect()->back()->with("text",'wrong record');
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {

    }
}
