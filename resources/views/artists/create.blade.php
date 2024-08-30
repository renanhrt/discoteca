<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artists</title>
</head>
<body>
    <h1>Create Artist</h1>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{route('artist.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <input type="submit" placeholder="Create a new artist">
        </div>
    </form>
</body>
</html>