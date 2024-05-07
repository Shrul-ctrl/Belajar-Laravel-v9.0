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
        <h3>Data Tabel Transaksi</h3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Nama Pembeli</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
            @php $id = 1; @endphp
            @foreach ($transaksi as $data)
                <tr>
                    <td>{{ $id++ }} </td>
                    <td>{{ $data->barang2s->id }} </td>
                    <td>{{ $data->pembeli }} </td>
                    <td>{{ $data->jumlah }} </td>
                    <td>{{ $data->tanggal }} </td>
                </tr>
            @endforeach
        </table>
</body>

</html>
