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
    <title>Create</title>
</head>

<body>


 {{-- Кнопка назад --}}

    <a href="{{ route('post.index') }}" class="btn btn-dark m-2"> << Назад </a>
{{-- Конец кнопки --}}

{{-- Начало Формы --}}
    <form action="{{route('post.store')}}" method="POST" class="m-5">
      @csrf

      <input class="form-control my-2" name="name" type="text"  placeholder="name">
      @error('name'){{$message}}@enderror

      <input class="form-control my-2" name="title" type="text"  placeholder="title">
      @error('title'){{$message}}@enderror

      
      <input class="form-control my-2" name="content" type="text"  placeholder="content">
      @error('content'){{$message}}@enderror

      
      <input class="form-control my-2" name="likes" type="number" placeholder="likes">
      @error('likes'){{$message}}@enderror

      
      <button class="btn btn-success w-100 my-2">Добавить запись</button>

    </form>
{{-- Конец формы --}}

</body>

</html>