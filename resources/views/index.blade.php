@extends('layouts.app')


@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-grau-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                do you want
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                read more
            </a>
        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/11/27/21/31/computer-2982270_960_720.jpg" width="700" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            better web developer
        </h2>
        <p class="py-8 text-gray-500 text-s">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam eum facere ipsum temporibus accusamus,
            delectus facilis iste,
        </p>
        <p class="font-extrabold text-gray-600 text-l pb-9">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque molestias nihil ex cupiditate, magni ea,
            error aliquam quam perspiciatis,
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-l font-extrabold py-3 px-8 rounded-3xl">
            fint out more
        </a>
    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        i'm ahmed noaman
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        ful stack web developer
    </span>
    <span class="font-extrabold block text-4xl py-1">
        ful stack web developer
    </span>
    <span class="font-extrabold block text-4xl py-1">
        ful stack web developer
    </span>
</div>


<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        recents posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit laudantium at eos, incidunt aspernatur sunt
        provident minima illum veritatis mollitia est deserunt architecto ratione voluptatibus! Numquam facilis
        voluptatem repellendus repudiandae.
    </p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto ">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:mauto w-4/5 block">
            <span class="uppercase text-xs ">
                php laravel
            </span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quod, aspernatur nemo ex asperiores
                sint unde
            </h3>
            <a href=""
                class="uppercase bg-transparent border-gray-100 border-2 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            find more
            </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/11/27/21/31/computer-2982270_960_720.jpg" width="700" alt="">
    </div>
</div>
@endsection
