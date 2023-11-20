<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/sidebar.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../asset/css/datatables.min.css">

    <link rel="shortcut icon" href="../asset/img/logo Point Of Sale.png">

    <title>Data Produk</title>
</head>
<body>
    
    @include('partials.sidebar');

    <!-- Content -->
    <main class="py-5 mb-5">
        <div class="container-fluid px-4">
            <h3 class="mb-3 mt-3 text-six">Data Produk <span id="explore"></span></h3>

            <div class="row">
                <div class="col-12">
                    <div class="data_table" style="font-size: rem;">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kode Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Berat</th>
                                    <th>Material</th>
                                    <th>Size</th>
                                    <th>Pelapis</th>
                                    <th>Deskripsi</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produk as $item)
                                <tr>
                                    <td style="width: 100px;">{{$item->nama_produk}}</td>
                                    <td>{{$item->kode_produk}}</td>
                                    <td>{{$item->nama_kategori}}</td>
                                    <td>Rp.{{$item->harga_produk}}</td>
                                    <td>{{$item->berat}}</td>
                                    <td>{{$item->material}}</td>
                                    <td>{{$item->size}}</td>
                                    <td>{{$item->pelapis}}</td>
                                    <td>{!! htmlspecialchars_decode (nl2br($item->deskripsi)) !!}</td>
                                    <td>{{$item->stok}}</td>
                                   
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <!-- End -->
    
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- End --> 

    <!--Greet-->
    <script src="../asset/js/greeting.js"></script>
    <!--End-->

    <!-- Datatables -->
    <script src="../asset/js/jquery-3.6.0.min.js"></script>
    <script src="../asset/js/datatables.min.js"></script>
    <script src="../asset/js/pdfmake.min.js"></script>
    <script src="../asset/js/vfs_fonts.js"></script>
    <script>
        $(document).ready(function(){
            var table = $('#example').DataTable({
                
                buttons:['copy', 'csv', 'excel', 'pdf', 'print']
                
            });
            
            table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');

        });
    </script>
    <!-- End -->    
</body>
</html>