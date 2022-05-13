<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" width="80px">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" background-color="blue    ">
          <h5 class="modal-title" id="exampleModalLabel">Form Input Data Kategori</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body" width="800px">
            <table class="table table-stripped table-bordered">
                <thead>
                    <th width="5%">No</th>
                    <th width="20%">Nama Supplier</th>
                    <th width="50%">Alamat</th>
                    <th width="20%">>Telepon</th>
                    <th width="5%"><i class="fa fa-cog"></i></th>
                </thead>
                <tbody>
                    @foreach ($supplier as $key=>$item )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->telepon}}</td>
                        <td>
                            <a href="{{route('pembelian.create',$item->id)}}" class="btn btn-primary btn-xs btn-flat">
                                <i class="fa fa-check-circle">Pilih</i></button>
                        </td>
                    </tr>
                    @endforeach
            </table>
      </div>
    </div>
  </div>
