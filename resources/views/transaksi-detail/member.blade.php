<div class="modal fade" id="formModalMember" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-five" id="formModalLabel">Pilih Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row table-data">
                    <div class="col-12">
                        <div class="data_table" style="font-size: rem;">
                            <table id="example2" class="table ">
                                <thead class="text-six">
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 150px !important;">Nama</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach($member as $item)
                                    <tr>
                                        <td class="fw-bold">{{$no++}}</td>
                                        <td style="width: 90px;">{{$item->name}}</td>
                                        <td><span style="width: 150px !important;">{{$item->telpon}} </span></td>
                                        <td>{{$item->alamat_lengkap}}</td>
                                        <td>
                                            <div class="action d-flex justify-content-center align-items-center">
                                                <a href="{{url('pilih-produk/'.$item->id_member)}}"><i class='bx bx-barcode-reader fs-3'></i></a>
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

  <!-- Datatables -->

  <!-- End -->   