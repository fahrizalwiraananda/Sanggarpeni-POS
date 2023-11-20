
@extends('layouts.kasir')

@section('content')
<div class="row row-produk">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 p-3" id="table-scroll">
        <div class="row">
            <div class="col-md-7">
                <form class="d-flex ms-auto my-4 my-lg-0 m-0 form-produk">
                    @csrf
                    <div class="input-group mb-0">
                        <input type="hidden" name="id_penjualan" id="id_penjualan" value="{{ $id_penjualan }}">
                        <input type="hidden" name="id_produk" id="id_produk">
                        <input type="text" class="form-control" name="kode_produk" placeholder="Kode Produk" id="kode_produk">
                        <button class="btn btn-brown btn-outline-secondary m-0"  id="button-addon2" data-bs-toggle="modal" data-bs-target="#formModal" type="button"><i class="fa fa-search text-white" aria-hidden="true"></i></button>
                    </div>

                </form>
            </div>
            <div class="col-md-5">
                <form class="d-flex  ms-auto my-4 my-lg-0 m-0">
                    <div class="input-group mb-0">
                        <input type="text" class="form-control fs-7" placeholder="Cek Data Member" aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn btn-brown btn-outline-secondary m-0"  id="button-addon2" data-bs-toggle="modal" data-bs-target="#formModalMember" type="button"><i class="fa fa-search text-white" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    
        <table class="table text-center">
            <thead class="text-two">
                <tr>
                    <th scope="col" class="text-start fw-normal py-3">Kode</th>
                    <th scope="col" class="fw-normal py-3">Nama</th>
                    <th scope="col" class="fw-normal py-3">Harga</th>
                    <th scope="col" class="fw-normal py-3">Jumlah</th>
                    <th scope="col" class="fw-normal py-3">SubTotal</th>
                    <th scope="col" class="fw-normal py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-one">
                <tr>
                    <td class="text-start fw-semibold">SP-0001</td>
                    <td class="text-middle fw-semibold">Piring Kelinci</td>
                    <td class="align-middle fw-semibold">Rp. 15.000</td>
                    <td class="align-middle fw-semibold">
                        <div class="add-btn d-flex justify-content-center">
                            <div class="quantity d-flex align-items-center me-3">
                                <button type="button" data-decrease class="btn btn-brown btn-sm text-three"><i class="fas fa-minus"></i></button>
                                <input type="number" data-value name="jumlah"  class="p-1 fw-bold bg-none text-two mx-3"  value="1" min="1" max="5" style="width: 50px; text-align: center; border: none;">
                                <button type="button" data-increase class="btn btn-brown btn-sm text-three"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle fw-semibold">Rp.60.000</td>
                    <td class="align-middle fw-semibold"><a href="hapus-produk.html"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
        <div class="count p-3 border rounded-3 shadow-set text-one">
            <h6 class="fw-semibold">Total Sementara</h5>
                <div class="calculator p-2 py-1">
                    <table class="table text-center table-borderless">
                        <tbody class="text-one">
                            <tr>
                                <td class="text-start text-two" colspan="2">Jumlah Produk :</td>
                                <td class="align-middle fw-semibold text-end">4</td>
                            </tr>
                            <tr>
                                <td class="text-start text-two" colspan="2">Total Sementara :</td>
                                <td class="align-middle fw-semibold text-end">Rp. 60.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h6 class="fw-semibold">Ada Member ?</h5>
                    <div class="calculator p-2 py-1">
                        <div class="col-md-12 mb-3 d-flex justify-content-between align-items-center">
                            <div class="remember d-flex justify-content-between">
                                <input type="checkbox" value="" class="remember me-1" id="checkbox">
                                <label class="text-two fs-7" for="checkbox">
                                    Ada
                                </label>
                            </div>
                            <input type="text" class="form-control bg-white-2 shadow-sm fs-7 w-75" name="member" id="validationDefault01" placeholder="ID Member">
                        </div>
                    </div>
                    <h6 class="fw-semibold">Bayar Pakai Apa ?</h5>
                        <div class="calculator p-2 py-1 mb-1 d-flex justify-content-between">
                            <div class="remember">
                                <input type="radio" name="gender" class="text-two" name="tunai" id="validationDefault02" required value="Tunai"> Tunai
                            </div>
                            <div class="remember">
                                <input type="radio" name="gender" class="text-two ms-5" name="atm" id="validationDefault02" required value="ATM"> ATM
                            </div>
                            <div class="remember">
                                <input type="radio" name="gender" class="text-two ms-5" name="qris" id="validationDefault02" required value="QRIS"> QRIS
                            </div>
                        </div>
                <h6 class="fw-semibold">Perhitungan Total Harga</h5>
                <div class="calculator p-2 py-1">
                    <table class="table text-center table-borderless">
                        <tbody class="text-one">
                            <tr>
                                <td class="text-start text-two" colspan="2">Diskon :</td>
                                <td class="align-middle fw-semibold text-end">10 %</td>
                            </tr>
                            <tr>
                                <td class="text-start text-two" colspan="2">Total Sementara :</td>
                                <td class="align-middle fw-semibold text-end">Rp. 60.000</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold text-one fs-6" colspan="2">Total :</td>
                                <td class="align-middle fw-bolder text-end fs-6">Rp. 54.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <a href="checkout.html" class="btn btn text-three shop w-100" id="change-log" name="beli"> Simpan & Print</a>
        </div>
    </div>
