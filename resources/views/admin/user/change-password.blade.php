@section('content')
<form method="POST" action="{{ route('admin.user.password.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
	<div class="modal-body">
		<label>Nama Lengkap</label>
		<div class="form-group">
			<input type="text" class="form-control" value="{{ $data->name }}" disabled>
		</div>

		<label>Username</label>
		<div class="form-group">
			<input type="text" class="form-control" value="{{ $data->username }}" disabled>
		</div>

		<label>Email</label>
		<div class="form-group">
			<input type="text" class="form-control" value="{{ $data->email }}" disabled>
		</div>

		<label>Password <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="password" class="form-control" name="password" required>
		</div>

		<label>Konfirmasi Password <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="password" class="form-control" name="password_confirmation" required>
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