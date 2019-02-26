<?php

namespace App\Http\Controllers;
use App\Task;
use App\Project;
use Illuminate\Http\Request;



class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        request()->validate(['task'=>'required | min:5']);

        Task::create([
            
            'project_id'=>$project->id,
            'task' => request('task')
            
        ]);

        return back();
    }
    
    public function update(Task $task)
    {
    
        //dd(request()->all());
        // if(request()->has('completed'))
        //    $task->complete();
        // else    
        //     $task->incomplete();         

        $task->update([
            'completed' => request()->has('completed')
        ]);
        // $method= request()->has('completed') ? 'complete' : 'incomplete';
        // $task->$method();


        return back();
    }
    
   
     //
}
