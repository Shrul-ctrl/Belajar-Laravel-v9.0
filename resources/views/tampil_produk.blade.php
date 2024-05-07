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
        <h3>Data Tabel Produk</h3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Tanggal Produksi</th>
                <th>Nama Merek</th>
                <th>Id Merek</th>
            </tr>
            @php $id = 1; @endphp
            @foreach ($produk as $data)
                <tr>
                    <td>{{ $id++ }} </td>
                    <td>{{ $data->nama_produk }} </td>
                    <td>{{ $data->jumlah }} </td>
                    <td>{{ $data->tanggal_produksi }} </td>
                    <td>{{ $data->merek }} </td>
                    <td>{{ $data->id_merek }} </td>
                </tr>
            @endforeach
        </table>
</body>

</html>
