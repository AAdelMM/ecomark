@extends('en.layout.main')


@section('content')

<header class="w-[100vw] h-[4rem]  relative flex justify-center">
<div class="nav container border-3  border-2 border-gray-100 rounded-lg flex items-center justify-between lg:justify-end ">
    <div class="logo w-[7rem] h-[4rem] inline-flex mx-2 items-center"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></div>
    <div class="menu hidden flex-auto lg:flex justify-center items-center">
        <ul class="inline-flex justify-center w-[70vw] text-[1.2rem] absolute font-bold text-[#516091]">
            <li class="mx-2">عنا</li>
            <li class="mx-2">اتصل بنا</li>
            <li class="mx-2">التقييمات</li>
            <li class="mx-2">فريقنا</li>
            <li class="mx-2">الخدمات</li>
            <li class="mx-2">الرئيسية</li>
            
        </ul>
        
    </div>
    
    <div class="hidden lg:flex"><x-language-switcher /></div>
 <!-- Hamburger Button (hidden on large screens) -->
 <button id="menu-toggle" class="lg:hidden text-gray-700 mx-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    
</div>
     <!-- Mobile Menu (hidden initially, shown when button is clicked) -->
     <div id="mobile-menu" class="hidden lg:hidden bg-sky-100 w-[50%] absolute right-0 top-[4rem] text-center py-2 z-[5]">
        <ul class="text-[1rem] font-bold text-[#516091]">
            <li class="py-2">الرئيسية</li>
            <li class="py-2">الخدمات</li>
            <li class="py-2">الفريق</li>
            <li class="py-2">تقييمات</li>
            <li class="py-2">تنصل بنا</li>
            <li class="py-2">عنا</li>
            <li><div class="lang-switch py-2"><x-language-switcher /></div></li>
        </ul>
        
    </div>
</header>




