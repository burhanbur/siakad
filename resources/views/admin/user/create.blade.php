@section('content')
<form method="POST" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
@csrf
	<div class="modal-body">
		<label>Nama Lengkap <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="name" required value="{{ old('name') }}">
		</div>

		<label>Username <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="username" required value="{{ old('username') }}">
		</div>

		<label>Email <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="email" class="form-control" name="email" required value="{{ old('email') }}">
		</div>

		<label>Institusi <b class="text-danger">*</b></label>
		<div class="form-group">
			<select name="institution_id" class="form-control" required>
				<option value="">Pilih Institusi</option>
				@foreach($dropdownInstitution as $key => $value)
				<option value="{{ $value->id }}">{{ $value->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label>Password <b class="text-danger">*</b></label>
				<div class="form-group">
					<input type="password" class="form-control" name="password" required>
				</div>
			</div>

			<div class="col-md-6">
				<label>Konfirmasi Password <b class="text-danger">*</b></label>
				<div class="form-group">
					<input type="password" class="form-control" name="password_confirmation" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label>Peran <b class="text-danger">*</b></label>
				<div class="form-group">
					<select name="role_id" class="form-control" required>
						<option value="">Pilih Peran</option>
						@foreach($dropdownRole as $key => $value)
						<option value="{{ $value->id }}">{{ $value->name }}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="col-md-6">
				<label>Status Aktif</label>
				<div class="form-group">
					<select name="is_active" class="form-control">
						<option value="">Pilih Status</option>
						<option value="1">Aktif</option>
						<option value="0">Tidak Aktif</option>
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