@extends("panels.admin.layouts.master")


@section('title')Admin Panel
@endsection

@section("content")
    @foreach($projects as $project)
        <div class="card col-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img src="{{asset("assets-admin/images/projects/".$project->image)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3>{{$project->title}}</h3>
                        <p>{{$project->description}}</p>
                        <a href="{{route("admin.projects.show",$project->id)}}" class="btn btn-primary">Прочети повече</a>
                    </div>
                </div>
            </div>
        </div>


    @endforeach


@endsection


