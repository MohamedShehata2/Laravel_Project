<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
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
    <form action="{{ route('post.edit', $post->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div>
        <label class="form-label" for="name">Title</label>
        <input class="form-control" type="text" name="Title" value="{{ $post->Title }}">
        </div>
        <div>
        <label class="form-label" for="price">posted_by</label>
        <input class="form-control" type="text" name="posted_by" value="{{ $post->posted_by }}">
        </div>
        <div>
        <label class="form-label" for="description">created_at</label>
        <input class="form-control" type="text" name="created_at" value="{{ $post->created_at }}">
        </div>
        <input class="btn btn-primary" type="submit">
    </form>

</body>

</html>
