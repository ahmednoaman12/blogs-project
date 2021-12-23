@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            blog posts
        </h1>

    </div>
</div>
@if(session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-3/6 mb-4 text-gray-50 bg-green-500 rounded-2xl p-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif
@if(Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl " href="/blog/create">
            create post
        </a>
    </div>
@endif
{{-- {{  $posts }} --}}
@foreach($posts as $post)

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('image/' . $post->image_path )}}" width="350"  class="mx-auto"  alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title}}
        </h2>
        <span class="text-gray-500">
            by <span class="font-bold italic text-gray-800"> {{$post->user->name}}</span> , {{ date(' Y' , strtotime($post->created_at))}} year
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description}}
        </p>
        <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg  font-extrabold py-4 px-8 rounded-3xl">
            keep reading
        </a>
        @if(isset(Auth::user()->id)  && Auth::user()->id == $post->user_id)
            <span class="float-right">
                <a class="text-gray-700 italic pb-1 border-b-2 hover:text-gray-900" href="/blog/{{ $post->slug }}/edit">
                Edit</a>
            </span>
            <span class="float-right">
                <form method="POST" action="/blog/{{ $post->slug }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-500 italic pb-1   pr-3 hover:text-gray-900" >
                        delete</button>
                </form>

                
            </span>
            
        @endif
    </div>
</div>
@endforeach

@endsection
