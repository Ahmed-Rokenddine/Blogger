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
    <header class="bg-cyan-600 flex items-center justify-between py-4 px-12 mb-20 w-full">
        <h1 class="text-3xl text-cyan-50">خبزة</h1>
        <ul class="flex w-1/3 justify-between text-cyan-50">
            <li><a href="" class="hover:text-cyan-200 hover:underline">الرئيسية</a></li>
            <li><a href="" class="hover:text-cyan-900 hover:underline bg-cyan-50 pb-8 pt-5 px-10 text-cyan-700 rounded-full">المنشورات</a></li>
            <li><a href="/about" class="hover:text-cyan-200 hover:underline">من نحن</a></li>
            <li><a href="" class="hover:text-cyan-200 hover:underline">تواصل معنا</a></li>
        </ul>
        <div>
            <button class="bg-cyan-700 px-4 py-2 text-cyan-50 rounded hover:bg-cyan-900 hover:text-cyan-50">الولوج</button>
            <button class="bg-cyan-200 px-4 py-2 text-cyan-700 rounded hover:bg-cyan-900 hover:text-cyan-50">التسجيل</button>
        </div>
    </header>
   
    {{-- VIEW OUTPUT  --}}
    @yield('content')
</body>
</html>