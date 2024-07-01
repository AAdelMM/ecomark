@extends('ar.layout.main')


@section('content')


<section class="flex justify-center ">
    <div class="hero h-[100vh] container  inline-flex justify-center items-center">
    <div class="Hero-text w-[50vw] h-[50%]  text-center text-[5rem] flex justify-center"><img src="{{ asset('img/hero.svg') }}" alt=""></div>
         <div class="hero-image w-[50vw] h-[50%]  text-center flex flex-col justify-center items-center">
            <h1 class="font-bold text-[4.5rem] text-[#516091]" style="font-family: 'sky-bold';"> قم بتنمية أعمالك </h1>
            <h2 class="font-medium text-[2.5rem]" style="font-family: 'dubai-medium';"> نساعدك لتصل الى هدفك والى عملائك المحتملين بسرعة</h2>
            <p class="opacity-40 text-[1rem]"> توقف عن اضاعة اموالك , وتوجه لتحديد حملتك الاعلانية الصحيحة لاستهداف عملائك</p>
        </div>
         
    </div>
</section>

@endsection