@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <div>
            <img src="{{ asset('image') }}/{{ $post->image_path }}" width="700" alt="">
        </div>
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>

    </div>
</div>

<div class="w-4/5 m-auto ">
  
   <span class="text-gray-500">
       by <span class="font-bold italic text-gray-800">
           {{ $post->user->name }}
       </span> ,
       {{ date(' Y' , strtotime($post->created_at))}}
   </span>
   <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
    {{ $post->description}}
   </p>

</div>
@endsection
