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
        <H3>SISWA</H3>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
    @php $id = 1; @endphp
    @foreach ($siswa as $data )
            <tr>
                <td>{{ $id++ }} </td>
                <td>{{ $data->nama }} </td>
                <td>{{ $data->jenis_kelamin }} </td>
                <td>{{ $data->alamat }} </td>
                <td>{{ $data->agama }} </td>
                <td>{{ $data->telepon }} </td>
                <td>{{ $data->email }} </td>
            </tr>
    @endforeach
        </table>
</body>
</html>