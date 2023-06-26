@extends('common.layout')
@section("content")
<a href="/task/view" class="btn btn-outline-light rounded-pill m-3 px-5">Back</a>
<section>
    @if(Session::has('text'))
       {{Session::get("text")}}
    @endif

    @if(count($errors)>0)
        {{$errors}}
    @endif
    <div class="container">
        <div class="row align-item-center" style="height: 100vh;">
            <div class="col-md-6 offset-md-3  align-self-center">
                <h1 class="text-light text-center pb-4">
                     Add New Task
                </h1>
                <form action="{{route("task.store")}}" class="bg-light rounded shadow p-5" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Task Name</label>
                        <input type="text" class="form-control" id="name" name="task_name">
                    </div>
                    <div class="form-group">
                        <label for="">Task Duration</label>
                        <input type="text" class="form-control" id="duration" name="task_duration">
                    </div>
                    <div class="form-group">
                        <label for="">Task detail</label>
                        <textarea id="task_detail" cols="30" rows="10" class="form-control" name="task_detail"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-outline-primary px-5 d-block mx-auto mt-3 rounded-pill"
                            onclick="addTask()">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
