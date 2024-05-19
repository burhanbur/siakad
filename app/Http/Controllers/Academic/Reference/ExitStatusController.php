<?php

namespace App\Http\Controllers\Academic\Reference;

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

use App\Models\RefExitStatus;

class ExitStatusController extends Controller
{

    public function index(Request $request)
    {
        $data = RefExitStatus::orderBy('id')->get();

        return view('academic.ref.exit-status.index', get_defined_vars());
    }

    public function create(Request $request)
    {
        return view('academic.ref.exit-status.create', get_defined_vars())->renderSections()['content'];
    }

    public function edit($id)
    {
        $data = RefExitStatus::find($id);

        return view('academic.ref.exit-status.edit', get_defined_vars())->renderSections()['content'];
    }

    public function store(Request $request)
    {
        $rules = [
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
            $data = new RefExitStatus;
            $data->name = $request->name;
            $data->is_active = $request->is_active ?? 1;
            $data->save();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil menambahkan status keluar mahasiswa baru']);
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
        ];

        $ruleMessages = [];

        $validate = Validator::make($request->all(), $rules, $ruleMessages);

        if ($validate->fails()) {
            \Session::flash('notification', ['level' => 'error', 'message' => $validate->errors()->first()]);

            return redirect()->back();
        }

        DB::beginTransaction();

        try {
            $data = RefExitStatus::find($id);
            $data->is_active = $request->is_active ?? 1;
            $data->name = $request->name;
            $data->save();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil mengubah status keluar mahasiswa']);
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
            $data = RefExitStatus::find($id);
            $data->delete();

            DB::commit();
            Session::flash('notification', ['level' => 'success', 'message' => 'Berhasil menghapus status keluar mahasiswa']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }
}
