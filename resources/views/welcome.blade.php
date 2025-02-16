<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ChefGPT</title>
</head>
<body class="bg-black font-poppins">
@include('header')

{{--Hero Section--}}

<div class="bg-black h-screen w-full">
    <div class="max-w-5xl mx-auto px-4 xl:px-0 pt-24 lg:pt-32 pb-24">
        <h1 class="font-semibold text-white text-5xl md:text-6xl max-w-screen-lg">
            <span class="text-[#85CB33] ">ChefGPT:</span> Transform your ingredients into culinary masterpieces
        </h1>
        <div class="max-w-4xl">
            <p class="mt-5 text-neutral-400 text-lg">
                ChefGPT is a culinary innovation hub where imagination meets gastronomy, transforming your ingredients into delectable realities. We specialize in turning your conceptual cravings into tangible, AI-powered recipe masterpieces tailored just for you.            </p>
        </div>
    </div>
</div>
<!-- End Hero -->



<script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>
