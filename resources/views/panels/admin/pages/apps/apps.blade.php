@extends("panels.admin.layouts.master")

@section('title')
    Admin Panel | Apps
@endsection

@section("content")
    <div class="col-12 row">
        <div class="col-2"></div>
        <h1 class="text-center col-8">Your Apps</h1>
        <a class="btn btn-success col-2 h-auto align-self-center" href="{{route("admin.app.showForm")}}">Create App <i
                class="fas fa-plus"></i></a>
    </div>
    <hr>
    <div class="container row col-12 ">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($apps as $app)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <th>{{$app->name}}</th>
                    <th>{{$app->description}}</th>
                    <th> <a href="{{route("admin.app.showOne",["appId" => $app->id])}}" class="">View
                            App</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
