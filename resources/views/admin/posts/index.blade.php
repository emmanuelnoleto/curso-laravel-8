<h2>Posts</h2>

@foreach ($posts as $post)
    <p>{{$post->title}}</p>
    <p>{{$post->content}}</p>
    <hr>
@endforeach
