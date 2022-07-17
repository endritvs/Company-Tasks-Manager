<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $project = Project::with('user')->orderBy('id', 'desc')->where('status', 'Active')->paginate(5);
        $users = User::orderBy('id', 'desc')->get();
        return view('projects')->with(['project' => $project, 'users' => $users]);
    }
    public function complete()
    {
        $project = Project::orderBy('id', 'desc')->where('status', 'Completed')->paginate(5);
        $users = User::orderBy('id', 'desc')->get();
        return view('completed-projects')->with(['project' => $project, 'users' => $users]);
    }
    public function create_view()
    {
        return view('create-project');
    }

    public function create(Request $data)
    {
        Project::create([
            'name' => $data['name'],
            'status' => $data['status'],
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
            'user_id' => $data['user_id'],
            'bio' => $data['bio'],
        ]);
        return redirect("admin/users/projects");
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $users = User::orderBy('id', 'desc')->where('role', 'Admin')->get();

        return view('edit-project')->with(['project' => $project, 'users' => $users]);
        // return redirect("index1/");
    }


    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $project->name = $request->name;
        $project->status = $request->status;
        $project->startDate = $request->startDate;
        $project->endDate = $request->endDate;
        $project->user_id = $request->user_id;
        $project->bio = $request->bio;



        $project->save();
        return redirect("admin/users/projects");
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();
        return  back();
    }


}