</div>
@include('transaksi-detail.produk')
@include('transaksi-detail.member')
@endsection

@push('scripts')
<script>
    let table, table2;

    $(function () {
        $('body').addClass('sidebar-collapse');

        table = $('.table-penjualan').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('transaksi.data', $id_penjualan) }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'kode_produk'},
                {data: 'nama_produk'},
                {data: 'harga_produk'},
                {data: 'jumlah'},
                {data: 'diskon'},
                {data: 'subtotal'},
                {data: 'aksi', searchable: false, sortable: false},
            ],
            dom: 'Brt',
            bSort: false,
            paginate: false
        })
        .on('draw.dt', function () {
            loadForm($('#diskon').val());
            setTimeout(() => {
                $('#diterima').trigger('input');
            }, 300);
        });
        table2 = $('.table-produk').DataTable();

        $(document).on('input', '.quantity', function () {
            let id = $(this).data('id');
            let jumlah = parseInt($(this).val());

            if (jumlah < 1) {
                $(this).val(1);
                alert('Jumlah tidak boleh kurang dari 1');
                return;
            }
            if (jumlah > 10000) {
                $(this).val(10000);
                alert('Jumlah tidak boleh lebih dari 10000');
                return;
            }

            $.post(`{{ url('/transaksi') }}/${id}`, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'put',
                    'jumlah': jumlah
                })
                .done(response => {
                    $(this).on('mouseout', function () {
                        table.ajax.reload(() => loadForm($('#diskon').val()));
                    });
                })
                .fail(errors => {
                    alert('Tidak dapat menyimpan data');
                    return;
                });
        });

        $(document).on('input', '#diskon', function () {
            if ($(this).val() == "") {
                $(this).val(0).select();
            }

            loadForm($(this).val());
        });

        $('#diterima').on('input', function () {
            if ($(this).val() == "") {
                $(this).val(0).select();
            }

            loadForm($('#diskon').val(), $(this).val());
        }).focus(function () {
            $(this).select();
        });

        $('.btn-simpan').on('click', function () {
            $('.form-penjualan').submit();
        });
    });

    function tampilProduk() {
        $('#modal-produk').modal('show');
    }

    function hideProduk() {
        $('#modal-produk').modal('hide');
    }

    function pilihProduk(id, kode) {
        $('#id_produk').val(id);
        $('#kode_produk').val(kode);
        hideProduk();
        tambahProduk();
    }

    function tambahProduk() {
        $.post('{{ route('transaksi.store') }}', $('.form-produk').serialize())
            .done(response => {
                $('#kode_produk').focus();
                table.ajax.reload(() => loadForm($('#diskon').val()));
            })
            .fail(errors => {
                alert('Tidak dapat menyimpan data');
                return;
            });
    }

    function tampilMember() {
        $('#modal-member').modal('show');
    }

    function pilihMember(id, kode) {
        $('#id_member').val(id);
        $('#kode_member').val(kode);
        $('#diskon').val('{{ $diskon }}');
        loadForm($('#diskon').val());
        $('#diterima').val(0).focus().select();
        hideMember();
    }

    function hideMember() {
        $('#modal-member').modal('hide');
    }

    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload(() => loadForm($('#diskon').val()));
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }

    function loadForm(diskon = 0, diterima = 0) {
        $('#total').val($('.total').text());
        $('#total_item').val($('.total_item').text());

        $.get(`{{ url('/transaksi/loadform') }}/${diskon}/${$('.total').text()}/${diterima}`)
            .done(response => {
                $('#totalrp').val('Rp. '+ response.totalrp);
                $('#bayarrp').val('Rp. '+ response.bayarrp);
                $('#bayar').val(response.bayar);
                $('.tampil-bayar').text('Bayar: Rp. '+ response.bayarrp);
                $('.tampil-terbilang').text(response.terbilang);

                $('#kembali').val('Rp.'+ response.kembalirp);
                if ($('#diterima').val() != 0) {
                    $('.tampil-bayar').text('Kembali: Rp. '+ response.kembalirp);
                    $('.tampil-terbilang').text(response.kembali_terbilang);
                }
            })
            .fail(errors => {
                alert('Tidak dapat menampilkan data');
                return;
            })
    }
</script>
@endpush
 
