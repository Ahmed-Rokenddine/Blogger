@extends('layout')

@section('content')
@unless(!count($posts))
<div class="grid grid-cols-4 gap-x-3 gap-y-6 p-6" >
@foreach($posts as $post)
    <div class="flex flex-col justify-between bg-cyan-200 rounded border-cyan-50  relative overflow-hidden space-y-2">
        <div class="px-3">
            <h3 class="text-2xl text-cyan-600">
                <a href="/post/{{$post['id']}}"><span style="font-weight: bold;" >{{ $post['title'] }}</span></a>
            </h3>
            <p class="text-cyan-900 text-sm"><span style="font-weight: bold;" > تاريخ النشر : </span style="font-weight: bold;">{{ $post['created_at'] }}</p>
        </div>
        <div class="flex items-end" >
            <button class="justify-self-end bg-cyan-900 w-full h-6 text-center text-cyan-50 cursor-pointer">read More</button>
        </div>
    </div>
@endforeach
</div>

@else
<p>No posts found</p>
@endunless
@endsection
