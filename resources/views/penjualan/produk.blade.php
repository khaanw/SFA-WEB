<div class="modal fade" id="modal-produk" tabindex="-1" role="dialog" aria-labelledby="modal-produk">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pilih Produk</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-produk">
                    <thead>
                        <th width="5%">No</th>
                        <th width="10%">Kode</th>
                        <th width="35%">Nama</th>
                        <th width="15%">Harga Jual</th>
                        <th><i class="fa fa-cog"></i></th>
                    </thead>
                    <tbody>
                        @foreach ($barang as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><span class="label label-success">{{ $item->kode }}</span></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->hargaJual }}</td>
                                <td>
                                     <a href="#" class="btn btn-info btn-xs btn-flat" onclick="pilihProduk('{{ $item->id}}','{{$item->kode}}','{{ $item->nama }}','{{ $item->hargaJual }}')">
                                            <i class="fa fa-check-circle">Pilih</i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
