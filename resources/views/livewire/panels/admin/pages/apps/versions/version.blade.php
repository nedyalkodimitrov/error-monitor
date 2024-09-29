<div>
    <div class="col-12 row p-3 ">
        <div class="col-12 mt-3 card p-3">

            <div class="container row col-12">
                <div class="col-1"></div>
                <h1 class="col-10 text-center">{{$version->app->name}} <span
                        id="title-version">{{$version->version}}</span></h1>
                <div class="col-1 text-end align-self-center"><i class="fas fa-edit" data-bs-toggle="modal"
                                                                 data-bs-target="#editAppVersionModal"></i></div>
            </div>

            <div class="row">
                <p class="col">Secret Key</p>
                <p class="col">{{\Illuminate\Support\Facades\Crypt::decryptString($version->secret_key)}}</p>
            </div>
        </div>

        <div class=" col-12 row mx-auto p-0 gap-5">

            <div class="col-12  col-md col-lg card mt-3 p-3">
                <div class="container row col-12">
                    <div class="col-1"></div>
                    <h3 class=" col-10 text-center">Errors</h3>
                    <div class="col-1 text-end align-self-center"><i class="fas fa-add" data-bs-toggle="modal"
                                                                     data-bs-target="#addAppVersionModal"></i></div>
                </div>

                <ul class="list-group">
                    @foreach($version->errors as $error)
                        <li class="list-group-item list-group-item-action"><a href="{{route("admin.app.error.show", ["errorId" => $error->id, "id" => $version->app->id, "versionId" => $version->id])}}">{{$error->name}}
                                |{{$error->description}}</a></li>
                    @endforeach
                </ul>
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
                            <label for="" class="form-label">Name</label>
                            <input type="text" placeholder="Error" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Description</label>
                            <input type="text" placeholder="Error Description" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Priority</label>
                            <select class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Bug</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editAppVersionModal" tabindex="-1" aria-labelledby="editAppVersionModal"
         aria-hidden="true" wire:ignore>
        <div class="modal-dialog">
            @livewire("panels.admin.pages.apps.versions.version-edit", ["appVersion" => $version])
        </div>
    </div>
</div>
