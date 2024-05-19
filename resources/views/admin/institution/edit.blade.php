@section('content')
<form method="POST" action="{{ route('admin.institution.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
	<div class="modal-body">
		<label>Kode <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="code" required value="{{ $data->code }}">
		</div>

		<label>Institusi <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="name" required value="{{ $data->name }}">
		</div>

		<label>Nama Singkat <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="short_name" required value="{{ $data->short_name }}">
		</div>

		<label>Program Pendidikan</label>
		<div class="form-group">
			<select name="education_program_id" class="form-control">
				<option value="">Pilih Program Pendidikan</option>
				@foreach($dropdownEducationProgram as $key => $value)
				<option @if ($data->education_program_id == $value->id) selected @endif value="{{ $value->id }}">{{ $value->name }}</option>
				@endforeach
			</select>
		</div>

		<label>Institusi Induk</label>
		<div class="form-group">
			<select name="parent_id" class="form-control">
				<option value="">Pilih Institusi Induk </option>
				@foreach($dropdownInstitution as $key => $value)
				<option @if ($data->parent_id == $value->id) selected @endif value="{{ $value->id }}">{{ $value->name }}</option>
				@endforeach
			</select>
		</div>

		<label>Tipe Institusi <b class="text-danger">*</b></label>
		<div class="form-group">
			<select name="institution_type_id" class="form-control" required>
				<option value="">Pilih Tipe Institusi </option>
				@foreach($dropdownType as $key => $value)
				<option @if ($data->institution_type_id == $value->id) selected @endif value="{{ $value->id }}">{{ $value->name }}</option>
				@endforeach
			</select>
		</div>

		<label>Pimpinan</label>
		<div class="form-group">
			<select name="head_id" class="form-control">
				<option value="">Pilih Pimpinan Institusi </option>
				@foreach($dropdownUser as $key => $value)
				<option @if ($data->head_id == $value->id) selected @endif value="{{ $value->id }}">{{ $value->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label>Akreditasi</label>
				<div class="form-group">
					<input type="text" class="form-control" name="accreditation" value="{{ $data->accreditation }}">
				</div>
			</div>

			<div class="col-md-6">
				<label>Status Aktif</label>
				<div class="form-group">
					<select name="is_active" class="form-control">
						<option value="">Pilih Status</option>
						<option @if ($data->is_active) selected @endif value="1">Aktif</option>
						<option @if (!$data->is_active) selected @endif value="0">Tidak Aktif</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<div class="modal-footer">
		<div class="form-group">
			<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
			<button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-undo"></i> Tutup</button>
		</div>
	</div>
</form>

<script>
    $('.select2-format').select2();

    $('.number-format').keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });
</script>
@endsection