@extends('layouts.admin')

@section('content_admin')
    <!-- Content -->
    <h3 class="mb-3 mt-3 text-six">Kategori Produk <span id="explore"></span></h3>


    <button class="btn btn-brown d-flex justify-content-center align-items-center" id="change-2"  onClick="addForm('{{ route('kategori.store') }}')">+ Tambah</button>


    </div>

    <div class="row table-data">
        <div class="col-12">
            <div class="data_table" style="font-size: rem;">
                <table id="example" class="table ">
                    <thead class="text-six">
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">1</td>
                            <td>Makan & Minum</td>
                            <td>
                                <img src="../asset/img/gelas kayu jati.webp" alt="" style="width: 4vw; height: 100%;">
                            </td>
                            <td>
                                <div class="action d-flex justify-content-start align-items-center">
                                    <a href="update-kategori.html"><i class='bx bx-edit text-green fs-3'></i></a>
                                    <a href="hapus-kategori.html"><i class='bx bxs-trash text-red fs-3' ></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@include('admin.kategori.form')


<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>


<script type="text/javascript">
 let table;

$(function () {
    table = $('.table').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        autoWidth: false,
        ajax: {
            url: '{{ route('kategori.data') }}',
        },
        columns: [
            {data: 'DT_RowIndex', searchable: false, sortable: false},
            {data: 'nama_kategori'},
            {data: 'aksi', searchable: false, sortable: false},
        ]
    });

    $('exampleModal').validator().on('submit', function (e) {
        if (! e.preventDefault()) {
            $.post($('#exampleModal form').attr('action'), $('#exampleModal form').serialize())
                .done((response) => {
                    $('#exampleModal').modal('hide');
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Tidak dapat menyimpan data');
                    return;
                });
            }
        });
    });

    // Untuk modal halaman create
    function addForm(url) {
        $('#exampleModal').modal('show');
        $('#exampleModal .modal-title').text('Tambah Kategori');

        $('#exampleModal form')[0].reset();
        $('#exampleModal form').attr('action', url);
        $('#exampleModal [name=_method]').val('post');
        $('#exampleModal[name=nama_Kategori]').focus();
    }

    

</script>


    @endsection
    
