@extends('layouts.master')
@section('title','Master Customer')

@section('content')
@section('title','Transaksi Penjualan')
<section class = "content" > <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button onclick="addForm('#')" class="btn btn-success btn-xs btn-flat">
                        <i class="fa fa-plus-circle">Tambah</i>
                    </button>
                </div>
            </div>
            <div class="body table-responsive">
                <table class="table table-stiped table-bordered" id="table1">
                    <thead>
                        <th width="5%">No</th>
                        <th>Nomor Faktur</th>
                        <th>Tanggal Faktur</th>
                        <th>Customer</th>
                        <th>Customer PO</th>
                        <th>DPP</th>
                        <th>PPN</th>
                        <th>TOTAL</th>
                        <th width="5%">
                            <i class="fa fa-cog"></i>
                        </th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</div>
@includeIf('penjualan.penjualand')
@endsection @push('scripts')
<script>
    let table;

     $(function () {
         table = $('.table').DataTable({
             responsive: true,
             processing: true,
             serverSide: true,
             autoWidth: false,
             ajax: {
                 url: '{{ route('penjualan.data') }}',
             },
             columns: [
                 {data: 'DT_RowIndex', searchable: false, sortable: false},
                 {data: 'kode'},
                 {data: 'nama'},
                 {data: 'alamat'},
                 {data: 'telepon'},
                //  {data: 'nik'},
                 {data: 'pkp'},
                 {data: 'npwp'},
                 {data: 'channel'},
                //  {data: 'group'},
                 {data: 'top'},
                 {data: 'aksi', searchable: false, sortable: false},
             ]
         });

         $('#modal-form').validator().on('submit', function (e) {
             if (! e.preventDefault()) {
                 $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                     .done((response) => {
                         $('#modal-form').modal('hide');
                         table.ajax.reload();
                     })
                     .fail((errors) => {
                         alert('Tidak dapat menyimpan data');
                         return;
                     });
             }
         });
     });

     function addForm(url) {
         $('#modal-form').modal('show');
         $('#modal-form .modal-title').text('Form Master supplier');

         $('#modal-form form')[0].reset();
         $('#modal-form form').attr('action', url);
         $('#modal-form [name=_method]').val('post');
         $('#modal-form [name=nama]').focus();
     }

     function editForm(url) {
         $('#modal-form').modal('show');
         $('#modal-form .modal-title').text('Edit Data Supplier');

         $('#modal-form form')[0].reset();
         $('#modal-form form').attr('action', url);
         $('#modal-form [name=_method]').val('put');
         $('#modal-form [name=nama]').focus();

         $.get(url)
             .done((response) => {
                $('#modal-form [name=nama]').val(response.nama);
                $('#modal-form [name=alamat]').val(response.alamat);
                $('#modal-form [name=telepon]').val(response.telepon);
                $('#modal-form [name=nik]').val(response.nik);
                $('#modal-form [name=pkp]').val(response.pkp);
                $('#modal-form [name=npwp]').val(response.npwp);
                $('#modal-form [name=channel]').val(response.channel);
                $('#modal-form [name=group]').val(response.group);
             })
             .fail((errors) => {
                 alert('Tidak dapat menampilkan data');
                 return;
             });
     }

     function deleteData(url) {
         if (confirm('Yakin ingin menghapus data terpilih?')) {
             $.post(url, {
                     '_token': $('[name=csrf-token]').attr('content'),
                     '_method': 'delete'
                 })
                 .done((response) => {
                     table.ajax.reload();
                 })
                 .fail((errors) => {
                     alert('Tidak dapat menghapus data');
                     return;
                 });
         }
     }
 </script>
@endpush
