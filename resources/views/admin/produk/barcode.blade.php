<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Barcode</title>

    <style>
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

    @php
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
@endphp

    <a href="export-proses" class="btn btn-green" id="change-3">
        <div class="d-flex justify-content-center align-items-center">
            <i class='bx bx-download fw-bold me-2' ></i>
            <span>Export</span>
        </div>
    </a>

    <table width="100%">
        <tr>
                <td class="text-center" style="border: 1px solid #333; width: 250px; ">
                    <span class="mb-3 p-0">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_produk) }}</span><br> 
                    <img class="mt-3" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($produk->kode_produk, $generatorPNG::TYPE_CODE_128)) }}"  width="180"
                    height="60">
                    <br>
                    {{ $produk->kode_produk }}
                </td>
        </tr>
    </table>
</body>
</html>