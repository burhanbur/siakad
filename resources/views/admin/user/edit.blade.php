@section('content')
<form method="POST" action="{{ route('admin.user.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
	<div class="modal-body">
		<label>Nama Lengkap <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="name" required value="{{ $data->name }}">
		</div>

		<label>Username <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="username" required value="{{ $data->username }}">
		</div>

		<label>Email <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="email" class="form-control" name="email" required value="{{ $data->email }}">
		</div>

		<label>Institusi <b class="text-danger">*</b></label>
		<div class="form-group">
			<select name="institution_id" class="form-control" required>
				<option value="">Pilih Institusi</option>
				@foreach($dropdownInstitution as $key => $value)
				<option @if ($value->id == $selectedRole->institution_id) selected @endif value="{{ $value->id }}">{{ $value->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label>Peran <b class="text-danger">*</b></label>
				<div class="form-group">
					<select name="role_id" class="form-control" required>
						<option value="">Pilih Peran</option>
						@foreach($dropdownRole as $key => $value)
						<option @if ($value->id == $selectedRole->role_id) selected @endif value="{{ $value->id }}">{{ $value->name }}</option>
						@endforeach
					</select>
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