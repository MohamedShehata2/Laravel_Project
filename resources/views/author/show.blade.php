<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('author.index')}}">Authors</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <fieldset>
        <legend>author</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $author->name }}</td>
                </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>posts</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>author_id</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    
                </tr>
            </thead>
            <tbody>
               
            
                @foreach ($author -> posts as $post)
                    <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->author_id }}</td>
                    <td>{{ $post->created_at }}</td>
                    
                    </tr>
                @endforeach 
                

            </tbody>
        </table>
    </fieldset>
</body>

</html>
