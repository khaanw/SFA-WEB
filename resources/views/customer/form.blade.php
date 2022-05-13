<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" width="80px">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" background-color="blue    ">
          <h5 class="modal-title" id="exampleModalLabel">Form Input Data Kategori</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <form action="" method="POST" class="form-horizontal">
        <div class="modal-body" width="800px">
            <div width="800px">
                @csrf

                <table>
                    <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td>
                            <input type="text"  placeholder="Nama Customer" id="nama" name="nama" class="form-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" id="alamat" rows="2" cols="30" class="form-control"></textarea></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td><input type="text" id="telepon" class="form-control" name="telepon"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="text" id="nik" class="form-control" name="nik"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>PKP</td>
                        <td>:</td>
                        <td><select class="custom-select custom-select-sm" name="pkp">
                            <option selected>--Pilih Satu--</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                          </select></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td>:</td>
                        <td><input type="text" id="npwp" class="form-control" name="npwp"></td>
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
                    <tr>
                        <td>Channel</td>
                        <td>:</td>
                        <td><select class="custom-select custom-select-sm" name="channel">
                            <option selected>--Pilih Satu--</option>
                            <option value="GT">GT</option>
                            <option value="MT">MT</option>
                          </select></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Group</td>
                        <td>:</td>
                        <td><input type="text" id="group" class="form-control" name="group"></td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>TOP</td>
                        <td>:</td>
                        <td><input type="text" id="top" class="form-control" name="top"></td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
