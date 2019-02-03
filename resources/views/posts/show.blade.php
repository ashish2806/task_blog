@extends('layout.main')

@section('content')



        <div class="col-sm-8 blog-main">

          <div class="blog-post">

            <h2 class="blog-post-title">
            <a href="/posts/{{ $post->id }}" >{{$post->title}}</a>
            </h2>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}<a href="#"></a></p>

            <p>{{$post->body}}</p>
            <div class="comments">

            @forelse($post->comments as $comment)
            <article>
              <li  class="list-group-item">
                <strong>

                {{ $comment->created_at->diffForHumans() }} :
                </strong>
                {{ $comment->body }}
                </li>
              </article>
            @empty
            <article>
              <li  class="list-group-item">
                <strong>
                  No Comments
                </strong>
                </li>
                </article>
            @endforelse
            </div>
            <!-- add comment-->
            <div class="card">
              <div class="card-block">
                   
              <form method="POST" action="/posts/{{ $post->id }}/comments">
              {{ csrf_field() }}
              <div class="form-group">
              <textarea name="body" placeholder="{{ $agreed ? 'Your Comments':'Not Allowed!!' }}" class="form-control"></textarea>

               <button type="submit" class="btn btn-primary {{ $agreed ? '':'disabled' }}">Comment</button>

              </div>
              </form>
              @include('layout.error')
              
              </div>
            </div>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->







@endsection
