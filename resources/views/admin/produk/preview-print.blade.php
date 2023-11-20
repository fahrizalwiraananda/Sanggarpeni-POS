<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Barcode</title>
    

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        @page { margin: 0; }

        .text-center {
            text-align: center;
        }

        body{
            font-family: 'Poppins', sans-serif !important;
            margin: 0px; 
            padding: 0px;
        }

        a{
            text-decoration: none;
            color: #fff;
            text-align: center;

        }

        .button{
            text-align: center;
            height: 30px;;
            width: 80px;
            background-color: #333;
            padding-top: 5px;
            border-radius: 5px;
            transition: 0.5s;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -ms-transition: 0.5s;
            -o-transition: 0.5s;
        }

        .button:hover{
            text-align: center;
            height: 30px;;
            width: 80px;
            background-color: rgb(174, 28, 28);
            padding-top: 5px;
            border-radius: 5px;
            transition: 0.5s;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -ms-transition: 0.5s;
            -o-transition: 0.5s;
        }

        td{
            border: 1px solid #333; width: 250px; text-align:center;
        }

        h2{
            padding: 0px; margin:0px; margin-bottom:8px; text-align:center;
        }

        p{
            font-size: 10px;
            font-weight: bold;
        }

    </style>
</head>
<body>

    @php
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
@endphp
    <!--<div class="button">
        <a href="{{url('print-barcode/'.$produk->id_produk)}}" class="btn btn-green" id="change-3">
            <div class="d-flex justify-content-center align-items-center">
                <span>Export</span>
            </div>
        </a>
    </div>--->
    

    <h2>Barcode Produk "{{ $produk->nama_produk }}"</h2>
    

        <div> 
            <table id="list" width="100%">
                <tr id="item" >
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                </tr>
                <tr id="item" >
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                </tr>
                <tr id="item" >
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                </tr>
                <tr id="item" >
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                </tr>
                <tr id="item" >
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                </tr>
                <tr id="item" >
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                    <td class="text-center">
                        <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                        <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                        height="60">
                        <br>
                        {{ $produk->kode_produk }}
                    </td>
                </tr>
            </table>
        </div>

        <p> <i>Total Stiker : 24 pcs</i> </p>
    

    <!--<script type="text/javascript">
    function cloneItem() {
        var item = document.getElementById("item");
        var list = document.getElementById("list");
        var clonedItem = item.cloneNode(true);
        list.appendChild(clonedItem);
    }

    for(var i = 0; i < 5; i++) {
        cloneItem() ;
    }
    </script>-->
</body>
</html>