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
    <title>Show</title>
</head>

<body>
  <a href="{{route('post.index')}}" class="btn btn-dark m-3 "><< Назад </a>
  

  <div class="border m-3 rounded-3 p-3">
    <h1>{{$posts->id}}.{{$posts->name}}<h1>
    <h2>{{$posts->title}}</h2>
    <h3>{{$posts->content}}</h3>
    <h4>{{$posts->likes}}</h4>


    <div class="row">
      <div class="col">
        <a href="{{ route('post.edit', $posts->id) }}" class="btn btn-dark m-3 w-100">Редактировать</a>
      </div>
      <div class="col">
        <form action="{{ route('post.destroy',$posts->id)}}" method="POST">
          @csrf
          @method('delete')
        <button class="btn btn-danger m-3 w-100">Удалить</></button>
      </form>
      </div>
    </div>

 </div>



</body>

</html>

