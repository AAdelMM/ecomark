@extends('en.layout.main')


@section('content')

<header class="w-[100vw] h-[4rem]  relative flex justify-center">
<div class="nav container border-3  border-2 border-gray-100 rounded-lg flex items-center justify-end ">
<div class="logo w-[7rem] h-[4rem] inline-flex mx-2 items-center"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></div>
<div class="menu flex-auto flex justify-center items-center">
    <ul class="inline-flex justify-center w-[70vw] text-[1.2rem] absolute font-bold text-[#516091]">
        <li class="mx-2">Home</li>
        <li class="mx-2">Services</li>
        <li class="mx-2">Team</li>
        <li class="mx-2">Testimonials</li>
        <li class="mx-2">Contact</li>
        <li class="mx-2">About</li>
        
    </ul>
</div>
<div><x-language-switcher /></div>


</div>
</header>




