<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Role;
use App\Models\RoleMember;
use App\Models\MasterStudent;
use App\Models\MasterLecture;
use App\Models\MasterInstitution;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = User::orderBy('id')->get();

        return view('admin.user.index', get_defined_vars());
    }

    public function show($id)
    {
        $data = User::find($id);

        return view('admin.user.show', get_defined_vars());
    }

    public function create(Request $request)
    {
        $dropdownRole = DB::select('SELECT * FROM roles ORDER BY name ASC');
        $dropdownInstitution = MasterInstitution::orderBy('institution_type_id')->orderBy('code')->get();

        return view('admin.user.create', get_defined_vars())->renderSections()['content'];
    }

    public function edit($id)
    {
        $data = User::find($id);
        $selectedRole = @DB::select('SELECT * FROM model_has_roles WHERE model_id = ?', [$data->id])[0];
        $dropdownRole = DB::select('SELECT * FROM roles ORDER BY name ASC');
        $dropdownInstitution = MasterInstitution::orderBy('institution_type_id')->orderBy('code')->get();

        return view('admin.user.edit', get_defined_vars())->renderSections()['content'];
    }

    public function store(Request $request)
    {
        $rules = [
            'username' => 'required|string|unique:users',
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|confirmed',
        ];

        $ruleMessages = [];

        $validate = Validator::make($request->all(), $rules, $ruleMessages);

        if ($validate->fails()) {
            \Session::flash('notification', ['level' => 'error', 'message' => $validate->errors()->first()]);

            return redirect()->back();
        }

        DB::beginTransaction();

        try {
            $user = new User;
            $user->uuid = Str::uuid();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->is_active = $request->is_active;
            $user->save();

            $role = new RoleMember;
            $role->role_id = $request->role_id;
            $role->model_id = $user->id;
            $role->model_type = 'App\Models\User';
            $role->institution_id = $request->institution_id;
            $role->save();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil menambahkan pengguna baru']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string',
        ];

        $ruleMessages = [];

        $validate = Validator::make($request->all(), $rules, $ruleMessages);

        if ($validate->fails()) {
            \Session::flash('notification', ['level' => 'error', 'message' => $validate->errors()->first()]);

            return redirect()->back();
        }

        DB::beginTransaction();

        try {
            $user = User::find($id);
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->is_active = $request->is_active;
            $user->save();

            $role = RoleMember::where(['model_id' => $user->id])->first();
            $role->role_id = $request->role_id;
            $role->model_id = $user->id;
            $role->model_type = 'App\Models\User';
            $role->institution_id = $request->institution_id;
            $role->save();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil mengubah pengguna']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        DB::beginTransaction();

        try {
            $role = RoleMember::where('model_id', $id)->delete();
            $data = User::find($id)->delete();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil menghapus pengguna']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }

    public function changePassword($id)
    {
        $data = User::find($id);

        return view('admin.user.change-password', get_defined_vars())->renderSections()['content'];
    }

    public function updatePassword(Request $request, $id)
    {
        $rules = [
            'password' => 'required|string|confirmed',
        ];

        $ruleMessages = [];

        $validate = Validator::make($request->all(), $rules, $ruleMessages);

        if ($validate->fails()) {
            \Session::flash('notification', ['level' => 'error', 'message' => $validate->errors()->first()]);

            return redirect()->back();
        }

        DB::beginTransaction();

        try {
            $user = User::find($id);
            $user->password = Hash::make($request->password);
            $user->save();
            
            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil mengubah pengguna']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }
}
