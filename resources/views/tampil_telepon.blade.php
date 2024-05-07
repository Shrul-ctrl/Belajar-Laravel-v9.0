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
        <H3>Data Tabel Telepon</H3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nomer Telepon</th>
                <th>Pengguna id</th>
                <th>Nama Pengguna</th>
            </tr>
            @php $id = 1; @endphp
            @foreach ($telepon as $data)
                <tr>
                    <td>{{ $id++ }} </td>
                    <td>{{ $data->nomer_telepon }} </td>
                    <td>{{ $data->pengguna->id }} </td>
                    <td>{{ $data->pengguna->nama }} </td>
                </tr>
            @endforeach
        </table>
</body>
</html>
