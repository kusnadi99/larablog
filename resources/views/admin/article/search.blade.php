@extends('includes.app')
@section('content')

  <div class="container">
  <a style="margin: 5px;" href="{{ url('/admin/article/create') }}" class="btn btn-primary">Create</a>
<ul class="list-group">

     @foreach ($datas as $data)
  <li class="list-group-item">
      <label class="badge badge-light"> {{$data->category->category}}</label>
 <br>
    <h3>{{ $data->title}}</h3>

      <a class="pull-left btn btn-success btn-sm" href="{{ url('/admin/article/'.$data->id.'/edit') }}">Edit</a>
          {!! Form::open(['method'=>'delete','route'=>['article.destroy',$data->id]]) !!}
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
      {!! Form::close() !!}
  </li>
     @endforeach

</ul>

    </div>


@endsection


<style type="text/css">
  form{
    display: inline-block;
  }
</style>