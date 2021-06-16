<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $data = Project::query();
        $projects = $data->orderByDesc('id')->paginate(15)->appends(request()->except('page'));
        return view('panel.store.index',compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug',$slug)->firstorfail();
        return view('panel.store.show',compact('project'));
    }
}
