<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  @if(session('status-deleted'))
    <div class="alert alert-warning">
        {{ session('status-deleted') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="container mt-4">
  <table  class="table table-primary table-striped">
    <tr class="table-primary">
        <th>Id</th>
        <th>Tittle</th>
        <th colspan="2">Description</th>
    </tr>
    @foreach($data as $isi)
    <tr class="table-dark">
      <td class="table-info">
        {{ $isi -> id }}
      </td>
      <td class="table-info">
        {{ $isi -> title }}
      </td>
      <td class="table-info">
        {{ $isi -> description }}
      </td>
      <td class="table-info">
        <a href="/delete/{{ $isi->id }}">
          <button type="submit" class="btn btn-danger">Hapus</button>
        </a>
      </td>
    </tr>
    @endforeach
</table>
</div>  
</body>
</html>