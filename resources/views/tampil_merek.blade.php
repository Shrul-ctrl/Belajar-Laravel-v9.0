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
        <h3>Data Tabel Merek</h3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Merek</th>
            </tr>
            @php $id = 1; @endphp
            @foreach ($merek as $data)
                <tr>
                    <td>{{ $id++ }} </td>
                    <td>{{ $data->nama_merek }} </td>
                </tr>
            @endforeach
        </table>
</body>

</html>
