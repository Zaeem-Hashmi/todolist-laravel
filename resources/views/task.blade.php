@extends('common.layout')
@section("content")
<section>
    <div class="container">
        <div class="row align-item-center" style="height: 100vh;">
            <div class="col-md-6 offset-md-3  align-self-center">
                <h1 class="text-light text-center pb-4">
                    Task to do
                </h1>
                <div class="shadow border bg-light rounded" style="opacity:0.9;">
                    <ul class="tasks" style="list-style: '→';" id="task">
                    </ul>
                </div>
                <div class="row px-4 mt-4">
                    <div class="col-4">
                        <a href="" class="btn btn-danger d-block">Late Tasks</a>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-warning d-block">Pending Tasks</a>
                    </div>
                    <div class="col-4">
                        <a href="/task/add" class="btn btn-success d-block">Add Tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection