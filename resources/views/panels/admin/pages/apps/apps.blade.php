@extends("panels.admin.layouts.master")


@section('title')
    Admin Panel | Apps
@endsection

@section("content")
    <div class="col-12 row">
        <div class="col-2"></div>
        <h1 class="text-center col-8">Your Apps</h1>
        <a class="btn btn-success col-2 h-auto align-self-center" href="{{route("admin.app.showForm")}}">Create App <i class="fas fa-plus"></i></a>
    </div>
    <hr>
<div class="container row col-12 ">
    @foreach($apps as $app)
       <div class="col-12 col-md-4 col-lg-3">
           <div class="card col-11 mx-auto ">
               <div class="card-body">
                   <div class="row">
                       <div class="col-12">
                           <h3 class="card-title">{{$app->name}}</h3>
                           <p>{{$app->description}}</p>
                           <a href="{{route("admin.app.showOne",["appId" => $app->id])}}" class="btn btn-primary col-12">View App</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    @endforeach
</div>
@endsection


