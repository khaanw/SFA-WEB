@extends('layouts.master')

@section('title')
    Transaksi Penjualan
@endsection

@push('css')
    <style>
        .tampil-bayar {
            font-size: 5em;
            text-align: center;
            height: 100px;
        }

        .tampil-terbilang {
            padding: 10px;
            background: #f0f0f0;
        }

        .table-penjualan tbody tr:last-child {
            display: none;
        }

        @media(max-width: 768px) {
            .tampil-bayar {
                font-size: 3em;
                height: 70px;
                padding-top: 5px;
            }
        }

    </style>
@endpush

@section('breadcrumb')
    @parent
    <li class="active">Transaksi Penjaualn</li>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="p-1 mb-2 bg-primary">
            <H3> Transaction Header</H3>
        </div>

        <div class="col-sm-10">

            <div class="form-group row"> <label for="nomorOrder" class="col-sm-2 col-form-label">
                    NomorOrder</label>
                <div class="col-sm-10"> <input type="text" class="form-control col-sm-5" id="order" name="order"
                        disabled>
                </div>
            </div>
            <div class="form-group row"> <label for="tanggal" class="col-sm-2 col-form-label"> Tanggal
                    Order</label>
                <div class="col-sm-10"> <input class="datepicker form-control col-sm-5" data-date-format="mm/dd/yyyy"
                        type="date" name="tglOrder">
                </div>
            </div>
            <div class="form-group row"> <label for="customer" class="col-sm-2 col-form-label"> Customer</label>
                <div class="col-sm-10 input-group"> <input type="text" name='kodeCustomer' class="form-control col-sm-2"
                        placeholder="" disabled> <input type="text" name='customer' class="form-control col-sm-4"
                        placeholder=""> <button class="btn btn-primary btn-flat" onclick="tampilCustomer()"> <i
                            class="fa fa-search">
                        </i></button>
                </div>
            </div>
            <div class="form-group row"> <label for="poCustomer" class="col-sm-2 col-form-label"> PO
                    Customer</label>
                <div class="col-sm-10"> <input type="text" class="form-control col-sm-5" id="poCustomer"
                        name="poCustomer">
                </div>
            </div>
            <div class="form-group row"> <label for="poCustomer" class="col-sm-2 col-form-label">
                    Nomor Faktur</label>
                <div class="col-sm-10"> <input type="text" class="form-control col-sm-5" id="noFaktur" name="noFaktur"
                        disabled>
                </div>
            </div>
            <div class="form-group row"> <label for="tglFaktur" class="col-sm-2 col-form-label">
                    Tanggal Faktur</label>
                <div class="col-sm-10"> <input class="datepicker form-control col-sm-5" data - date -
                        format="mm/dd/yyyy" type="date" name="tglFaktur" disabled>
                </div>
            </div>
        </div>

        {{-- DETAILS TRANSAKSI --}}
        <div class="p-1 mb-2 bg-primary">
            <H3>Transaction Details</H3>
        </div>
        <table class="table  table-bordered table-responsive" id="tab_logic">
            <thead>
                <tr>
                    {{-- <th class="text-center" width="0%"></th> --}}
                    <th class="text-center" width="10%">Kode</th>
                    <th class="text-center" width="30%"> Nama Product</th>
                    <th class="text-center" width="15%"> Qty</th>
                    <th class="text-center" width="20%"> Price</th>
                    {{-- <th class="text-center" width="5%"> Disc1 %
                    </th>
                    <th class="text-center" width="5%">
                        Disc2 %</th>
                    <th class="text-center" width="10%">
                        Disc RP</th> --}}
                    <th class="text-center" width="20%">
                        Total</th>
                    <th class="text-center" width="10%">
                        Action</th>
                </tr>
            </thead>
            <tbody>
                <tr id='addr0'>
                    {{-- <td>
                        <div class="input-group"> <input type="hidden" name='id' id="id"
                                class="form-control" />
                        </div>
                    </td> --}}
                    <td>
                        <div class="input-group"> <input type="text" name='kode' id="kode" class="form-control"
                                readonly />
                        </div>
                    </td>
                    <td>
                        <div class="input-group"> <input type="text" name='product' id="product" class="form-control"
                                placeholder='Enter Product Name' />
                            <button class="btn btn-primary btn-flat" onclick="tampilProduk()">
                                <i class="fa fa-search">
                                </i></button>
                        </div>
                    </td>
                    <td>

                        {{-- <input type="number" name='qty' id="qty" placeholder='Enter Qty' class="form-control qty" step="0"
                            min="0" required /> --}}
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-danger btn-number" data-type="minus"
                                    data-field="quant[2]" id="subs">
                                    <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                </button>
                            </span>
                            <input type="text" name="qty" id="qty" class="form-control input-number" value="1" min="1"
                                max="1000">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success btn-number" data-type="plus"
                                    data-field="quant[2]" id="adds" onclick="hitungTotal()">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>

                    </td>

                    <td><input type="number" name='hargaJual' class="form-control price" step="0.00" min="0" readonly="readonly"
                            id="hargaJual" />
                    </td>
                    {{-- <td>
                        <input type="number" name='disc1' id="disc1" placeholder='Disc %' class="form-control qty" step="0"
                            min="0" value="0" />
                    </td>
                    <td><input type="number" name='disc2' id="disc2" placeholder='Disc %' class="form-control qty" step="0"
                            min="0" value="0" />
                    </td>
                    <td>
                        <input type="number" name='discrp' id="discrp" placeholder='Disc RP' class="form-control qty"
                            step="0" min="0" value="0" />
                    </td> --}}
                    <td><input type="number" name='total' id="total" placeholder='0.00' class="form-control total"
                            readonly="readonly" />
                    </td>
                    <td>
                        <div class="btn-group">
                            <button id="add_row" class="btn btn-success btn-flat" onclick="add_rows()">
                                <i class="fa fa-plus-circle"> </i></button>
                            <button id="reset" class="btn btn-danger btn-flat" onclick="reset()"> <i
                                    class="far fa-times-circle">
                                </i></button>
                        </div>
                    </td>

                </tr>
                <tr id='addr1'>
                </tr>
            </tbody>
        </table>

        {{-- bawah --}}
        <div class="row clearfix" style="margin-top:20px">
            {{-- <div class="pull-right col-md-4"> --}}
            <div class="offset-md-9">
                <table class="table-details table-bordered" id="tab_logic_total">
                    <tbody>
                        <tr>
                            <th class="text-center"> Sub Total</th>
                            <td class="text-center"> <input type="number" name='sub_total' placeholder='0.00'
                                    class="form-control" id="sub_total" readonly="readonly" />
                            </td>
                        </tr>

                       {{-- DISKON NOTA DIMATIKAN --}}
                        {{-- <tr>
                            <th class="text-center">
                                Disc Nota</th>
                            <td class="text-center">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="number" class="form-control" id="discNota" placeholder="0">
                                    <div class="input-group-addon">
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                        <tr>
                            <th class="text-center"> DPP</th>
                            <td class="text-center">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="number" class="form-control" id="dpp" placeholder="0"
                                        readonly="readonly">
                                    <div class="input-group-addon">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center"> PPN</th>
                            <td class="text-center"> <input type="number" name='ppn' id="ppn" placeholder='0.00'
                                    class="form-control" readonly="readonly" />
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center">
                                Total</th>
                            <td class="text-center">
                                <input type="number" name='total' id="total" placeholder='0.00' class="form-control"
                                    readonly="readonly" />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-group btn-flat mb-2 mb-sm-0">
                    <button type="submit" class="btn btn-success  float-right"><i class="fa fa-floppy-o"></i>
                        Simpan</button>
                    <button type="submit" class="btn btn-danger  float-right"><i class="fa fa-floppy-o"></i> Batal</button>
                </div>
                {{-- </div> --}}
            </div>
        </div>

    </div>


    @includeIf('penjualan.produk')
    @includeIf('penjualan.customer')
@endsection
@push('scripts')

    <script>
        let tableCustomer, tableProduk;

        function add_rows(){
            var i = 1;
            var input = document.querySelector("input");
            i++;
                // var _id = $('input[name="id"]').val();
                var _kode = $('input[name="kode"]').val();
                var _product = $('input[name="product"]').val();
                var _qty = $('input[name="qty"]').val();
                var _price = $('input[name="hargaJual"]').val();
                // var _disc1 = $('input[name="disc1"]').val();
                // var _disc2 = $('input[name="disc2"]').val();
                // var _discrp = $('input[name="discrp"]').val();
                var _total = $('input[name="total"]').val();

                var _tr = '<tr id="row' + i + '"><td>' + _kode + '</td' +
                    '><td>' + _product + '</td' +
                    '> <td>' + _qty + '</td><td>' + _price +
                    //     '</td><td>' + _disc1 + '</td><td>' +
                    // _disc2 + '</td><td>' + _discrp +
                    '</td><td>' + _total +
                    '</td><td><button id="' + i + '" class="btn btn-danger btn-flat"><i class="fas ' +
                    'fa-trash"></i></button></td></tr>';
                // if(input.value==""){
                //     alert("TIDAK BOLEH ADA DATA YANG KOSONG")
                // }else{
                $('#tab_logic').append(_tr);
                $('#tab_logic').reset();
            // }
            };
        //script add
        $(document).ready(function() {


            var i = 1;
            // $("#add_row").click(function() {



            $(document).on('click', '.btn-flat', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            // $("#add_row").click(function(){ var _kode=$('input[name="kode"]').val(); var
            // _product=$('input[name="product"]').val(); var
            // _qty=$('input[name="qty"]').val(); var _price=$('input[name="price"]').val();
            // var _disc1=$('input[name="disc1"]').val(); var
            // _disc2=$('input[name="disc2"]').val(); var
            // _discrp=$('input[name="discrp"]').val(); var
            // _total=$('input[name="total"]').val(); var
            // _tr='<tr><td>'+_kode+'</td><td>'+_product+'</td>
            // <td>'+_qty+'</td><td>'+_price+'</td><td>'+_disc1+'</td><td>'+_disc2+'</td><td>'+_discrp+'</td><td>'+_total+'</td><td><button
            // id="delete_row" class="btn btn-danger btn-flat"><i class="fas
            // fa-trash"></i></button></td></tr>'; $('#tab_logic').append(_tr); });
            // $("#delete_row").click(function(){ 	if(i>1){ 	$("#addr"+(i-1)).html(''); i--;
            // } 	calc(); });

            $('#tab_logic tbody').on('keyup change', function() {
                calc();
            });
            $('#tax').on('keyup change', function() {
                calc_total();
            });

        });



        function tampilProduk() {
            $('#modal-produk').modal('show');
        }

        function hideProduk() {
            $('#modal-produk').modal('hide');
        }


        function pilihProduk(id, kode, nama, hargaJual) {
            $('#id').val(id)
            $('#kode').val(kode)
            $('#product').val(nama)
            $('#hargaJual').val(hargaJual)
            hideProduk();
        }

        function reset() {
            $('#id').val("")
            $('#kode').val("")
            $('#product').val("")
            $('#qty').val("")
            $('#hargaJual').val("")
            $('#disc1').val("")
            $('#disc2').val("")
            $('#discrp').val("")
            $('#total').val("")
        }


        function tampilCustomer() {
            $('#modal-customer').modal('show');
        }

        $(function() {
            tableProduk = $('.table-produk').DataTable()
            //  {
            //      responsive: true,
            //      processing: true,
            //      serverSide: true,
            //      autoWidth: false,
            //      ajax: {
            //          url: '{{ route('barang.data') }}',
            //      },
            //      columns: [
            //          {data: 'DT_RowIndex', searchable: false, sortable: false},
            //          {data: 'kode'},
            //          {data: 'nama'},
            //          {data: 'hargaJual'},
            //          {data: 'aksi', searchable: false, sortable: false},
            //      ]
            //  });

            tableCustomer = $('.table-customer').DataTable(
                //  {
                //  responsive: true,
                //  processing: true,
                //  serverSide: true,
                //  autoWidth: false,
                // // //  ajax: {
                // // //      url: '{{ route('customer.data') }}',
                // // //  },
                //  columns: [
                //     //  {data: 'DT_RowIndex', searchable: false, sortable: false},
                //      {data: 'kode'},
                //      {data: 'nama'},
                //      {data: 'alamat'},
                //      {data: 'aksi', searchable: false, sortable: false},
                //  ]
                //  }
            );
        });

        function calc() {
            $('#tab_logic tbody tr').each(function(i, element) {
                var html = $(this).html();
                if (html != '') {
                    var qty = $(this).find('.qty').val();
                    var price = $(this).find('.price').val();
                    $(this).find('.total').val(qty * price);

                    calc_total();
                }
            });
        }

        function calc_total() {
            total = 0;
            $('.total').each(function() {
                total += parseInt($(this).val());
            });
            $('#sub_total').val(total.toFixed(2));
            tax_sum = total / 100 * $('#tax').val();
            $('#tax_amount').val(tax_sum.toFixed(2));
            $('#total_amount').val((tax_sum + total).toFixed(2));
        }


        // Hitung Total Line
        // function hitungTotal(){
            // qty_line=document.getElementById("qty");
            // hargaJualLine=document.getElementById("hargaJual");
            // document.getElementById("total").innerHTML = qty_line * hargaJualLine;
            // console.log(qty_line);
            // console.log(hargaJualLine);
            // console.log("qty");
            // console.log("harga");
        // }



        //TOMBOL PLUS  MINUS QTY
        function isNegative() {
            var $rooms = $("#qty");
            var c = $rooms.val();

            if (c >= 0) {
                //b--;
                //$rooms.val(b);
            } else {
                $("#subs").prop("disabled", true);
                $rooms.val(0);
                // alert('Jen kladne hodnoty!');
            }
        }
        $('#adds').click(function add() {
            var $rooms = $("#qty");
            var a = $rooms.val();

            a++;
            $("#subs").prop("disabled", !a);
            $rooms.val(a);

            // $("#qty").trigger(isNegative());
        });

        $("#subs").prop("disabled", !$("#qty").val());

        $('#subs').click(function subst() {
            var $rooms = $("#qty");
            var b = $rooms.val();
            if (b >= 1) {
                b--;
                $rooms.val(b);
            } else {
                $("#subs").prop("disabled", true);
            }
        });

        // console.log("HALLO MOTTO");
    </script>
@endpush
