@extends('layout')

@section('about')
<div class="w-full h-full flex flex-col-reverse gap-y-12 items-center justify-center md:flex-row">
    <div class="px-6 md:w-1/2 space-y-6">
        <h2 class="text-3xl font-bold">رفيق بحثك عن أي معلومة</h2>
        <p class="text-xl">انطلاقاً من إيماننا بأن الأسرة العربية هي ركيزة المجتمع المتين، كرسنا جهودنا في موضوع لإثراء المحتوى العربي على الإنترنت لكل أفراد العائلة، حيث تقدم موضوع بفخر المعلومة المتخصصة والموثوقة إضافة إلى حلول الذكاء الاصطناعي باللغة العربية لملايين القراء العرب في كل أنحاء العالم بهدف تسهيل وتحسين تجربة المستخدم العربي والارتقاء بها.</p>
    </div>
    <div class="relative md:mr-20">
        <div class="w-64 md:w-96 h-96 bg-cyan-400 rounded"></div>
        <img src="https://mawdoo3.com/assets/images/about-us/about-us-header.WebP" class="absolute top-12 left-5 md:left-20">
    </div>
</div>
@endsection
