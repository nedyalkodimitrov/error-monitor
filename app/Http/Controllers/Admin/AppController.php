<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\AppVersion;
use App\Models\Technology;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function showApps()
    {
        $apps = App::all();
        return view('panels.admin.pages.apps.apps')->with('apps', $apps);
    }

    public function showApp($appId)
    {
        $app = App::findOrFail($appId);
        $technologies = Technology::all();
        return view('panels.admin.pages.apps.app')->with('app', $app)->with('technologies', $technologies);
    }

    public function showAppForm()
    {
        $technologies = Technology::all();

        return view('panels.admin.pages.apps.appForm')->with('technologies', $technologies);
    }

    public function createApp(Request $request)
    {
        $app = App::create([
            "name" => $request->name,
            "description" => $request->description,
            "technology" => $request->technology,
            "technology_version" => $request->technology_version,

        ]);

        return redirect()->route('admin.app.showForm');
    }

    public function editApp($appId, Request $request)
    {
        App::findOrFail($appId)->update([
            "name" => $request->name,
            "description" => $request->description,
            "technology" => $request->technology,
            "technology_version" => $request->technology_version,
        ]);

        return redirect()->back();
    }

    public function deleteApp($appId)
    {
        App::deletedOrFail($appId);

        return redirect()->route('admin.apps.showAll');
    }

    public function showAppVersion($versionId)
    {
        $version = AppVersion::findOrFail($versionId)->with('app')->first();

        return view('panels.admin.pages.apps.versions.version')->with('version', $version);
    }

    public function createAppVersion($appId, Request $request)
    {
        $appVersion = AppVersion::create([
            "app_id" => $appId,
            "version" => $request->appVersion,
        ]);
        return response()->json(["id" => $appVersion->id, "version" => $appVersion->version]);
    }

    public function editAppVersion(AppVersion $version, Request $request)
    {
        $appVersion = $version->update([
            "version" => $request->appVersion,
        ]);

        return response()->json([
            "success" => true,
            "id" => $version->id,
            "version" => $appVersion->appVersion
        ], 200);
    }

    public function deleteAppVersion($id)
    {
        AppVersion::deletedOrFail($id);

        return response()->json(["success" => true]);
    }
}
