<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <style>
        .active
        {
            background: aqua;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr class="active">
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>author_id</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>author_name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->author_id }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>{{ $post->author->name }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
