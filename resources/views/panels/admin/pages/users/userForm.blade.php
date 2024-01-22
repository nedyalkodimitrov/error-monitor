
@extends("panels.admin.layouts.master")


@section('title')Admin Panel
@endsection

@section("content")

    <div class="card col-9 mx-auto">
        <div class="card-body col-12">
            <form action="" method="post">
                @csrf

                <input type="file" name="image" class="form-control">
                <input type="text" name="name" class="form-control">
                <input type="text" name="description" class="form-control">


                <input type="submit" class="btn btn-primary" value="Create">



            </form>
        </div>
    </div>

@endsection

