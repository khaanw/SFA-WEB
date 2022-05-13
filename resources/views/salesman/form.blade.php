<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" width="80px">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" background-color="blue">
          <h5 class="modal-title" id="exampleModalLabel">Form Input Data Salesman</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <form action="" method="POST" class="form-horizontal">
        <div class="modal-body" width="800px">
            <div width="800px">
                @csrf

                <table>
                    <tr>
                        <td>Nama Saleman</td>
                        <td>:</td>
                        <td>
                            <input type="text"  placeholder="Nama Salesman" id="nama" name="nama" class="form-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" rows="2" cols="30" class="alamat" class="form-control"> </textarea></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td><input type="text" id="telepon" class="form-control" name="telepon"></td>
                        <td>&nbsp;</td>
                    </tr>
                    {{-- <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jenkel" value="L" id="laki" class="">Laki-laki
                            <input type="radio" name="jenkel" value="P" id="perempuan" class="">perempuan</td>
                        <td></td>
                        <td>&nbsp;</td>
                    </tr> --}}
                </table>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
