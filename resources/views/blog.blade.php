@extends('layout.app')


@section('content')
  
  <div class="grid grids-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
  
   
    @forelse ($posts as $post)
    <div>
           {{$post->title}} <br>
           {{$post->message}}<br>
           {{$post->user()->name}}
           {{$post->created_at}}


    </div>

           
    @empty
       
    @endforelse

  </div>

 

@endsection