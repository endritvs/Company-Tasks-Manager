<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->where('role', 'Admin')->get();

        return view('create-project')->with('users', $users);
    }
    public function teams()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);

        return view('/teams')->with('users', $users);
    }

    public function create_view()
    {
        return view('create-user');
    }


    public function create(Request $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
        return  redirect()->route('users.index');
    }
    public function store(Request $request)
    {
        return redirect()->route('users.index');
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user-edit')->with(['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->file('profile_photo') != null) {
            $path = $request->file('profile_photo')->store('profile_photo');
            if ($user->profile_photo_path != 'profile_photo/No_Image.png' && !is_null($user->profile_photo_path)) {
                Storage::delete($user->profile_photo_path);
            }
            $user->profile_photo_path = $path;
        }

        $user->save();

        return redirect('admin/users')->with("statusE", "User updated successfully!");;
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->profile_photo_path != 'profile_photo/No_Image.png' && !is_null($user->profile_photo_path)) {
            Storage::delete($user->profile_photo_path);
        }
        $user->delete();
        return  back();
    }

    public function settings_edit($id)
    {
        $user = User::findOrFail($id);

        return view('settings')->with(['user' => $user]);
    }

    public function settings_update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->location = $request->location;
        $user->address = $request->address;
        $user->zipcode = $request->zipcode;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->bio = $request->bio;


        if ($request->file('profile_photo') != null) {
            $path = $request->file('profile_photo')->store('profile_photo');
            if ($user->profile_photo_path != 'profile_photo/No_Image.png' && !is_null($user->profile_photo_path)) {
                Storage::delete($user->profile_photo_path);
            }
            $user->profile_photo_path = $path;
        }

        $user->save();


        return back()->with("statusU", "User updated successfully!");
    }

    public function settings_email(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->email = $request->email;
        $user->save();


        return back()->with("statusE", "Email changed successfully!");
    }

    public function settings_password(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }

    public function delete_account($id)
    {
        $user = User::findOrFail($id);
        if ($user->profile_photo_path != 'profile_photo/No_Image.png' && !is_null($user->profile_photo_path)) {
            Storage::delete($user->profile_photo_path);
        }
        $user->delete();
        return redirect("login");
    }

    public function profile_edit($id)
    {
        $user = User::findOrFail($id);
        $project = Project::orderBy('id', 'desc')->where('user_id', $id)->paginate(5);
        return view('profile')->with(['user' => $user, 'project' => $project]);
    }
}