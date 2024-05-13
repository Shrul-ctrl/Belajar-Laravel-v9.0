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
                <th>Nama Pembeli</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
            @php $id = 1; @endphp
            @foreach ($data as $transaksi)
                <tr>
                    <td>{{ $id++ }} </td>
                    <td>{{ $transaksi->barang->nama_barang }} </td>
                    <td>{{ $transaksi->pembeli->nama_pembeli }}</td>
                    <td>{{ $transaksi->jumlah }}</td>
                    <td>{{ $transaksi->tanggal }}</td>
                </tr>
            @endforeach
        </table>
</body>

</html>
