<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
    <table class="table table-hover">
        <thead>
            <tr class="">
                <th>id</th>
                <th>Title</th>
                <th>author_id</th>
                <th>created_at</th>
                <th>author_name</th>
            </tr>
        </thead>
        <tbody>

        <div class="text-center">
        <button class="btn btn-success "><a class="btn" href="{{ route('post.create')}}" >create post</a></button> 
        </div>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->author_id }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->author->name }}</td>
                    <th class="d-flex">
                        <button class="btn btn-primary"><a  class="btn" href="{{ route('post.show', $post->id ) }}" >View</a></button>
                        
                        
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                            @method('DELETE')
                            @csrf()
                            <button class="btn btn-danger " type="submit">delete</button>
                        </form>

                       

                        <form action="{{ route('post.edit', $post->id) }}">
                            <button type='submit' class="btn btn-warning">update</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
