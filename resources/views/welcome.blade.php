<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ChefGPT</title>
    <style>
        <style>
        .container {
            overflow: hidden;
            position: relative;
            width: 100%;
            margin: 8px 0;
        }

        .scroll-wrapper {
            display: flex;
            width: 100%; /* Double width for seamless looping */
        }

        /* Alternating animation directions */
        .row-1 { animation: scroll-left 20s linear infinite; }
        .row-2 { animation: scroll-right 20s linear infinite; }
        .row-3 { animation: scroll-left 20s linear infinite; }

        @keyframes scroll-left {
            from { transform: translateX(0%); }
            to { transform: translateX(-50%); }
        }

        @keyframes scroll-right {
            from { transform: translateX(-50%); }
            to { transform: translateX(0%); }
        }

        .card {
            flex: 0 0 33.33%;
            width: 33.33%;
            box-sizing: border-box;
            padding: 8px;
        }

        .card-content {
            background-color: #333;
            padding: 16px;
            border-radius: 8px;
            color: white;
            height: 100%;
        }
    </style>
    </style>
</head>
<body class="bg-black font-poppins">
@include('header')

<!-- Hero Section -->
<div class="hero-section bg-black h-auto w-full relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-3 xl:px-0 pt-24 lg:pt-32 pb-16 relative">
        <h1 class="font-semibold text-white text-5xl md:text-6xl max-w-screen-lg">
            <span class="text-[#85CB33]">ChefGPT:</span> Transform your ingredients into culinary masterpieces
        </h1>
        <div class="max-w-4xl">
            <p class="mt-5 text-neutral-400 text-lg">
                ChefGPT is a culinary innovation hub where imagination meets gastronomy, transforming your ingredients into delectable realities. We specialize in turning your conceptual cravings into tangible, AI-powered recipe masterpieces tailored just for you.
            </p>
        </div>
        <button type="button" class="mt-3 py-3 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-2xl border border-transparent bg-neutral-800 text-white hover:bg-neutral-700">
            Start Now!
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="15" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
            </svg>
        </button>
    </div>

</div>
<!-- End Hero -->

<!-- Card Components -->
<div class="container mx-auto p-4">
    <!-- Row 1 - Scroll Left -->
    <div class="container">
        <div class="scroll-wrapper row-1">
            <!-- Duplicated cards for seamless loop -->
            <div class="card"><p class="text-sm card-content">What can I make with chicken breast, potatoes, and carrots?</p></div>
            <div class="card"><p class="text-sm card-content">I have spinach, feta cheese, and cherry tomatoes. What's a good recipe?</p></div>
            <div class="card"><p class="text-sm card-content">How can I use up ripe bananas and oats?</p></div>
            <div class="card"><p class="text-sm card-content">I have eggs, milk, and bread. What's a good breakfast idea?</p></div>
            <!-- Duplicates -->
            <div class="card"><p class="text-sm card-content">What can I make with chicken breast, potatoes, and carrots?</p></div>
            <div class="card"><p class="text-sm card-content">I have spinach, feta cheese, and cherry tomatoes. What's a good recipe?</p></div>
            <div class="card"><p class="text-sm card-content">How can I use up ripe bananas and oats?</p></div>
            <div class="card"><p class="text-sm card-content">I have eggs, milk, and bread. What's a good breakfast idea?</p></div>
        </div>
    </div>

    <!-- Row 2 - Scroll Right -->
    <div class="container">
        <div class="scroll-wrapper row-2">
            <div class="card"><p class="text-sm card-content">What's a quick dinner I can make with ground beef and pasta?</p></div>
            <div class="card"><p class="text-sm card-content">I have a lot of zucchini from my garden. What should I cook?</p></div>
            <div class="card"><p class="text-sm card-content">What can I make with canned tuna, rice, and peas?</p></div>
            <div class="card"><p class="text-sm card-content">I have leftover roasted vegetables. How can I repurpose them?</p></div>
            <!-- Duplicates -->
            <div class="card"><p class="text-sm card-content">What's a quick dinner I can make with ground beef and pasta?</p></div>
            <div class="card"><p class="text-sm card-content">I have a lot of zucchini from my garden. What should I cook?</p></div>
            <div class="card"><p class="text-sm card-content">What can I make with canned tuna, rice, and peas?</p></div>
            <div class="card"><p class="text-sm card-content">I have leftover roasted vegetables. How can I repurpose them?</p></div>
        </div>
    </div>

    <!-- Row 3 - Scroll Left -->
    <div class="container">
        <div class="scroll-wrapper row-3">
            <div class="card"><p class="text-sm card-content">I have eggs, milk, and bread. What's a good breakfast idea?</p></div>
            <div class="card"><p class="text-sm card-content">What's a tasty vegetarian dish I can make with quinoa and black beans?</p></div>
            <div class="card"><p class="text-sm card-content">I have apples and cinnamon. What dessert can I make?</p></div>
            <div class="card"><p class="text-sm card-content">What's a healthy snack I can make with Greek yogurt and berries?</p></div>
            <!-- Duplicates -->
            <div class="card"><p class="text-sm card-content">I have eggs, milk, and bread. What's a good breakfast idea?</p></div>
            <div class="card"><p class="text-sm card-content">What's a tasty vegetarian dish I can make with quinoa and black beans?</p></div>
            <div class="card"><p class="text-sm card-content">I have apples and cinnamon. What dessert can I make?</p></div>
            <div class="card"><p class="text-sm card-content">What's a healthy snack I can make with Greek yogurt and berries?</p></div>
        </div>
    </div>
