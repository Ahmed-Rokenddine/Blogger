@extends('layout')

@section('content')
<h2>{{ $heading }}</h2>
@unless(!count($posts))
@foreach($posts as $post)
    <h3>
        <a href="/post/{{$post['id']}}"><span style="font-weight: bold;" >{{ $post['title'] }}</span></a>
    </h3>
    <p><span style="font-weight: bold;" >Description: </span>{{ $post['description'] }}</p>
@endforeach
@else
<p>No posts found</p>
@endunless
@endsection
