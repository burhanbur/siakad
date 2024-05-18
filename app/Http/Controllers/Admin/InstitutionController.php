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

use App\Models\MasterInstitution;

class InstitutionController extends Controller
{
    public function index(Request $request)
    {
        $data = MasterInstitution::orderBy('id')->get();

        return view('admin.institution.index', get_defined_vars());
    }

    public function show($id)
    {
        $data = MasterInstitution::find($id);

        return view('admin.institution.show', get_defined_vars());
    }

    public function create(Request $request)
    {
        return view('admin.institution.create', get_defined_vars());
    }

    public function edit($id)
    {
        $data = MasterInstitution::find($id);

        return view('admin.institution.edit', get_defined_vars());
    }

    public function store(Request $request)
    {
        $data = $request->all();

        DB::beginTransaction();

        try {

            DB::commit();
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil menambahkan institusi baru']);
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
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil mengubah institusi']);
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
            $data = MasterInstitution::find($id);
            $data->delete();

            DB::commit();
            Session::flash('notification', ['level' => 'error', 'message' => 'Berhasil menghapus institusi']);
        } catch (Exception $ex) {
            DB::rollback();
            Session::flash('notification', ['level' => 'error', 'message' => $ex->getMessage()]);
        }

        return redirect()->back();
    }
}
