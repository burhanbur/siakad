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
use App\Models\MasterEducationProgram;
use App\Models\RefInstitutionType;
use App\Models\User;

class InstitutionController extends Controller
{
    public function index(Request $request)
    {
        $data = MasterInstitution::orderBy('institution_type_id')->orderBy('code')->get();

        return view('admin.institution.index', get_defined_vars());
    }

    public function create(Request $request)
    {
        $dropdownEducationProgram = MasterEducationProgram::orderBy('id')->get();
        $dropdownInstitution = MasterInstitution::orderBy('institution_type_id')->orderBy('name')->get();
        $dropdownType = RefInstitutionType::orderBy('id')->get();
        $dropdownUser = User::where('is_active', true)->orderBy('id')->get();

        return view('admin.institution.create', get_defined_vars())->renderSections()['content'];
    }

    public function edit($id)
    {
        $data = MasterInstitution::find($id);
        $dropdownEducationProgram = MasterEducationProgram::orderBy('id')->get();
        $dropdownInstitution = MasterInstitution::orderBy('institution_type_id')->orderBy('name')->get();
        $dropdownType = RefInstitutionType::orderBy('id')->get();
        $dropdownUser = User::where('is_active', true)->orderBy('id')->get();

        return view('admin.institution.edit', get_defined_vars())->renderSections()['content'];
    }

    public function store(Request $request)
    {
        $rules = [
            'code' => 'required|string',
            'name' => 'required|string',
            'short_name' => 'required|string',
            'institution_type_id' => 'required|integer',
        ];

        $ruleMessages = [];

        $validate = Validator::make($request->all(), $rules, $ruleMessages);

        if ($validate->fails()) {
            \Session::flash('notification', ['level' => 'error', 'message' => $validate->errors()->first()]);

            return redirect()->back();
        }

        DB::beginTransaction();

        try {
            $data = new MasterInstitution;
            $data->code = $request->code;
            $data->name = $request->name;
            $data->short_name = $request->short_name;
            $data->education_program_id = $request->education_program_id;
            $data->parent_id = $request->parent_id;
            $data->institution_type_id = $request->institution_type_id;
            $data->head_id = $request->head_id;
            $data->accreditation = $request->accreditation;
            $data->is_active = $request->is_active;
            $data->save();

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
        $rules = [
            'code' => 'required|string',
            'name' => 'required|string',
            'short_name' => 'required|string',
            'institution_type_id' => 'required|integer',
        ];

        $ruleMessages = [];

        $validate = Validator::make($request->all(), $rules, $ruleMessages);

        if ($validate->fails()) {
            \Session::flash('notification', ['level' => 'error', 'message' => $validate->errors()->first()]);

            return redirect()->back();
        }
        
        DB::beginTransaction();

        try {
            $data = MasterInstitution::find($id);
            $data->code = $request->code;
            $data->name = $request->name;
            $data->short_name = $request->short_name;
            $data->education_program_id = $request->education_program_id;
            $data->parent_id = $request->parent_id;
            $data->institution_type_id = $request->institution_type_id;
            $data->head_id = $request->head_id;
            $data->accreditation = $request->accreditation;
            $data->is_active = $request->is_active;
            $data->save();

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
