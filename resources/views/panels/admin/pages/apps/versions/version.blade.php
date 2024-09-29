@extends("panels.admin.layouts.master")


@section('title')
    Admin Panel | Create App
@endsection

@section("content")
    @livewire('panels.admin.pages.apps.versions.version', ['version' => $version])
@endsection

