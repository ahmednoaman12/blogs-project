@extends('layouts.app')


@section('content')

<div class="w-4/5 m-auto pt-20">
    <form action="{{ route('update_password') }}" method="POST" >
        @csrf
        <input type="password" name="current_password" placeholder="current password ...."
            class="bg-transparent block border-b-2 w-full h-20 text-1xl outline-none">
        @if ($errors->any('current_password'))
            <span class="text-red-400">{{ $errors->first('current_password') }}</span>
        @endif

        <input type="password" name="new_password" placeholder="new password ...."
            class="bg-transparent block border-b-2 w-full h-20 text-1xl outline-none">
        @if ($errors->any('new_password'))
            <span class="text-red-400">{{ $errors->first('new_password') }}</span>
        @endif

        <input type="password" name="password_confirmation" placeholder="Confirm password ...."
            class="bg-transparent block border-b-2 w-full h-20 text-1xl outline-none">
        @if ($errors->any('password_confirmation'))
            <span class="text-red-400">{{ $errors->first('password_confirmation') }}</span>
        @endif
        <button type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            change password
        </button>
    </form>

</div>
@endsection
