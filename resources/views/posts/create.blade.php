@extends('layout.main')


@section('content')
 <div class="col-sm-8 blog main">

<h1>Create a Post</h1>
<form method="POST" action="{{ route('posts_store')}}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control"  placeholder="Title" name="title" value="{{ old('title') }}"/>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <input type="text" class="form-control" placeholder="Body" name="body" value="{{ old('body') }}/>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('layout.error')
</div>
@endsection
