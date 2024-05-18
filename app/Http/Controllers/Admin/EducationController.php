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
        return view('admin.education.create', get_defined_vars())->renderSections()['content'];
    }

    public function edit($id)
    {
        $data = MasterEducationProgram::find($id);

        return view('admin.education.edit', get_defined_vars())->renderSections()['content'];;
    }

    public function store(Request $request)
    {
        $rules = [
            'code' => 'required|string',
            'name' => 'required|string',
        ];

        $ruleMessages = [];

        $validate = Validator::make($request->all(), $rules, $ruleMessages);

        if ($validate->fails()) {
            \Session::flash('notification', ['level' => 'error', 'message' => $validate->errors()->first()]);

            return redirect()->back();
        }

        DB::beginTransaction();

        try {
            $data = new MasterEducationProgram;
            $data->code = $request->code;
            $data->name = $request->name;
            $data->is_active = $request->is_active;
            $data->save();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil menambahkan jenjang pendidikan baru']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {   
        $rules = [
            'code' => 'required|string',
            'name' => 'required|string',
        ];

        $ruleMessages = [];

        $validate = Validator::make($request->all(), $rules, $ruleMessages);

        if ($validate->fails()) {
            \Session::flash('notification', ['level' => 'error', 'message' => $validate->errors()->first()]);

            return redirect()->back();
        }

        DB::beginTransaction();

        try {

            $data = MasterEducationProgram::find($id);
            $data->code = $request->code;
            $data->name = $request->name;
            $data->is_active = $request->is_active;
            $data->save();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil mengubah jenjang pendidikan']);
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
            $data = MasterEducationProgram::find($id);
            $data->delete();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil menghapus jenjang pendidikan']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }
}
