@extends('ar.layout.main')


@section('content')

<!--check-->
<section class="flex justify-center lg:mt-[30vh]">
    <div class="hero h-full container  inline-flex justify-center items-center">
    <div class="Hero-text w-[50vw] h-[50%]  text-center text-[5rem] flex justify-center"><img src="{{ asset('img/hero.svg') }}" alt=""></div>
         <div class="hero-image w-[50vw] h-[50%]  text-center flex flex-col justify-center items-center">
            <h1 class="font-bold lg:text-[4.5rem] text-[2rem] text-[#516091]" style="font-family: 'sky-bold';"> قم بتنمية أعمالك </h1>
            <h2 class="font-medium lg:text-[2.5rem] text-[1.5rem]" style="font-family: 'dubai-medium';"> نساعدك لتصل الى هدفك والى عملائك المحتملين بسرعة</h2>
            <p class="opacity-40 text-[1.2rem]" style="font-family: 'dubai-medium';"> توقف عن اضاعة اموالك , وتوجه لتحديد حملتك الاعلانية الصحيحة لاستهداف عملائك</p>
        </div>
         
    </div>
</section>

@endsection