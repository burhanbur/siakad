@section('content')
<form method="POST" action="{{ route('admin.ref.event.store') }}" enctype="multipart/form-data">
@csrf
	<div class="modal-body">
		<label>Kode <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="code" required value="{{ old('code') }}">
		</div>

		<label>Kegiatan Akademik <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="name" required value="{{ old('name') }}">
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