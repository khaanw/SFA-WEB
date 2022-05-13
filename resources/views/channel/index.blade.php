@extends('layouts.master')
@section('title','Master Channel')

@section('content') < section class = "content" > <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button onclick="addForm('{{ route('channel.store') }}')" class="btn btn-success btn-xs btn-flat">
                        <i class="fa fa-plus-circle">Tambah</i>
                    </button>
                </div>
            </div>
            <div class="body table-responsive">
                <table class="table table-stiped table-bordered" id="table1">
                    <thead>
                        <th width="5%">No</th>
                        <th>id</th>
                        <th>Nama</th>
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
@includeIf('channel.form')
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
                 url: '{{ route('channel.data') }}',
             },
             columns: [
                 {data: 'DT_RowIndex', searchable: false, sortable: false},
                 {data: 'id'},
                 {data: 'nama'},
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
         $('#modal-form .modal-title').text('Form Master channel');

         $('#modal-form form')[0].reset();
         $('#modal-form form').attr('action', url);
         $('#modal-form [name=_method]').val('post');
         $('#modal-form [name=namaChannel]').focus();
     }

     function editForm(url) {
         $('#modal-form').modal('show');
         $('#modal-form .modal-title').text('Edit Tabel Channel');

         $('#modal-form form')[0].reset();
         $('#modal-form form').attr('action', url);
         $('#modal-form [name=_method]').val('put');
         $('#modal-form [name=namaChannel]').focus();

         $.get(url)
             .done((response) => {
                $('#modal-form [name=namaChannel]').val(response.namaChannel);
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
