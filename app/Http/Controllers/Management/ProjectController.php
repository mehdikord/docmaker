<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Project;
use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::query();
        $projects = $data->orderByDesc('id')->paginate(15)->appends(request()->except('page'));
        return view('management.projects.index',compact('projects'));
    }

    public function store(Request $request)
    {
        $request->merge(['slug'=>str_replace(' ','-',$request->slug)]);
        $this->validate($request,['name'=>'required|max:225','slug'=>'required|unique:projects|max:225','logo'=>'nullable|image','url'=>'required']);
        $logo=null;
        if ($request->hasFile('logo')){
            $logo = Storage::put('public/images/projects',$request->file('logo'));
        }
        Project::create([
            'user_id'=>auth()->id(),
            'name'=>$request->name,
            'slug'=>$request->slug,
            'url'=>$request->url,
            'logo'=>$logo,
            'description'=>$request->description,
        ]);
        return back()->with(alert_message('باموفقیت ثبت شد','success'));
    }

    public function update(Request $request,Project $project)
    {
        $request->merge(['slug'=>str_replace(' ','-',$request->slug)]);
        $this->validate($request,['name'=>'required|max:225','slug'=>"required|unique:projects,slug,$project->id|max:225",'logo'=>'nullable|image','url'=>'required']);
        $logo=$project->logo;
        if ($request->hasFile('logo')){
            if (!empty($project->logo)){
                Storage::delete($project->logo);
            }
            $logo = Storage::put('public/images/projects',$request->file('logo'));
        }
        $project->update([
            'user_id'=>auth()->id(),
            'name'=>$request->name,
            'slug'=>$request->slug,
            'url'=>$request->url,
            'logo'=>$logo,
            'description'=>$request->description,
        ]);
        return back()->with(alert_message('باموفقیت ویرایش ثبت شد','success'));

    }

    public function show(Project $project)
    {
        return view('management.projects.show',compact('project'));
    }

    public function add_folder(Project $project,Request $request)
    {
        $this->validate($request,['name'=>'required|max:225']);
        $project->folders()->create(['name'=>$request->name]);
        return back()->with(alert_message('پوشه باموفقیت ساخته شد','success'));
    }

    public function add_url(Project $project,Request $request)
    {
        $this->validate($request,[
            'title'=>'required|max:225',
            'url'=>'required|max:225',
            'url_method'=>'required|max:225',
            'folder_id'=>'nullable|exists:folders,id',
            'val_name*'=>'nullable|max:225',
            'val_type*'=>'nullable|max:225',
            'val_required*'=>'nullable|max:225',
        ]);
        if ($request->filled('folder_id') && !$project->folders()->where('id',$request->folder_id)->exists()){
            return back()->with(alert_message('پوشه مورد نظز یافت نشد','error'));
        }
        $url = $project->urls()->create([
            'folder_id'=>$request->folder_id,
            'title'=>$request->title,
            'url'=>$request->url,
            'method'=>$request->url_method,
            'response'=>$request->url_response,
            'description'=>$request->description,
        ]);

        //create url params
        $val_counter=0;
        if ($request->filled('val_type') && count($request->val_type)){
            foreach ($request->val_type as $item){
                isset($request->val_name[$val_counter])?$name = $request->val_name[$val_counter] : $name=null;
                isset($request->val_description[$val_counter])?$description = $request->val_description[$val_counter] : $description=null;
                $url->params()->create([
                    'name'=>$name,
                    'type'=>$item,
                    'required'=>$request->val_required[$val_counter],
                    'description'=>$description
                ]);
                $val_counter++;
            }
        }
        return back()->with(alert_message('درخواست باموفقیت ساخته شد','success'));

    }

    public function update_url(Url $url,Request $request)
    {
        $this->validate($request,[
            'title'=>'required|max:225',
            'url'=>'required|max:225',
            'url_method'=>'required|max:225',
            'folder_id'=>'nullable|exists:folders,id',
            'val_name*'=>'nullable|max:225',
            'val_type*'=>'nullable|max:225',
            'val_required*'=>'nullable|max:225',
        ]);
        $project = $url->project;
        if ($request->filled('folder_id') && !$project->folders()->where('id',$request->folder_id)->exists()){
            return back()->with(alert_message('پوشه مورد نظز یافت نشد','error'));
        }
        $url->update([
            'folder_id'=>$request->folder_id,
            'title'=>$request->title,
            'url'=>$request->url,
            'method'=>$request->url_method,
            'response'=>$request->url_response,
            'description'=>$request->description,
        ]);
        //delete params
        if (count($url->params)){
            $url->params()->delete();
        }
        //create url params
        $val_counter=0;
        if ($request->filled('val_type') && count($request->val_type)){
            foreach ($request->val_type as $item){
                isset($request->val_name[$val_counter])?$name = $request->val_name[$val_counter] : $name=null;
                isset($request->val_description[$val_counter])?$description = $request->val_description[$val_counter] : $description=null;
                $url->params()->create([
                    'name'=>$name,
                    'type'=>$item,
                    'required'=>$request->val_required[$val_counter],
                    'description'=>$description
                ]);
                $val_counter++;
            }
        }
        return back()->with(alert_message('درخواست باموفقیت ویرایش شد','success'));

    }

    public function delete_url(Url $url)
    {
        $url->delete();
        return back()->with(alert_message('درخواست باموفقیت حذف شد','success'));

    }

    public function delete_folder(Folder $folder)
    {
        $folder->urls()->delete();
        $folder->delete();
        return back()->with(alert_message('پوشه باموفقیت حذف شد','success'));

    }
}