</div>
<!-- End Card -->



<!-- Hero 2 Section -->
<div class="w-full flex flex-col items-center mt-24">
    <h2 class="text-white text-3xl text-center">Brainstorms, crafts, and explores culinary ideas with you</h2>
    <a href="#" class="text-white flex items-center mt-8 text-sm hover:text-gray-400 cursor-pointer">
        Learn More about ChefGPT!
        <svg class="w-4 h-4 text-gray-800 dark:text-white ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
        </svg>
    </a>
    <div class="image-section flex justify-center flex-col items-center">
        <img class="w-10/12 h-auto rounded-xl mb-32 mt-24" src="{{ asset('/images/1.png') }}" alt="Image 1" />
        <h2 class="text-white text-3xl text-center">Learn new recipes. Dive into a hobby. Cook like an amateur chef.</h2>
        <img class="w-10/12 h-auto rounded-xl mb-14 mt-24" src="{{ asset('/images/1.png') }}" alt="Image 2" />
    </div>
</div>
<!-- End Hero 2 -->

<!-- Pricing -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Find the right plan for your team</h2>
        <p class="mt-1 text-gray-600 dark:text-neutral-400">Pay as you go service, cancel anytime.</p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="relative before:absolute before:inset-0 before:-z-[1] before:bg-[radial-gradient(closest-side,theme(colors.gray.300),transparent)] dark:before:bg-[radial-gradient(closest-side,theme(colors.neutral.600),transparent)] mt-12">
        <div class="grid gap-px sm:grid-cols-2 lg:grid-cols-4 lg:items-center">
            <!-- Card -->
            <div class="flex flex-col h-full text-center">
                <div class="bg-white pt-8 pb-5 px-8 dark:bg-neutral-900">
                    <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Free</h4>
                </div>

                <div class="h-full bg-white lg:mt-px lg:py-5 px-8 dark:bg-neutral-900">
          <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">
            Free
          </span>
                </div>

                <div class="bg-white flex justify-center lg:mt-px pt-7 px-8 dark:bg-neutral-900">
                    <ul class="space-y-2.5 text-center text-sm">
                        <li class="text-gray-800 dark:text-neutral-400">
                            1 user
                        </li>

                        <li class="text-gray-800 dark:text-neutral-400">
                            Plan features
                        </li>

                        <li class="text-gray-800 dark:text-neutral-400">
                            Product support
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-8 px-8 dark:bg-neutral-900">
                    <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400 dark:focus:text-blue-400 dark:focus:border-blue-400" href="#">
                        Sign up
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col h-full text-center">
                <div class="bg-white pt-8 pb-5 px-8 dark:bg-neutral-900">
                    <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Startup</h4>
                </div>

                <div class="h-full bg-white lg:mt-px lg:py-5 px-8 dark:bg-neutral-900">
          <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">
            <span class="font-bold text-2xl -me-2">₱</span>
            10
          </span>
                </div>

                <div class="bg-white flex justify-center lg:mt-px pt-7 px-8 dark:bg-neutral-900">
                    <ul class="space-y-2.5 text-center text-sm">
                        <li class="text-gray-800 dark:text-neutral-400">
                            2 users
                        </li>

                        <li class="text-gray-800 dark:text-neutral-400">
                            Plan features
                        </li>

                        <li class="text-gray-800 dark:text-neutral-400">
                            Product support
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-8 px-8 dark:bg-neutral-900">
                    <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400 dark:focus:text-blue-400 dark:focus:border-blue-400" href="#">
                        Sign up
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col h-full text-center">
                <div class="bg-white pt-8 pb-5 px-8 dark:bg-neutral-900">
                    <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Team</h4>
                </div>

                <div class="h-full bg-white lg:mt-px lg:py-5 px-8 dark:bg-neutral-900">
          <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">
            <span class="font-bold text-2xl -me-2">₱</span>
            29
          </span>
                </div>

                <div class="bg-white flex justify-center lg:mt-px pt-7 px-8 dark:bg-neutral-900">
                    <ul class="space-y-2.5 text-center text-sm">
                        <li class="text-gray-800 dark:text-neutral-400">
                            5 users
                        </li>

                        <li class="text-gray-800 dark:text-neutral-400">
                            Plan features
                        </li>

                        <li class="text-gray-800 dark:text-neutral-400">
                            Product support
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-8 px-8 dark:bg-neutral-900">
                    <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400 dark:focus:text-blue-400 dark:focus:border-blue-400" href="#">
                        Sign up
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col h-full text-center">
                <div class="bg-white pt-8 pb-5 px-8 dark:bg-neutral-900">
                    <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">Enterprise</h4>
                </div>

                <div class="h-full bg-white lg:mt-px lg:py-5 px-8 dark:bg-neutral-900">
          <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">
            <span class="font-bold text-2xl -me-2">₱</span>
            59
          </span>
                </div>

                <div class="bg-white flex justify-center lg:mt-px pt-7 px-8 dark:bg-neutral-900">
                    <ul class="space-y-2.5 text-center text-sm">
                        <li class="text-gray-800 dark:text-neutral-400">
                            10 users
                        </li>

                        <li class="text-gray-800 dark:text-neutral-400">
                            Plan features
                        </li>

                        <li class="text-gray-800 dark:text-neutral-400">
                            Product support
                        </li>
                    </ul>
                </div>

                <div class="bg-white py-8 px-8 dark:bg-neutral-900">
                    <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-600 text-blue-600 hover:border-blue-500 hover:text-blue-500 focus:outline-none focus:border-blue-500 focus:text-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-blue-500 dark:text-blue-500 dark:hover:text-blue-400 dark:hover:border-blue-400 dark:focus:text-blue-400 dark:focus:border-blue-400" href="#">
                        Sign up
                    </a>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
    <!-- End Grid -->
