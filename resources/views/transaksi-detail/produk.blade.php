<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-five" id="formModalLabel">Pilih Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row table-data">
                    <div class="col-12">
                        <div class="data_table" style="font-size: rem;">
                            <table id="example" class="table ">
                                <thead class="text-six">
                                    <tr>
                                        <th>Kode Produk</th>
                                        <th style="width: 150px !important;">Nama</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produk as $item)
                                    <tr>
                                        <td class="btn px-0 text-three" style="width: 90px;">{{$item->kode_produk}}</td>
                                        <td><span style="width: 150px !important;">{{$item->nama_produk}} </span></td>
                                        <td>Rp.{{$item->harga_produk}}</td>
                                        <td>{{$item->stok}}</td>
                                        <td>
                                            <div class="action d-flex justify-content-center align-items-center">
                                                <a href="{{url('pilih-produk/'.$item->id_produk)}}"><i class='bx bx-barcode-reader fs-3'></i></a>
                                            </div>
                                        </td>
                                        @endforeach
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>