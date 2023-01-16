<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>Index</title>
</head>

<body>

 {{-- Это Навбар для ссылки для Create в Базу Данных --}}

    <nav class="navbar bg-dark navbar-dark">
        <div class="container">
          <form class="d-flex" role="search">
            <a href="{{route('post.index')}}" class="navbar-brand">Заметки</a>
            <a href="/posts/create" class="btn btn-outline-light" type="submit">Добавить запись</a>
          </form>
        </div>
      </nav>

{{--  Конец Навбара --}}



{{-- Вывод значений из Модели --}}

@foreach ($posts as $item)


<div class="border m-3 rounded-3 p-3">
   <h1>{{$item->id}}-{{$item->name}}<h1>
    <h2><a href="{{ route('post.show', $item->id) }}">{{$item->title}}</a></h2>
   <h3>{{$item->content}}</h3>
   <h3>{{$item->likes}}</h3>
</div>

@endforeach

{{--  Конец вывода  --}}




</body>

</html>

