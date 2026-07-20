<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title', 'Anand Digital Services')</title>

<meta name="description" content="Premium Website Development Agency in India">

<meta name="keywords" content="Laravel, Website Development, React, Web Design, Digital Agency">

<meta name="author" content="Anand Digital Services">

@vite(['resources/css/app.css','resources/js/app.js'])

<title>
Anand Digital Services | Website & Software Development Company
</title>


<meta name="description"
content="Anand Digital Services creates premium websites, Laravel applications, ERP solutions and custom software for businesses."
>


<meta name="keywords"
content="Website Development, Laravel Developer, Software Development, ERP Solutions, Gujarat"
>


<meta name="author"
content="Anand Digital Services"
>


<meta name="robots"
content="index, follow"
>


</head>

<body class="bg-slate-950 text-white">

@include('partials.navbar')

<main>

@yield('content')

</main>

@include('partials.footer')


<!-- WhatsApp Floating Button -->

<a href="https://wa.me/91XXXXXXXXXX"
   target="_blank"
   class="fixed bottom-6 right-6 z-50 
   w-14 h-14 rounded-full 
   bg-green-500 text-white 
   flex items-center justify-center 
   text-3xl shadow-xl
   hover:scale-110 transition">

    💬

</a>
</body>
</html>