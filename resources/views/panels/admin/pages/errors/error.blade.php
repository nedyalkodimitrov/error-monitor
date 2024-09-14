@extends("panels.admin.layouts.master")


@section('title')Admin Panel@endsection

@section("content")
    <div class="card col-12">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h3>{{$error->name}}</h3>
                    <p>{{$error->description}}</p>
                    <p >{{$error->getPriority->name}}</p>
                </div>
            </div>
        </div>
@endsection


