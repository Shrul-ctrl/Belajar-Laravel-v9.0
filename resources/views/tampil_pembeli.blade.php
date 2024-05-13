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
                <th>Nama Pembeli</th>
                <th>Jenis Kelamin</th>
            </tr>
            @php $id = 1; @endphp
            @foreach ($data as $pembeli)
                <tr>
                    <td>{{ $id++ }} </td>
                    <td>{{ $pembeli->nama_pembeli }} </td>
                    <td>{{ $pembeli->jenis_kelamin }}</td>
                </tr>
            @endforeach
        </table>
</body>

</html>
