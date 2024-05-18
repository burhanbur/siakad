@section('content')
<form method="POST" action="{{ route('admin.ref.exit-status.store') }}" enctype="multipart/form-data">
@csrf
	<div class="modal-body">
		<label>Status Keluar <b class="text-danger">*</b></label>
		<div class="form-group">
			<input type="text" class="form-control" name="name" required value="{{ old('name') }}">
		</div>

		<!-- <label>Status Aktif</label>
		<div class="form-group">
			<select name="is_active" class="form-control">
				<option value="">Pilih Status</option>
				<option value="1">Aktif</option>
				<option value="0">Tidak Aktif</option>
			</select>
		</div> -->
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