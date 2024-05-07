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
        <H3>POST</H3>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            @php $id = 1; @endphp
            @foreach ($post as $data)
                <tr>
                    <td>{{ $id++ }} </td>
                    <td>{{ $data->title }} </td>
                    <td>{{ $data->content }} </td>
                </tr>
            @endforeach
        </table>
</body>

</html>
