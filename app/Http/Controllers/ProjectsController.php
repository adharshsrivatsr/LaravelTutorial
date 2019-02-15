<?php

namespace App\Http\Controllers;
use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //auth for all functions

    }
    public function index()
    {
        $projects= Project::where('owner_id', auth()->id())->get();

        return view('projects.index',['projects'=>$projects]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {

        $validated=request()->validate([
            'desc'=>['required','min:5'],
            'number'=>['required','min:5','numeric']
        ]);

        //$validated['owner_id']= auth()->id();
        
        Project::create(['owner_id'=>auth()->id()] + $validated);

        // Project::create([
        //     'desc'=>request('name'),
        //     'number'=>request('number')
        // ]);

        //  $project = new Project();
        //  $project->desc=request('title'); 
        //  $project->save();
         //return view('projects.index');
         return redirect('/projects');

        //return request()->all();
    }

    public function show(Project $project)
    {
        // if($project->owner_id != auth()->id())
        // {
        //         abort(403);
        // }
        
        //abort_if($project->owner_id !== auth()->id(),403);  

        $this->authorize('view',$project); 

        //abort_if(! auth->user()->owns($project),403);

        //$project=Project::findorFail($id);
        return view('projects.show',compact('project'));
    }


    public function edit(Project $project)
    {
        //$project=Project::findorFail($id);

        return view('projects.edit',compact('project'));
    }

    public function update(Project $project)
    {
       // dd("hello");
        
       //$project->delete(request(['id']));

       // $project=Project::findorFail(request('id'));
       request()->validate([
        'name'=>['required','min:5'],
        'number'=>['required','min:5','max:9']
    ]);

        $project->desc=request('name');
        $project->number=request('number');
        $project->created_at=request('created');

        $project->save();
        return redirect('/projects');

    }

    public function destroy($id)
    {
        $project=Project::findorFail($id);
        $project->delete();
        return redirect('/projects');
        
    }
}
