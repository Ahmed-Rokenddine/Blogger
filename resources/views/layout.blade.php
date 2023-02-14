<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Khobza</title>
</head>
<body class="bg-cyan-50 font-[DroidArabicKufiRegular]">
    <header class="bg-cyan-600 flex items-center justify-between py-4 px-6 md:px-12 mb-20 w-full">
        <h1 class="text-3xl text-cyan-50">خبزة</h1>
        <div class="hidden justify-between w-9/12 lg:flex">
            <ul class="flex w-8/12 justify-between text-cyan-50 items-center">
                <li><a href="/" class="hover:text-cyan-200 hover:underline">الرئيسية</a></li>
                <li><a href="" class="hover:text-cyan-900 hover:underline bg-cyan-50 pb-8 pt-5 px-10 text-cyan-700 rounded-full">المنشورات</a></li>
                <li><a href="/about" class="hover:text-cyan-200 hover:underline">من نحن</a></li>
                <li><a href="" class="hover:text-cyan-200 hover:underline">تواصل معنا</a></li>
            </ul>
            <div>
                <button class="bg-cyan-700 px-4 py-2 text-cyan-50 rounded hover:bg-cyan-900 hover:text-cyan-50">الولوج</button>
                <button class="bg-cyan-200 px-4 py-2 text-cyan-700 rounded hover:bg-cyan-900 hover:text-cyan-50">التسجيل</button>
            </div>
        </div>
        <div class="space-y-2 lg:hidden">
            <span class="block w-8 h-0.5 bg-cyan-50"></span>
            <span class="block w-8 h-0.5 bg-cyan-50"></span>
            <span class="block w-8 h-0.5 bg-cyan-50"></span>
        </div>
        <div class="hidden absolute top-0 left-0 h-screen w-[35vh] bg-cyan-600 flex flex-col items-center justify-between z-50 px-6 py-12">
              <svg class="h-7 w-7 absolute top-5 left-5 text-cyan-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            <ul class="h-1/2 flex flex-col justify-between text-cyan-50 items-center py-12">
                <li><a href="/" class="hover:text-cyan-200 hover:underline">الرئيسية</a></li>
                <li><a href="" class="hover:text-cyan-200 hover:underline text-cyan-200 ">المنشورات</a></li>
                <li><a href="/about" class="hover:text-cyan-200 hover:underline">من نحن</a></li>
                <li><a href="" class="hover:text-cyan-200 hover:underline">تواصل معنا</a></li>
            </ul>
            <div class="flex flex-col gap-2">
                <button class="bg-cyan-700 px-4 py-2 text-cyan-50 rounded hover:bg-cyan-900 hover:text-cyan-50">الولوج</button>
                <button class="bg-cyan-200 px-4 py-2 text-cyan-700 rounded hover:bg-cyan-900 hover:text-cyan-50">التسجيل</button>
            </div>
        </div>
    </header>
   
    {{-- VIEW OUTPUT  --}}
    @yield('content')
    @yield('about')
</body>
</html>