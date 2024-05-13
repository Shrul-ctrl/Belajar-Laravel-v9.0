<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <center>
        <h3>Data Tabel barang</h3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            @php $id = 1; @endphp
            @foreach ($data as $barang)
                <tr>
                    <td>{{ $id++ }} </td>
                    <td>{{ $barang->nama_barang }} </td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                </tr>
            @endforeach
        </table>
</body>

</html>
