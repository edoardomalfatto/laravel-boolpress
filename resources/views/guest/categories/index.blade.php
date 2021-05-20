@extends('layouts.app')

@section('content')

<h1>Tutte le categorie</h1>

<ul>
    @foreach ($categories as $category)
       <li>
           <a href="{{route('categories.show', ['slug' => $category->slug]) }}">
        {{ $category->name}}
    </a>
        </li> 
    @endforeach
</ul>
    
@endsection