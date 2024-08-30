<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artists</title>
</head>
<body>
    <h1>Artists</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
            </tr>
            @foreach($artists as $artist)
                <tr>
                    <td>{{$artist->idArtist}}</td>
                    <td>{{$artist->name}}</td>
                    <td>
                        <a href="{{route('artist.edit', ['artist' => $artists])}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>