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

use App\Models\MasterEducationProgram;

class EducationController extends Controller
{
    public function index(Request $request)
    {
        $data = MasterEducationProgram::orderBy('id')->get();

        return view('admin.education.index', get_defined_vars());
    }

    public function show($id)
    {
        $data = MasterEducationProgram::find($id);

        return view('admin.education.show', get_defined_vars());
    }

    public function create(Request $request)
    {
        return view('admin.education.create', get_defined_vars());
    }

    public function edit($id)
    {
        $data = MasterEducationProgram::find($id);

        return view('admin.education.edit', get_defined_vars());
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::beginTransaction();

        try {

            DB::commit();
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil menambahkan jenjang pendidikan baru']);
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
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil mengubah jenjang pendidikan']);
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
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil menghapus jenjang pendidikan']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }
}
