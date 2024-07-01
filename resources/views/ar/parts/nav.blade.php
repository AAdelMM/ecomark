@extends('ar.layout.main')


@section('content')

<header class="w-[100vw] h-[4rem]  relative flex justify-center">
<div class="nav container border-3  border-2 border-gray-100 rounded-lg flex items-center justify-end ">
<div class="logo w-[7rem] h-[4rem] inline-flex mx-2 items-center"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></div>
<div class="menu flex-auto flex justify-center items-center">
    <ul class="inline-flex justify-center w-[70vw] text-[1.5rem] absolute ">
        <li class="mx-2">عنا</li>
        <li class="mx-2">اتصل بنا</li>
        <li class="mx-2">تقيمات</li>
        <li class="mx-2">الفريق</li>
        <li class="mx-2">خدماتنا</li>
        <li class="mx-2">الرئيسية</li>
        
    </ul>
</div>
<div class="text-center text-[1rem]" style="font-family: 'sky-bold';><x-language-switcher /></div>


</div>
</header>





