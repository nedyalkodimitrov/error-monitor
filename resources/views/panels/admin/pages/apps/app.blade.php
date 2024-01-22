@extends("panels.admin.layouts.master")


@section('title')
    Admin Panel | Create App
@endsection

@section("content")
    <div class="col-12 row p-3 ">
        <div class="col-12 mt-3 card p-3">

            <div class="container row col-12">
                <div class="col-1"></div>
                <h1 class="col-10 text-center">{{$app->name}}</h1>
                <div class="col-1 text-end align-self-center"><i class="fas fa-edit" data-bs-toggle="modal"
                                                                 data-bs-target="#editAppModal"></i></div>
            </div>

            <p><i>{{$app->description}}</i></p>
            <p>This project is build on: <b>{{$app->technology}} {{$app->technology_version}}</b></p>
        </div>

        <div class=" col-12 row mx-auto p-0 gap-5">

            <div class="col  col-md col-lg card mt-3 p-3">
                <div class="container row col-12">
                    <div class="col-1"></div>
                    <h3 class=" col-10 text-center">Versions</h3>
                    <div class="col-1 text-end align-self-center"><i class="fas fa-add" data-bs-toggle="modal"
                                                                     data-bs-target="#addAppVersionModal"></i></div>
                </div>

                <ul class="list-group">
                    @foreach($app->getVersions as $version)
                        <li class="list-group-item list-group-item-action"><a href="{{route("admin.app.version.showOne", ["appId" => $app->id,"versionId" => $version->id])}}">{{$version->version}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class=" col  col-md col-lg    card mt-3 p-3 ">
                <div class="container row col-12">
                    <div class="col-1"></div>
                    <h3 class="text-center col-10">Users</h3>
                    <div class="col-1 text-end align-self-center"><i class="fas fa-edit" data-bs-toggle="modal"
                                                                     data-bs-target="#manageUsersModal"></i></div>
                </div>

                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">Peter Panchev</li>
                    <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="modal fade" id="manageUsersModal" tabindex="-1" aria-labelledby="manageUsersModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Manage users</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">Peter Panchev</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                        <li class="list-group-item list-group-item-action">Georgi Nikolov</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addAppVersionModal" tabindex="-1" aria-labelledby="addAppVersionModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addAppVersionForm" class="col-12">
                        <div class="col-12">
                            <label for="" class="form-label">Version</label>
                            <input type="text" placeholder="v.01" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Version</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editAppModal" tabindex="-1" aria-labelledby="editAppModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editAppVersionForm" class="col-12">
                        <div class="col-12">
                            <label for="appNameInput" class="form-label">Name</label>
                            <input type="text" placeholder="App Name" class="form-control" value="{{$app->name}}" id="appNameInput">
                        </div>
                        <div class="col-12">
                            <label for="appTechnologyInput" class="form-label">Technology</label>
                            <input type="text" placeholder="App Technology" class="form-control" value="{{$app->technology}}" id="appTechnologyInput">
                        </div>
                        <div class="col-12">
                            <label for="appDescriptionInput" class="form-label">Description</label>
                            <input type="text" placeholder="App Technology" class="form-control" value="{{$app->description}}" id="appDescriptionInput">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection

