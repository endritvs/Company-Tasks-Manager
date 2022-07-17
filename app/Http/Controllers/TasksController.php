<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index()
    {
        $task = Task::orderBy('id', 'desc')->where('status', 'Active')->paginate(5);
        $project = Project::orderBy('id', 'desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        return view('active-task')->with(['task' => $task, 'project' => $project, 'users' => $users]);
    }

    public function index1()
    {
        $task = Task::orderBy('id', 'desc')->where('status', 'Completed')->paginate(5);
        $project = Project::orderBy('id', 'desc')->get();
        $users = User::orderBy('id', 'desc')->get();
        return view('completed-task')->with(['task' => $task, 'project' => $project, 'users' => $users]);
    }

    public function create(Request $data)
    {
        Task::create([
            'name' => $data['name'],
            'status' => $data['status'],
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
            'user_id' => $data['user_id'],
            'project_id' => $data['project_id'],
            'bio' => $data['bio'],
        ]);
        return redirect('/admin/task/active-task');
    }

    public function create_view()
    {
        $project = Project::orderBy('id', 'desc')->get();
        $users = User::orderBy('id', 'desc')->where('role', 'Member')->get();
        return view('create-task')->with(['project' => $project, 'users' => $users]);
    }


    public function edit_task($id)
    {
        $task = Task::findOrFail($id);
        $users = User::orderBy('id', 'desc')->where('role', 'Member')->get();
        $project = Project::orderBy('id', 'desc')->get();
        return view('edit-task')->with(['task' => $task, 'project' => $project, 'users' => $users]);
    }

    public function my_tasks($id)
    {
        $task = Task::orderBy('id', 'desc')->where('status', 'Active')->where('user_id', $id)->paginate(5);
        $users = User::orderBy('id', 'desc')->get();
        $project = Project::orderBy('id', 'desc')->get();
        return view('my-tasks')->with(['task' => $task, 'project' => $project, 'users' => $users]);
    }


    public function completed_my_tasks($id)
    {
        $task = Task::orderBy('id', 'desc')->where('status', 'Completed')->where('user_id', $id)->paginate(5);
        $users = User::orderBy('id', 'desc')->get();
        $project = Project::orderBy('id', 'desc')->get();
        return view('completed-tasks-worker')->with(['task' => $task, 'project' => $project, 'users' => $users]);
    }


    public function update(Request $request, $id)
    {
        $t = Task::findOrFail($id);

        $t->name = $request->name;
        $t->status = $request->status;
        $t->startDate = $request->startDate;
        $t->endDate = $request->endDate;
        $t->user_id = $request->user_id;
        $t->project_id = $request->project_id;
        $t->bio = $request->bio;



        $t->save();
        return redirect("/admin/task/active-task");
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();
        return  back();
    }
}