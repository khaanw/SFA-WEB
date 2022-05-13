<!-- Modal -->
<div class="modal fade" id="modal-customer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" width="80px">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" background-color="blue    ">
          <h5 class="modal-title" id="exampleModalLabel">Pilih Customer</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
            <table class="table-customer table-stripped table-bordered table-customer">
                <thead>
                    {{-- <th width="2%">No</th> --}}
                    <th width="5%">Kode</th>
                    <th width="20%">Nama Customer</th>
                    <th width="50%">Alamat</th>
                    <th width="5%"><i class="fa fa-cog"></i></th>
                </thead>
                <tbody>
                    @foreach ($customer as $key=>$item )
                    <tr>
                        {{-- <td>{{ $item->key }}</td> --}}
                        <td>{{$item->kode}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>
                            <a class="btn btn-primary btn-xs btn-flat" onclick="pilihCustomer()">
                                <i class="fa fa-check-circle">Pilih</i></button>
                        </td>
                    </tr>
                    @endforeach
            </table>
      </div>
    </div>
  </div>
