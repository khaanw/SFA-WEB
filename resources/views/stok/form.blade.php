<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" width="80px">
    <div class="modal-dialog modal-lg">
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
                        <td>Nama Barang</td>
                        <td>:</td>
                        <td>
                        <div class="input-group">
                            <input type="text"  placeholder="Nama Barang" id="nama" name="nama" class="form-control" >
                        </div></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Packaging</td>
                        <td>:</td>
                        <td><input type="text" id="packaging" class="form-control" name="packaging"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Barcode</td>
                        <td>:</td>
                        <td><input type="text" id="barcode" class="form-control" name="barcode"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Kode Pabrik</td>
                        <td>:</td>
                        <td><input type="text" id="kodepabrik" class="form-control" name="kodepabrik"></td>
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
                        <td>Group Barang</td>
                        <td>:</td>
                        <td><select class="custom-select custom-select-sm" name="group">
                            <option selected>--Pilih Satu--</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">konghucu</option>
                            <option value="lainnya">lainnya</option>
                          </select></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Vendor</td>
                        <td>:</td>
                        <td><select class="custom-select custom-select-sm" name="supplier">
                            <option selected>--Pilih Satu--</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">konghucu</option>
                            <option value="lainnya">lainnya</option>
                          </select></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>UOM</td>
                        <td>:</td>
                        <td>
                        <div class="input-group">
                             <input type="text"  placeholder="uom1" id="uom1" name="uom1" class="form-control">
                            <input type="text"  placeholder="uom2" id="uom2" name="uom2" class="form-control">
                            <input type="text"  placeholder="uom3" id="uom3" name="uom3" class="form-control">
                        </div></td>
                    </tr>
                    <tr>
                        <td>Konversi</td>
                        <td>:</td>
                        <td>
                        <div class="input-group"><input type="text"  placeholder="conv1" id="conv1" name="conv1" class="form-control">
                            <input type="text"  placeholder="conv2" id="conv2" name="conv2" class="form-control">
                            <input type="text"  placeholder="conv3" id="conv3" name="conv3" class="form-control">
                        </div>
                         </td>
                    </tr>
                    <tr>
                        <td>Harga Jual</td>
                        <td>:</td>
                        <td><input type="text" id="hargaJual" class="form-control" name="hargaJual"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Harga Jual</td>
                        <td>:</td>
                        <td><input type="text" id="hargaBeli" class="form-control" name="hargaBeli"></td>
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
