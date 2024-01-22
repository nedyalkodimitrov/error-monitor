
@extends("panels.admin.layouts.master")


@section('title')Admin Panel | Create App
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

          <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3"> </textarea>
          </div>

          <div class="form-group">
              <label for="technology">Technology</label>
              <select class="form-control" id="technology" name="technology">

                  <option value="tech1">tech 1</option>
                  <option value="tech2">tech 2</option>
                  <option value="tech3">tech 3</option>
{{--                  @foreach($technologies as $technology)--}}
{{--                      <option value="{{$technology->id}}">{{$technology->name}}</option>--}}
{{--                  @endforeach--}}
              </select>
          </div>
          <div class="form-group">
              <label for="version">Technology Version</label>
              <select class="form-control" id="version" name="technology_version">
                  <!-- Replace with your technology versions -->
                  <option value="v1">Version 1</option>
                  <option value="v2">Version 2</option>
                  <option value="v3">Version 3</option>
              </select>
          </div>
          <button type="submit" class="btn btn-primary col-12 mt-2">Create</button>
      </form>
  </div>
@endsection

