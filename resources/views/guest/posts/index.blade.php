@extends('layouts.app')

@section('content')

<h1>Tutti i post</h1>

<ul>
    @foreach ($posts as $post)
       <li>
           <a href="{{route('posts.show', ['slug' => $post->slug]) }}">
        {{ $post->title}}
    </a>
        </li> 
    @endforeach
</ul>
    
@endsection