@extends('layouts.master')

@section('title','Master Barang')

@section('content')
<section class="content">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button onclick="addForm('{{ route('barang.store') }}')" class="btn btn-success btn-xs btn-flat">
                        <i class="fa fa-plus-circle">Tambah</i>
                    </button>
                </div>
            </div>
            <div class="body table-responsive">
                <table class="table table-stiped table-bordered" id="table1">
                    <thead>
                        <th width="4%">No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Packaging</th>
                        <th>Barcode</th>
                        <th>Kd Pabrik</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
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
@includeIf('barang.form')
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
                 url: '{{ route('barang.data') }}',
             },
             columns: [
                 {data: 'DT_RowIndex', searchable: false, sortable: false},
                 {data: 'kode'},
                 {data: 'nama'},
                 {data: 'packaging'},
                 {data: 'barcode'},
                 {data: 'kodePabrik'},
                 {data: 'hargaBeli'},
                 {data: 'hargaJual'},
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
         $('#modal-form .modal-title').text('Form Master Barang');

         $('#modal-form form')[0].reset();
         $('#modal-form form').attr('action', url);
         $('#modal-form [name=_method]').val('post');
         $('#modal-form [name=nama]').focus();
     }

     function editForm(url) {
         $('#modal-form').modal('show');
         $('#modal-form .modal-title').text('Edit Master Barang');

         $('#modal-form form')[0].reset();
         $('#modal-form form').attr('action', url);
         $('#modal-form [name=_method]').val('put');
         $('#modal-form [name=nama]').focus();

         $.get(url)
             .done((response) => {
                $('#modal-form [name=nama]').val(response.nama);
                $('#modal-form [name=packaging]').val(response.packaging);
                $('#modal-form [name=barcode]').val(response.barcode);
                $('#modal-form [name=kodePabrik]').val(response.kodePabrik);
                $('#modal-form [name=group]').val(response.group);
                $('#modal-form [name=supplier]').val(response.supplier);
                $('#modal-form [name=uom1]').val(response.uom1);
                $('#modal-form [name=uom2]').val(response.uom2);
                $('#modal-form [name=uom3]').val(response.uom3);
                $('#modal-form [name=conv1]').val(response.konv1);
                $('#modal-form [name=conv2]').val(response.konv2);
                $('#modal-form [name=conv3]').val(response.konv3);
                $('#modal-form [name=hargaBeli]').val(response.hargaBeli);
                $('#modal-form [name=hargaJual]').val(response.hargaJual);

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
