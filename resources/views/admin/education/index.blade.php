@extends('layouts.admin')

@section('plugin_css')
<link href="{{ asset('assets/back/vendors/custom/datatables/datatables.bundle.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/back/vendors/general/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/back/vendors/general/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/back/vendors/general/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('custom_css')

@endsection

@section('plugin_js')
<script src="{{ asset('assets/back/vendors/custom/datatables/datatables.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/back/vendors/general/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.js"></script>
<script src="{{ asset('assets/back/vendors/general/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
@endsection

@section('custom_js')
<script type="text/javascript">
    $('#clear_date').click(function(){
        $('#date').val('');
    });

    let dt_table = $('#myDataTables').DataTable({
        destroy : true,
        processing: true,
        serverSide: false,
        autoWidth: false,
        responsive: true,
        fixedHeader: true,
        // searching: false,
        language: {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada yang ditemukan - maaf",
            "info": "Menampilkan _START_ - _END_ dari _TOTAL_ halaman",

            "search": "Cari:",
            "infoEmpty": "Tidak ada data yang tersedia",
            "infoFiltered": "(difilter dari total _MAX_ data)"
        },
        // dom: `<'row'<'col-sm-12'tr>> <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            drawCallback: function( settings ) {
        }
    });

    let dt_table2 = $('#table-show').DataTable({
        destroy : true,
        processing: true,
        serverSide: false,
        autoWidth: false,
        responsive: true,
        fixedHeader: true,
        // searching: false,
        language: {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada yang ditemukan - maaf",
            "info": "Menampilkan _START_ - _END_ dari _TOTAL_ halaman",

            "search": "Cari:",
            "infoEmpty": "Tidak ada data yang tersedia",
            "infoFiltered": "(difilter dari total _MAX_ data)"
        },
        dom: `<'row'<'col-sm-12'tr>> <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            drawCallback: function( settings ) {
        }
    });

    $('.select2-format').select2();

    setInterval(function(){
        $('.modalShow').off('click').on('click', function () {
          $('#modalShow').modal({backdrop: 'static', keyboard: false}) 
          
            $('#modalShowContent').load($(this).attr('value'));
            $('#modalShowTitle').html($(this).attr('title'));
        });
    }, 500);
</script>
@endsection

@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Program Pendidikan</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <i class="fas fa-university"></i> Program Pendidikan
                        </h3>
                    </div>

                    <div style="text-align: right; padding-top: 0.5%;">
                        <a href="javascript:void(0)" value="{{ route('admin.education.create') }}" class="btn btn-success modalShow" title="Tambah Data" data-toggle="modal" data-target="#modalShow"><i class="fa fa-plus-circle"></i> Tambah Program Pendidikan</a>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered" id="myDataTables">
                            <thead>
                                <tr>
                                    <th class="text-center" width="50px">No</th>
                                    <th class="text-center">Kode</th>
                                    <th class="text-center">Program</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center" width="120px">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $i => $item)
                                <tr>
                                    <td class="text-center align-middle">{{ $i+1 }}</td>
                                    <td class="align-middle text-center">
                                        {{ $item->code }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $item->name }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ isActive($item->is_active) }}
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="javascript:void(0)" value="{{ route('admin.education.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-icon btn-info modalShow" data-toggle="modal" title="Ubah Data" data-target="#modalShow"><i class="fa fa-edit"></i></a>
                                        <form style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')" action="{{ route('admin.education.delete', ['id' => $item->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-icon btn-danger"><i class="fa fa-trash"></i></button>                                            
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="modalShowTitle"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
              <div class="modalError"></div>
              <div id="modalShowContent"></div>
          </div>
      </div>
  </div>
</div>
@endsection