</div>
<!-- End Pricing -->

<!-- Testimonials -->
<div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Blockquote -->
    <blockquote class="text-center lg:mx-auto lg:w-3/5">
        <svg class="mx-auto w-20 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9925 2.01655C15.927 2.11481 15.861 2.23414 15.7998 2.34477L15.4773 2.92766L12.6497 4.31736C12.5735 4.3548 12.5266 4.37783 12.4819 4.40082C10.856 5.2357 9.71047 6.80449 9.36562 8.63376C9.35611 8.68419 9.34708 8.73684 9.33217 8.82378L9.33094 8.83097C9.31501 8.92385 9.30798 8.96477 9.30076 9.00426C9.03456 10.4599 8.3439 11.7884 7.32835 12.8102C7.30083 12.8379 7.27207 12.8662 7.20619 12.9309L6.4018 13.7219C5.89777 14.2174 5.49146 14.617 5.18768 14.9606C4.87759 15.3115 4.62758 15.6545 4.47734 16.049C4.07618 17.1023 4.21118 18.2961 4.84068 19.2292C5.07679 19.5791 5.39871 19.8547 5.7799 20.1229C6.15313 20.3854 6.63864 20.6779 7.24012 21.0402L7.95314 21.4697C8.55438 21.8319 9.03997 22.1244 9.44477 22.3306C9.85683 22.5404 10.2515 22.6965 10.6702 22.7359C11.7877 22.8408 12.8691 22.3508 13.5501 21.452C13.8038 21.1172 13.9627 20.7204 14.0978 20.2682C14.2308 19.8231 14.359 19.2574 14.5185 18.5532L14.7726 17.432C14.7934 17.3402 14.8025 17.2998 14.8118 17.2608C15.1543 15.8233 15.9137 14.5374 16.9809 13.5762C17.0098 13.5501 17.04 13.5235 17.1092 13.4626L17.1147 13.4578C17.1793 13.401 17.2187 13.3662 17.2562 13.3321C18.614 12.095 19.3318 10.2778 19.2136 8.41833C19.2103 8.36709 19.206 8.31379 19.199 8.2258L18.9373 4.95872L19.2924 4.31688C19.3496 4.21362 19.4119 4.10111 19.4581 3.99909C19.5106 3.88316 19.5692 3.72518 19.5779 3.53239C19.5895 3.27496 19.5213 3.02022 19.3826 2.80305C19.2787 2.64041 19.149 2.53284 19.0456 2.45865C18.9547 2.39336 18.8445 2.32701 18.7434 2.26613L17.928 1.77495C17.8197 1.70969 17.7029 1.63931 17.5971 1.58694C17.4778 1.52791 17.3127 1.46026 17.109 1.44804C16.8392 1.43186 16.5715 1.50355 16.3459 1.65237C16.1756 1.7647 16.0663 1.90581 15.9925 2.01655ZM15.983 4.35048L17.4548 5.23707L17.7032 8.33815C17.7083 8.40209 17.7115 8.44144 17.7137 8.47153L16.6585 8.82323C16.0296 9.03287 15.3373 8.9094 14.8196 8.49527C13.7675 7.65357 12.322 7.50043 11.1169 8.103L11.0572 8.13283C11.4489 7.08929 12.1998 6.23186 13.1671 5.73518C13.1987 5.71894 13.2331 5.70201 13.3182 5.66017L15.983 4.35048Z" fill="#AAFF00"></path> </g></svg>

        <div class="mt-6 lg:mt-10">
            <p class="relative text-xl sm:text-2xl md:text-3xl md:leading-normal font-medium text-gray-800">
                <svg class="absolute top-0 start-0 transform -translate-x-8 -translate-y-8 size-16 text-gray-200 sm:h-24 sm:w-24 dark:text-neutral-700" width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M7.18079 9.25611C7.18079 10.0101 6.93759 10.6211 6.45119 11.0891C5.96479 11.5311 5.35039 11.7521 4.60799 11.7521C3.71199 11.7521 2.96958 11.4531 2.38078 10.8551C1.81758 10.2571 1.53598 9.39911 1.53598 8.28111C1.53598 7.08511 1.86878 5.91511 2.53438 4.77111C3.22559 3.60111 4.18559 2.67811 5.41439 2.00211L6.29759 3.36711C5.63199 3.83511 5.09439 4.35511 4.68479 4.92711C4.30079 5.49911 4.04479 6.16211 3.91679 6.91611C4.14719 6.81211 4.41599 6.76011 4.72319 6.76011C5.43999 6.76011 6.02879 6.99411 6.48959 7.46211C6.95039 7.93011 7.18079 8.52811 7.18079 9.25611ZM14.2464 9.25611C14.2464 10.0101 14.0032 10.6211 13.5168 11.0891C13.0304 11.5311 12.416 11.7521 11.6736 11.7521C10.7776 11.7521 10.0352 11.4531 9.44639 10.8551C8.88319 10.2571 8.60159 9.39911 8.60159 8.28111C8.60159 7.08511 8.93439 5.91511 9.59999 4.77111C10.2912 3.60111 11.2512 2.67811 12.48 2.00211L13.3632 3.36711C12.6976 3.83511 12.16 4.35511 11.7504 4.92711C11.3664 5.49911 11.1104 6.16211 10.9824 6.91611C11.2128 6.81211 11.4816 6.76011 11.7888 6.76011C12.5056 6.76011 13.0944 6.99411 13.5552 7.46211C14.016 7.93011 14.2464 8.52811 14.2464 9.25611Z" fill="currentColor"/>
                </svg>
                <span class="relative z-10 italic text-gray-800 dark:text-neutral-200">Ayaw ko yung lasa ng C2 na kulay green Ayos lang naman yung lasa ng kulay dilaw Nung tinikman ko yung color green 'Yoko na ulitin Pag bibili ako sa labas Alam ko na yung sasabihin</span>
            </p>
        </div>

        <footer class="mt-6">
            <div class="font-semibold text-gray-800 dark:text-neutral-200">zaniel</div>
            <div class="text-sm text-gray-500 dark:text-neutral-500">malay ko | soundcloud</div>
        </footer>
    </blockquote>
    <!-- End Blockquote -->
</div>
<!-- End Testimonials -->

@include('footer')
<script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>
