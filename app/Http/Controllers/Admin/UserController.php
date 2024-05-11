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
        return view('admin.user.create', get_defined_vars());
    }

    public function edit($id)
    {
        $data = User::find($id);

        return view('admin.user.edit', get_defined_vars());
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::beginTransaction();

        try {

            DB::commit();
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil menambahkan pengguna baru']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        DB::beginTransaction();

        try {

            DB::commit();
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil menambahkan pengguna baru']);
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
            $data = User::find($id);
            $data->delete();

            DB::commit();
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil menghapus pengguna']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }
}
