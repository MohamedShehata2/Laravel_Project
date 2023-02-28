<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
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


    <div class="row justify-between">
        <form class="col-6" action="{{ route('post.store') }}" method="POST">
            @csrf
            <div>
                <label class="form-label" for="name">Title</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div>
                <label class="form-label" for="description">description</label>
                <input class="form-control" type="text" name="description">
            </div>
            <div>
                <label class="form-label" for="author_id">author_id</label>
                <input class="form-control" type="text" name="author_id">
            </div>
            <div>
                <label class="form-label" for="created_at">created_at</label>
                <input class="form-control" type="text" name="created_at">
            </div>
            <div>
                <label class="form-label" for="updated_at">updated_at</label>
                <input class="form-control" type="text" name="updated_at">
            </div>
            <input class="btn btn-primary" type="submit">
        </form>
    </div>
</body>

</html>
