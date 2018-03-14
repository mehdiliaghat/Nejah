<?php

namespace App\Http\Controllers\operator;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexManager()
    {
        $data['users'] = DB::table('users')->where('type', 'Manager')->get();

        return view('operator.indexManager', $data);
    }

    public function indexStudent()
    {
        $data['users'] = DB::table('users')->where('type', 'Student')->get();

        return view('operator.indexStudent', $data);
    }

    public function indexProf()
    {
        $data['users'] = DB::table('users')->where('type', 'Prof')->get();

        return view('operator.indexProf', $data);
    }

    public function indexEmployee()
    {
        $data['users'] = DB::table('users')->where('type', 'Employee')->get();

        return view('operator.indexEmployee', $data);
    }

    public function indexOperator()
    {
        $data['users'] = DB::table('users')->where('type', 'Operator')->get();

        return view('operator.indexOperator', $data);
    }

    public function create()
    {
        return view('operator.create');
    }


    public function store(UserRequest $request)
    {
        //User::create($request->all());
        $user = new user();
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $client_name = $request->national_id . '.' . $photo->getClientOriginalExtension();
            $dir_upload = public_path() . '/upload_files/users/';
            $photo->move($dir_upload, $client_name);
            $user->photo = $client_name;
        }
        $user->type = $request->type;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->post_id = $request->post_id;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->edu = $request->edu;
        $user->phone = $request->password;
        $user->date_birth = $request->date_birth;
        $user->address = $request->address;
        $user->national_id = $request->national_id;
        $user->save();
        return redirect(route('users.create'))->with('successMsg', 'user successfully added');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('operator.edituser', compact('user'));

    }


    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        if($request->hasfile('photo')){
            $dir_upload = public_path() . '/upload_files/users/';
            if(!empty($user->photo)){
                \File::delete($dir_upload .$user->photo);
            }
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $client_name = $request->national_id . '.' . $photo->getClientOriginalExtension();
                $dir_upload = public_path() . '/upload_files/users/';
                $photo->move($dir_upload, $client_name);
                $user->photo = $client_name;
            }

        }
        $user->type = $request->type;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->post_id = $request->post_id;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->edu = $request->edu;
        $user->phone = $request->password;
        $user->date_birth = $request->date_birth;
        $user->address = $request->address;
        $user->national_id = $request->national_id;
        $user->save();
        if ($user->type == 'Student') {
            return redirect(route('users.indexstudent'));
        } else if ($user->type == 'Prof') {
            return redirect(route('users.indexprof'));
        } else if ($user->type == 'Manager') {
            return redirect(route('users.indexmanager'));
        } else if ($user->type == 'Operator') {
            return redirect(route('users.indexoperator'));
        } else {
            return redirect(route('users.indexemployee'));
        }


    }


    public function deleteManager($id)
    {

        $user = User::where('id', $id)->first();
        if ($user) {
            $user->delete();
            return redirect()->route('users.indexmanager');
        }
        return redirect()->route('users.indexmanager');
    }

    public function deleteStudent($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            $user->delete();
            return redirect()->route('users.indexstudent');
        }
        return redirect()->route('users.indexstudent');

    }

    public function deleteProf($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            $user->delete();
            return redirect()->route('users.indexprof');
        }
        return redirect()->route('users.indexprof');
    }

    public function deleteEmployee($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            $user->delete();
            return redirect()->route('users.indexemployee');
        }
        return redirect()->route('users.indexemployee');
    }

    public function deleteOperator($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            $user->delete();
            return redirect()->route('users.indexoperator');
        }
        return redirect()->route('users.indexoperator');

    }


}
