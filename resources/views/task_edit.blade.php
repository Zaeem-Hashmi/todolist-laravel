@extends('common.layout')
@section("content")
<a href="../index.html" class="btn btn-outline-light rounded-pill m-3 px-5">Back</a>
<section>
    <div class="container">
        <div class="row align-item-center" style="height: 100vh;">
            <div class="col-md-6 offset-md-3  align-self-center">
                <h1 class="text-light text-center pb-4">
                     Edit Task
                </h1>
                <form action="" class="bg-light rounded shadow p-5">
                    <div class="form-group">
                        <label for="">Task Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="">Task Duration</label>
                        <input type="text" class="form-control" id="duration">
                    </div>
                    <div class="form-group">
                        <label for="">Task detail</label>
                        <textarea name="" id="task_detail" cols="30" rows="10" class="form-control"></textarea>
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