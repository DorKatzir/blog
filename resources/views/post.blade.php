<x-layout>
    
    <article>
        <h1>{{ $post->title }}</h1>
        <div><p>{!! $post->body !!}</p></h1>
    </article>

    <a href="/">Go Back</a>
      

</x-layout>







{{-- @extends('layout')

@section('content')
    
    <article>
        <h1>{{ $post->title }}</h1>
        <div>{!! $post->body !!}</h1>
    </article>
    <a href="/">Go Back</a>  

@endsection --}}
       
