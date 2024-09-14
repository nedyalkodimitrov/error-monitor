@extends("panels.admin.layouts.master")

@section('title')
    Admin Panel | Create App
@endsection

@section("content")
    <div class="card col-12 col-md-9 mx-auto p-4 ">
        <h1 class="text-center">Create App</h1>
        <form action="{{route("admin.app.create")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input class="form-control" type="text" id="title" name="name" placeholder="BestApp">
            </div>

            <div class="form-group mt-2">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"> </textarea>
            </div>

            <livewire:panels.admin.pages.apps.app-form :technologies="$technologies"/>
            <button type="submit" class="btn btn-primary col-12 mt-2">Create</button>
        </form>
    </div>
@endsection

