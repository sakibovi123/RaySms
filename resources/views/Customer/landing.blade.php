<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS THUNDER</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- favicon link -->
    <link rel="shortcut icon" href="images/favicon.ico" type="images/x-icon">
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ionicons cdn -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- alpine js cdn -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- style css -->
    <style type="text/tailwindcss">
        body{
    font-family: 'Inter', sans-serif;
}
    </style>
</head>

<body class="big-wrapper dark white-color">
    <!-- ==== header ==== -->
    <header x-data="{navbarOpen: false}" class="absolute sticky left-0 top-0 z-50 white-color  w-full backdrop-blur">
        <div class="mx-auto h-[90px] max-w-7xl px-8 md:px-6">
            <div class="relative flex h-full items-center justify-between border-b border-slate-500/10">
                <!-- logo -->
                <div class="w-[18rem] max-w-full">
                    <a href="/">
                        <img src="assets/logo.png" alt="logo" class="w-full">
                    </a>
                </div>

                <!-- menu -->
                <div class="flex w-full items-center justify-between">
                    <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                        class="absolute right-0 top-[90px] w-full max-w-[350px]  rounded-lg border border-blue-200 bg-white py-5 px-6 shadow-lg shadow-blue-400/5 transition-all lg:static lg:block lg:max-w-full lg:border-none lg:shadow-none lg:bg-transparent lg:px-0 lg:py-0">
                        <ul class="flex flex-col justify-center gap-8 lg:flex-row">
                            <li>
                                <a href="/"
                                    class="text-lg font-medium text-[#002F42] duration-200 hover:text-[#00C1C6] lg:text-base">Home</a>
                            </li>
                            <li>
                                <a href="features.html"
                                    class="text-lg font-medium text-[#002F42] duration-200 hover:text-[#00C1C6] lg:text-base">Features</a>
                            </li>
                            <li>
                                <a href="service.html"
                                    class="text-lg font-medium text-[#002F42] duration-200 hover:text-[#00C1C6] lg:text-base">Services</a>
                            </li>
                            <li>
                                <a href="pricing.html"
                                    class="text-lg font-medium text-[#002F42] text-slate-700 duration-200 hover:text-[#00C1C6] lg:text-base">Pricing</a>
                            </li>
                            <li>
                                <a href="blog.html"
                                    class="text-lg font-medium text-[#002F42] duration-200 hover:text-[#00C1C6] lg:text-base">Blog</a>
                            </li>
                            <li>
                                <a href="contact.html"
                                    class="text-lg font-medium text-[#002F42] duration-200 hover:text-[#00C1C6] lg:text-base">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- menu btn -->
                <div class="flex">
                    <a href="Signin.html"
                        class="mr-10 hidden rounded-md bg-[#002F42] px-5 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 duration-200 hover:bg-[#00C1C6] sm:block lg:mr-0">LogIn</a>
                    <a href="Signin.html"
                        class="mr-10 hidden rounded-md border-solid border-2 text-[#002F42] border-[#002F42] hover:border-[#00C1C6] px-3 py-2.5 font-semibold shadow-md shadow-blue-500/20 duration-200 hover:bg-[#00C1C6] hover:text-white sm:block lg:mr-0 ml-4">SignUp</a>
                    <!-- <img src="assets/moon.png" alt="moon img" id="icon"> -->

                    <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                        id="navbarToggler" class="block lg:hidden">
                        <ion-icon name="menu-outline" class="text-4xl text-blue-500"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- ==== End header ==== -->

    <!-- ==== hero ==== -->

    <section class="relative bg-img white-color lg:py-16 lg:pt-[30px]  ">
        <div class="mx-auto max-w-7xl px-8 md:px-6 text-center pb-16 pt-10">
            <div class="max-w-[850px] mx-auto">
                <h2 class="sm:text-5xl text-[#002F42] text-2xl font-semibold mb-3 !leading-normal mx-auto">Reach Your
                    Customers Anytime With Our High Standard SMS
                    platform</h2>

                <p class="lg:text-lg">Welcome to SMS Thunder, the best SMS platform. Leading SMS messaging
                    service provider offering two-way SMS communication services.</p>
            </div>

            <div class="my-10">
                <a href="Signin.html">
                    <button
                        class="w-full rounded-md bg-[#002F42] px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-[#00C1C6] duration-200 sm:w-auto">Get
                        Started</button>
                </a>
                <a href="contact.html">
                    <button
                        class="mt-4 box-border w-full rounded-md border-solid border-2 border-[#002F42] px-8 py-2.5 font-semibold text-[#002F42] shadow-md shadow-blue-500/10 duration-200 sm:ml-4 sm:mt-0 sm:w-auto">Contact
                        Us</button>
                </a>
            </div>
        </div>
    </section>

    <!-- ==== End hero ==== -->
    <!-- image -->
    <div class="relative lg:mt-[-100px] pt-0 lg:pt-0  mb-10">
        <img src="https://i.ibb.co/0qR2B9c/dashboardpng.png" alt="hero img" class="mx-auto">
    </div>
    <!-- image -->
    <!-- <section class="lg:mt-[-80px] relative text-center pb-16 ">
        <div class=" mx-auto max-w-7xl px-8 md:px-6">
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-5 lg:gap-5">
                
                <div class="shadow-lg rounded-xl bg-white">
                    <div class=" pb-5 ">
                        <h4 class="bg-[#2D2D2D] text-white py-2 mb-5">Best for Scalability</h4>
                        <img src="assets/service/im1.webp" alt="" class="mx-auto w-32 ">
                        <p class="mb-3"><a href="" class="hover:text-blue-500 hover:underline">textedly</a></p>
                        <button
                            class="w-full rounded-md bg-[#4a63e2] px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 sm:w-auto my-2">Learn
                            More</button>
                            <div class="px-1 mt-3">
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>2 pricing plans</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>High monthly message</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>Highly competitive prices</p>
                                </div>
                            </div>
                        
                    </div>
                </div>
               
                <div class="shadow-lg rounded-xl bg-white">
                    <div class=" pb-5 ">
                        <h4 class="bg-[#2D2D2D] text-white py-2 mb-5">Best for Advanced Features</h4>
                        <img src="assets/service/im2.webp" alt="" class="mx-auto w-32 pt-3">
                        <p class="mb-3"><a href="" class="hover:text-blue-500 hover:underline">textedly</a></p>
                        <button
                            class="w-full rounded-md bg-[#4a63e2] px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 sm:w-auto my-2">Learn
                            More</button>
                            <div class="px-1 mt-3">
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>2 pricing plans</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>High monthly message</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>Highly competitive prices</p>
                                </div>
                            </div>
                        
                    </div>
                </div>
                
                <div class="shadow-lg rounded-xl bg-white">
                    <div class=" pb-5 ">
                        <h4 class="bg-[#2D2D2D] text-white py-2 mb-5">Best for Customization</h4>
                        <img src="assets/service/im3.webp" alt="" class="mx-auto w-32 pt-3">
                        <p class="mb-3"><a href="" class="hover:text-blue-500 hover:underline">textedly</a></p>
                        <button
                            class="w-full rounded-md bg-[#4a63e2] px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 sm:w-auto my-2">Learn
                            More</button>
                            <div class="px-1 mt-3">
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>2 pricing plans</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>High monthly message</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>Highly competitive prices</p>
                                </div>
                            </div>
                        
                    </div>
                </div>
                
                <div class="shadow-lg rounded-xl bg-white">
                    <div class=" pb-5 ">
                        <h4 class="bg-[#2D2D2D] text-white py-2 mb-5">Best service Management</h4>
                        <img src="assets/service/im4.webp" alt="" class="mx-auto w-32 pt-3">
                        <p class="mb-3"><a href="" class="hover:text-blue-500 hover:underline">textedly</a></p>
                        <button
                            class="w-full rounded-md bg-[#4a63e2] px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 sm:w-auto my-2">Learn
                            More</button>
                            <div class="px-1 mt-3">
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>2 pricing plans</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>High monthly message</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>Highly competitive prices</p>
                                </div>
                            </div>
                        
                    </div>
                </div>
                
                <div class="shadow-lg rounded-xl bg-white">
                    <div class=" pb-5 ">
                        <h4 class="bg-[#2D2D2D] text-white py-2 mb-5">Best for Service Providers</h4>
                        <img src="assets/service/im3.webp" alt="" class="mx-auto w-32 pt-3">
                        <p class="mb-3"><a href="" class="hover:text-blue-500 hover:underline">textedly</a></p>
                        <button
                            class="w-full rounded-md bg-[#4a63e2] px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 sm:w-auto my-2">Learn
                            More</button>
                            <div class="px-1 mt-3">
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>2 pricing plans</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>High monthly message</p>
                                </div>
                                <div class="flex gap-1 mb-1">
                                    <ion-icon name="checkmark-circle" class="text-2xl text-[#4a63e2]"></ion-icon>
                                    <p>Highly competitive prices</p>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ==== feature ==== -->
    <section class="pb-16 bg-[#e9eef3] bg-opacity-50 pt-10">
        <div class="mx-auto max-w-7xl px-8 md:px-6">
            <div class="mb-5 sm:mb-10">
                <!-- <span class="font-medium text-blue-500">Our Features</span> -->
                <h1 class="text-2xl text-[#002F42] font-bold sm:text-5xl text-center !leading-normal">How Your Business
                    Can
                    Use Text
                    Message Marketing Services</h1>
                <p class="text-center max-w-[800px] mx-auto mt-2">Our texting service isn't just convenient for your
                    customers, it's good for business. Discover how SMS marketing and two-way messaging give you a
                    competitive edge.</p>
            </div>
            <!-- features img -->
            <div class="md:flex md:justify-between md:gap-6 xl:gap-10">
                <div class="mb-5 max-h-[600px] overflow-hidden rounded-lg md:mb-0 md:w-5/12">
                    <img src="https://i.ibb.co/BgH81K7/marketing-service.png" alt="features img"
                        class="h-full scale-125 sm:w-full sm:object-cover">
                </div>
                <div class="md:w-7/12">
                    <div class="mb-16 flex flex-col">
                        <div class="flex gap-5 items-center space-y-2">
                            <div
                                class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full text-[#002F42] border border-[#002F42]">
                                <ion-icon name="checkmark-outline"></ion-icon>
                            </div>
                            <div>
                                <h3 class="text-md font-bold text-[#002F42] sm:text-lg">User friendly</h3>
                                <p class="mb-3">Web console built for Marketers and everyone. It requires no
                                    coding skill!</p>
                            </div>

                        </div>
                        <div class="flex gap-5 space-y-2 items-center">
                            <div
                                class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full text-[#002F42] border border-[#002F42]">
                                <ion-icon name="checkmark-outline"></ion-icon>
                            </div>
                            <div>
                                <h3 class="text-md font-bold text-[#002F42] sm:text-lg">Dashboard analytics</h3>
                                <p class="">where you can see the status of your SMS sent and all the
                                    reports needed.</p>
                            </div>

                        </div>
                        <div class="flex gap-5 items-center space-y-2 mb-8">
                            <div
                                class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full text-[#002F42] border border-[#002F42]">
                                <ion-icon name="checkmark-outline"></ion-icon>
                            </div>
                            <div>
                                <h3 class="text-md font-bold text-[#002F42] sm:text-lg">Worldwide support</h3>
                                <p class="">Sending to the whole world using our Web console. Of course, our
                                    support team is ready to support you.</p>
                            </div>

                        </div>
                        <a href="login.html">
                            <button
                                class="w-full rounded-md bg-[#002F42] px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-[#00C1C6] duration-200 md:w-max">Try
                                Now</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-10">
                <div class="flex flex-col items-center justify-center rounded-xl bg-white px-4 py-8 shadow-lg">
                    <ion-icon name="chatbox-outline" class="text-[55px] text-[#002F42]"></ion-icon>
                    <!-- <img class="mb-3 w-16" src="assets/WORLDWIDE.png" alt="icon"> -->
                    <h3 class="text-lg font-bold text-slate-600 mt-2">Send SMS and MMS Campaigns</h3>
                    <a href="service.html" class="text-sm text-slate-500 text-center mt-2">Send a text message to a
                        group of contacts. Include photos, personalize your texts, and track who clicked your links.</a>
                </div>
                <div class="flex flex-col items-center justify-centr rounded-xl bg-white px-4 py-8 shadow-lg">
                    <ion-icon name="chatbubbles-outline" class="text-[55px] text-[#002F42]"></ion-icon>

                    <h3 class="text-lg font-bold text-slate-600 mt-2">Have Two-Way Conversations</h3>
                    <a href="service.html" class="text-sm text-slate-500 text-center mt-2">Text in real-time with
                        customers. Get a new number or text-enable your existing one. (Without affecting your voice
                        service.</a>
                </div>
                <div class="flex flex-col items-center justify-centr rounded-xl bg-white px-4 py-8 shadow-lg">
                    <ion-icon name="list-outline" class="text-[55px] text-[#002F42]"></ion-icon>
                    <!-- <img class="mb-3 w-16" src="assets/SUPPORT 24_7.png" alt="icon"> -->
                    <h3 class="text-lg font-bold text-slate-600 mt-2">Build a List or Import Yours</h3>
                    <a href="service.html" class="text-sm text-slate-500 text-center mt-2">Add your existing contacts
                        and use features like text-for-info to rapidly collect phone numbers.</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== End feature ==== -->

    <!-- ==== about ==== -->

    <section class="py-16 white-color ">
        <div class="mx-auto max-w-7xl px-8 md:px-6">
            <div class="mb-5 sm:mb-5">
                <!-- <span class="font-medium text-blue-500">About Us</span> -->
                <h1 class="text-2xl font-bold text-[#002F42] sm:text-5xl">SMS Gateway <span
                        class="combined">Features</span></h1>
            </div>
            <p class="max-w-[600px] mb-6">Bigly only charges for telecommunication costs. Pay as you go and
                forget about long terms contracts.</p>
            <div class="md:flex md:justify-between md:gap-6">
                <div class="md:w-6/12">
                    <!-- heading text -->

                    <ul>
                        <li class="mb-6 flex items-center">
                            <div
                                class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full text-[#002F42] border border-[#002F42]">
                                <ion-icon name="mail-unread-outline"></ion-icon>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-md text-[#002F42] font-bold sm:text-lg">Bulk SMS & SMS Marketing</h4>
                                <p class=" max-w-md font-medium ">Send an SMS broadcast to your contact
                                    list with merge, tracking and other powerful features</p>
                            </div>

                        </li>
                        <li class="mb-6 flex items-center">
                            <div
                                class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full text-[#002F42] border border-[#002F42]">
                                <ion-icon name="notifications-outline"></ion-icon>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-md text-[#002F42] font-bold sm:text-lg">Notification SMS</h4>
                                <p class=" max-w-md font-medium ">Send SMS to your customers when they
                                    purchase, make an order or when their Pizza is ready!</p>
                            </div>

                        </li>
                        <li class="mb-6 flex items-center">
                            <div
                                class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full text-[#002F42] border border-[#002F42]">
                                <ion-icon name="alarm-outline"></ion-icon>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-md text-[#002F42] font-bold sm:text-lg">Schedule Reminders</h4>
                                <p class=" max-w-md font-medium ">Schedule SMS for the future and send
                                    reminders to your users to avoid no-shows</p>
                            </div>
                        </li>
                        <li class="mb-6 flex items-center">
                            <div
                                class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full text-[#002F42] border border-[#002F42]">
                                <ion-icon name="cube-outline"></ion-icon>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-md text-[#002F42] font-bold sm:text-lg">Customizable Automated message
                                    system</h4>
                                <p class=" max-w-md font-medium ">With automated text messages, you can send the right
                                    message at the right time to your entire audience.</p>
                            </div>
                        </li>
                        <li class="mb-6 flex items-center">
                            <div
                                class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full text-[#002F42] border border-[#002F42]">
                                <ion-icon name="bookmarks-outline"></ion-icon>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-md text-[#002F42] font-bold sm:text-lg">Surveys & Feedback Requests</h4>
                                <p class=" max-w-md font-medium">Quickly run SMS Polls, Survey and
                                    request feedback with 2-way SMS</p>
                            </div>
                        </li>
                    </ul>
                    <!-- <button
                        class="w-full rounded-md bg-blue-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 md:w-max">Get
                        Started</button> -->
                </div>

                <!-- about img -->
                <div class="mt-8 flex justify-center md:mt-0 md:w-6/12">
                    <img src="https://i.ibb.co/3s9NfvG/sms-gateway.png" alt="about img"
                        class="max-h-[500px] md:max-h-max">
                </div>
            </div>
        </div>
    </section>
    <!-- ==== End about ==== -->

    <!-- ==== service ==== -->
    <section class="py-16 bg-[#e9eef3] bg-opacity-50">
        <div class="mx-auto max-w-7xl px-8 md:px-6">
            <!-- heading text -->
            <div class="mb-10 text-center">
                <!-- <span class="font-medium text-blue-500">Our Services</span> -->
                <h1 class="text-2xl font-bold text-[#002F42] sm:text-5xl">Trusted by businesses worldwide</h1>
                <p class="mx-auto max-w-2 mt-2">Send messages to your customers in their preferred channel
                    through SMS</p>
            </div>

            <!-- box wrapper -->
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 xl:gap-8">
                <div
                    class="group flex cursor-pointer flex-col items-center rounded-xl px-5 py-8 duration-200 hover:bg-[#002F42]">
                    <ion-icon name="headset-outline"
                        class="text-[55px] text-[#002F42] duration-200 group-hover:text-white"></ion-icon>
                    <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">
                        Privacy & Regulatory Compliance</h4>
                    <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-white">We will help
                        you stay compliant to different privacy laws and regulations like GDPR with our built in
                        features.</p>
                </div>
                <div
                    class="group flex cursor-pointer flex-col items-center rounded-xl px-5 py-8  duration-200 bg-[#002F42]">
                    <ion-icon name="analytics-outline" class="text-[55px] duration-200 text-white"></ion-icon>
                    <h4 class="mt-3 mb-1 text-[17px] font-semibold duration-200 text-white">ShortLink Tracking</h4>
                    <p class="text-center text-sm duration-200 text-white">Gather meaningful analytics and activity
                        metrics by tracking clicks on your links.
                    </p>
                </div>
                <div
                    class="group flex cursor-pointer flex-col items-center rounded-xl px-5 py-8 duration-200 hover:bg-[#002F42]">
                    <ion-icon name="globe-outline"
                        class="text-[55px] text-[#002F42] duration-200 group-hover:text-white"></ion-icon>
                    <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">
                        Global Delivery</h4>
                    <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-white">Improve
                        Delivery rates by relying on our direct connections with global carriers for time sensitive
                        delivery.</p>
                </div>
                <div
                    class="group flex cursor-pointer flex-col items-center rounded-xl  px-5 py-8  duration-200 hover:bg-[#002F42]">
                    <ion-icon name="bag-handle-outline"
                        class="text-[55px] text-[#002F42] duration-200 group-hover:text-white"></ion-icon>
                    <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">
                        Security & Transparency</h4>
                    <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-white">We invest in
                        Security & Certifications and we are big believers in Transparency providing detailed reporting
                        about any service you buy from us.</p>
                </div>
                <div
                    class="group flex cursor-pointer flex-col items-center rounded-xl  px-5 py-8  duration-200 hover:bg-[#002F42]">
                    <ion-icon name="layers-outline"
                        class="text-[55px] text-[#002F42] duration-200 group-hover:text-white"></ion-icon>
                    <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">
                        Personalisation & Dynamic Fields</h4>
                    <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-white">Our Powerful
                        Message Editor offers up to 5 dynamic fields to personalise and engage your audience, send
                        meaningful custom reminders and more.</p>
                </div>
                <div
                    class="group flex cursor-pointer flex-col items-center rounded-xl  px-5 py-8  duration-200 hover:bg-[#002F42]">
                    <ion-icon name="document-attach-outline"
                        class="text-[55px] text-[#002F42] duration-200 group-hover:text-white"></ion-icon>
                    <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">
                        Fair Price Promise</h4>
                    <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-white">If you get a
                        lower price elsewhere for an apple to apple comparison in features and service we will try to
                        match it so that you never pay more than you should.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== End service ==== -->

    <!-- ==== FAQ ==== -->
    <section class="py-16 white-color ">
        <div class="mx-auto max-w-7xl px-8 md:px-6">
            <!-- heading text -->
            <div class="mb-5 sm:mb-10">
                <!-- <span class="font-medium text-blue-500">Our FAQ</span> -->
                <h1 class="text-2xl text-[#002F42] font-bold sm:text-5xl text-center">Frequently Asked Questions</h1>
                <!-- wrapper -->
                <!-- <div class="md:flex md:justify-between md:gap-6"> -->
                <!-- <div class="mb-8 flex justify-center md:mb-0 md:w-5/12">
                        <img src="assets/Frequently Asked Questions.png" alt="faq img"
                            class="max-h-[500px] md:max-h-max">
                    </div> -->

                <div class="md:w-8/12 mt-10 mx-auto">
                    <div class="" x-data="{selected:1}">
                        <ul>
                            <li class="relative mb-5">
                                <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left"
                                    @click="selected !==1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-medium text-slate-600">How Many Characters Can I Send per
                                            SMS?</h4>
                                        <ion-icon name="chevron-down-circle-outline"
                                            class="w-8 text-lg text-[#00C1C6]"></ion-icon>
                                    </div>
                                </button>

                                <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-70/30 transition-all duration-500"
                                    x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p class="text-slate-500">SMS.to supports the standard 160 characters for a
                                            single SMS part. And up to 70 characters if using Unicode. This standard
                                            length includes spaces and special characters in length. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative mb-5">
                                <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left"
                                    @click="selected !==2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-medium text-slate-600">Long Codes vs. Short Codes</h4>
                                        <ion-icon name="chevron-down-circle-outline"
                                            class="w-8 text-lg text-[#00C1C6]"></ion-icon>
                                    </div>
                                </button>

                                <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500"
                                    x-ref="container2"
                                    x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p class="text-slate-500">SMS.to platform supports both Long Codes and Short
                                            Codes. We also provide an option to connect a toll free number on our
                                            platform.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative mb-5">
                                <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left"
                                    @click="selected !==3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-medium text-slate-600">How to Check SMS Logs & Status?</h4>
                                        <ion-icon name="chevron-down-circle-outline"
                                            class="w-8 text-lg text-[#00C1C6]"></ion-icon>
                                    </div>
                                </button>

                                <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500"
                                    x-ref="container3"
                                    x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p class="text-slate-500">The campaign log will show all messages sent via
                                            web and also include messages sent via our API's Campaign endpoint in an
                                            aggregated view.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative mb-5">
                                <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left"
                                    @click="selected !==4 ? selected = 4 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-medium text-slate-600">How many messages can be delivered at
                                            what speed?</h4>
                                        <ion-icon name="chevron-down-circle-outline"
                                            class="w-8 text-lg text-[#00C1C6]"></ion-icon>
                                    </div>
                                </button>

                                <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500"
                                    x-ref="container4"
                                    x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p class="text-slate-500">We are constantly improving our system and scaling
                                            our infrastructure dynamically based on the current consumption of our
                                            customer base.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- ==== End FAQ ==== -->

    <!-- ==== Portfolio ==== -->
    <!-- <section class="py-16">
        <div class="mx-auto max-w-7xl px-8 md:px-6"> -->
    <!-- heading text -->
    <!-- <div class="mb-10 text-center"> -->
    <!-- <span class="font-medium text-blue-500">Our Portfolio</span> -->
    <!-- <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Our Recent Works</h1>
                <p class="mx-auto max-w-2 mt-2 text-slate-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Delectus amet sint optio?</p>
            </div> -->
    <!-- wrapper -->
    <!-- <div class="flex flex-col gap-5"> -->
    <!-- col-1 -->
    <!-- <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-4">
                    <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                        <img src="assets/p-1.png" alt="portfolio img"
                            class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">

                        <div
                            class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                            <p class="text-sm font-semibold text-white">Type your portfolio details <span
                                    class="text-xs text-slate-300 block">12 August 2025</span></p>
                            <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                        </div>
                    </div>
                    <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                        <img src="assets/p-2.png" alt="portfolio img"
                            class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">

                        <div
                            class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                            <p class="text-sm font-semibold text-white">Type your portfolio details <span
                                    class="text-xs text-slate-300 block">12 August 2025</span></p>
                            <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                        </div>
                    </div>
                    <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 sm:col-span-2">
                        <img src="assets/p-3.png" alt="portfolio img"
                            class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">

                        <div
                            class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                            <p class="text-sm font-semibold text-white">Type your portfolio details <span
                                    class="text-xs text-slate-300 block">12 August 2025</span></p>
                            <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                        </div>
                    </div>
                </div> -->
    <!--End col-1 -->
    <!-- col-2 -->
    <!-- <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3">
                    <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 md:col-span-2">
                        <img src="assets/p-4.png" alt="portfolio img"
                            class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">

                        <div
                            class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                            <p class="text-sm font-semibold text-white">Type your portfolio details <span
                                    class="text-xs text-slate-300 block">12 August 2025</span></p>
                            <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                        </div>
                    </div>
                    <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                        <img src="assets/p-5.png" alt="portfolio img"
                            class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">

                        <div
                            class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                            <p class="text-sm font-semibold text-white">Type your portfolio details <span
                                    class="text-xs text-slate-300 block">12 August 2025</span></p>
                            <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                        </div>
                    </div>
                </div> -->
    <!--End col-2 -->
    <!-- col-3 -->
    <!-- <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-4">
                    <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                        <img src="assets/p-6.png" alt="portfolio img"
                            class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">

                        <div
                            class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                            <p class="text-sm font-semibold text-white">Type your portfolio details <span
                                    class="text-xs text-slate-300 block">12 August 2025</span></p>
                            <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                        </div>
                    </div>
                    <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                        <img src="assets/p-7.png" alt="portfolio img"
                            class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">

                        <div
                            class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                            <p class="text-sm font-semibold text-white">Type your portfolio details <span
                                    class="text-xs text-slate-300 block">12 August 2025</span></p>
                            <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                        </div>
                    </div>
                    <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 sm:col-span-2">
                        <img src="assets/p-8.png" alt="portfolio img"
                            class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">

                        <div
                            class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                            <p class="text-sm font-semibold text-white">Type your portfolio details <span
                                    class="text-xs text-slate-300 block">12 August 2025</span></p>
                            <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                        </div>
                    </div>
                </div> -->
    <!--End col-3 -->
    <!-- </div>
        </div>
    </section> -->
    <!-- ==== End Portfolio ==== -->

    <!-- ==== Blog ==== -->
    <section class="pb-16 white-color ">
        <div class="mx-auto max-w-7xl px-8 md:px-6">
            <!-- heading text -->
            <div class="mb-5 sm:mb-10">
                <!-- <span class="font-medium text-blue-500">Our Blog</span> -->
                <h1 class="text-2xl font-bold text-[#002F42] sm:text-5xl text-center">From Our Latest Blog</h1>
            </div>
            <!-- wrapper -->
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:gap-10">
                <!-- single blog -->
                <div class="w-full duration-200 hover:scale-95">
                    <div class="max-h-52 w-full overflow-hidden rounded-t-xl ">
                        <img src="assets/demo image 1.png" alt="blog" class="w-full">
                    </div>
                    <div class="rounded-b-xl bg-white px-5 pb-5 pt-3 shadow-md shadow-blue-500/10">
                        <div class="">
                            <a href="sms-for-salesforce-plugin-by-sms-to.html"
                                class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-800 hover:text-[#00C1C6]">SMS
                                for Salesforce Plugin by SMS.to</a>
                            <a href="sms-for-salesforce-plugin-by-sms-to.html"
                                class="block pt-4 font-medium capitalize text-slate-800 hover:text-[#00C1C6]">SMS.to
                                Salesforce SMS Plugin allows users to seamlessly send and receive text messages directly
                                from their Salesforce account. […]</a>
                        </div>
                        <hr class="my-4 border-slate-100">
                        <a href="sms-for-salesforce-plugin-by-sms-to.html">
                            <button class="flex items-center gap-3 text-[#00C1C6] underline"><ion-icon
                                    name="arrow-redo-outline"></ion-icon> Read More</button>
                        </a>

                    </div>
                </div>
                <!-- single blog -->
                <div class="w-full duration-200 hover:scale-95">
                    <div class="max-h-52 w-full overflow-hidden rounded-t-xl ">
                        <img src="assets/demo image 2.png" alt="blog" class="w-full">
                    </div>
                    <div class="rounded-b-xl bg-white px-5 pb-5 pt-3 shadow-md shadow-blue-500/10">
                        <div class="">
                            <a href="hubspot-plugin.html"
                                class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-800 hover:text-[#00C1C6]">SMS
                                for Hubspot Plugin by SMS.to</a>
                            <!-- <a href="#"
                                class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-800 hover:text-blue-500">Design</a> -->
                            <a href="hubspot-plugin.html"
                                class="block pt-4 font-medium capitalize text-slate-800 hover:text-[#00C1C6]">SMS.to’s
                                Hubspot SMS Plugin is a powerful tool that allows you to easily integrate SMS messaging
                                into your marketing automation strategy. […]</a>
                        </div>
                        <hr class="my-4 border-slate-100">
                        <a href="hubspot-plugin.html">
                            <button class="flex items-center gap-3 text-[#00C1C6] underline"><ion-icon
                                    name="arrow-redo-outline"></ion-icon> Read More</button>
                        </a>
                    </div>
                </div>
                <!-- single blog -->
                <div class="w-full duration-200 hover:scale-95">
                    <div class="max-h-52 w-full overflow-hidden rounded-t-xl ">
                        <img src="assets/demo image 3.png" alt="blog" class="w-full">
                    </div>
                    <div class="rounded-b-xl bg-white px-5 pb-5 pt-3 shadow-md shadow-blue-500/10">
                        <div class="">
                            <a href="bulk-sms.html"
                                class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-800 hover:text-[#00C1C6]">What
                                Is Bulk SMS Service?</a>
                            <a href="bulk-sms.html"
                                class="block pt-4 font-medium capitalize text-slate-800 hover:text-[#00C1C6]">What is
                                bulk SMS service? It is the dissemination of huge amounts of SMS messages through mobile
                                phone terminals. Enterprises, […]</a>
                        </div>
                        <hr class="my-4 border-slate-100">
                        <a href="bulk-sms.html">
                            <button class="flex items-center gap-3 text-[#00C1C6] underline"><ion-icon
                                    name="arrow-redo-outline"></ion-icon> Read More</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== End Blog ==== -->

    <!-- Review -->
    <section>
        <div class="containered">
            <div class="board">
                <h2 class="text-light text-5xl">Get the lowdown. </h2>
                <p class="text-light">See what people are saying about us.</p>

                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    <img src="assets/stars-5.svg" alt="" class="w-16">
                                    <p>So far everything is working to perfection and we have not had any issues.</p>
                                    
                                    <p>Date of experience: 05 March 2023</p>
                                </div>
                                <div class="profile">
                                    <!-- <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                <a href="#">John V. Bellanmy</a> -->
                                    <span>Date of experience: 05 March 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    We're very pleased with the portion of the functionality provided that we are
                                    needing and the same goes for the speedy reply from the staff with any questions we
                                    have had along the way.
                                </div>
                                <div class="profile">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                        alt="">
                                    <a href="#">John V. Bellanmy</a>
                                    <span>Founder & CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex">
                                <div class="comments">
                                    Animi sunt, ipsa error? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Non, placeat quisquam? dignissimos est sit reiciendis iste
                                </div>
                                <div class="profile">
                                    <img src="https://images.unsplash.com/photo-1503185912284-5271ff81b9a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                        alt="">
                                    <a href="#">John V. Bellanmy</a>
                                    <span>Founder & CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review -->

    <!-- <div class="bottom-area">
        <div class="container">
            <button class="toggle-btn">
                <ion-icon name="moon-outline"></ion-icon>
                <ion-icon name="sunny-outline"></ion-icon>
            </button>
        </div>
    </div> -->
    <div class="text-center py-16 bg-[#e9eef3] bg-opacity-50 px-8 bg-img">
        <h2 class="sm:text-5xl text-2xl mb-2 text-[#002F42] font-semibold ">Get Started with <span
                class="combined">SmsThunder</span> </h2>
        <p class=" mb-8">The easiest way to send engaging
            messages to your customers</p>
        <a href="login.html">
            <button
                class="w-full rounded-md bg-[#002F42] px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-[#00C1C6] duration-200 sm:w-auto ">Get
                Started</button>
        </a>
        <a href="contact.html">
            <button
                class="mt-4 box-border w-full rounded-md border-solid border-2 border-[#002F42] px-8 py-2.5 font-semibold text-[#002F42] shadow-md shadow-blue-500/10 duration-200 sm:ml-4 sm:mt-0 sm:w-auto">Contact
                Us</button>
        </a>
    </div>
    <!-- ==== Footer ==== -->
    <footer class=" pt-16 bg-img">
        <div class="mx-auto max-w-7xl px-8 md:px-6">
            <!-- footer top -->
            <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6 ">
                <div class="md:max-w-md lg:col-span-2">
                    <img src="assets/footer_logo.png" alt="footer img" class="w-24">
                    <div class="mt-4 lg:max-w-sm">
                        <p class="text-sm text-slate-700">Bulk SMS Marketing Platform & SMS Gateway platform
                            for all your SMS needs. OTP, Notifications,
                            Newsletters, Reminders, Polling, 2 WAY SMS, 2FA.</p>

                    </div>
                </div>

                <div class="grid row-gap-8 grid-cols-2 gap-5 md:grid-cols-4 lg:col-span-4">
                    <div class="">
                        <!-- head -->
                        <p class="font-semibold ">Category</p>
                        <ul class="mt-2 space-y-2">
                            <li><a href="features.html"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Features</a>
                            </li>
                            <li><a href="service.html"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Services</a>
                            </li>
                            <li><a href="blog.html"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Blog</a>
                            </li>
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <!-- head -->
                        <p class="font-semibold ">About Us</p>
                        <ul class="mt-2 space-y-2">
                            <!-- <li><a href="#"
                                    class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Web</a>
                            </li> -->
                            <!-- <li><a href="#"
                                    class="text-slate-500 transition-colors duration-300 hover:text-slate-700">eCommerce</a>
                            </li> -->
                            <li><a href="Privacy.html"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Privacy &
                                    Policy</a>
                            </li>
                            <li><a href="terms.html"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Terms &
                                    conditions</a>
                            </li>
                            <li><a href="/#contact"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <!-- head -->
                        <p class="font-semibold ">Solutions</p>
                        <ul class="mt-2 space-y-2">
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Customer</a>
                            </li>
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Data
                                    Platform</a>
                            </li>
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">SMS
                                    Marketing</a>
                            </li>
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Communications</a>
                            </li>
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Contact
                                    Center</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">

                        <p class="font-semibold ">Company</p>
                        <ul class="mt-2 space-y-2">
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">About
                                    SmsThunder</a>
                            </li>
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Why
                                    SmsThunder</a>
                            </li>
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Get
                                    Help</a>
                            </li>
                            <li><a href="#"
                                    class="text-slate-700 transition-colors duration-300 hover:text-[#00C1C6]">Events</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- footer bottom -->
            <div class="flex flex-col justify-between border-t py-8 sm:flex-row">
                <p class="text-sm text-slate-600">© Copyright 2023 <a href="#"
                        class="text-[#00C1C6] hover:text-[#00C1C6]">SMS Thunder</a> | All rights reserved.</p>
                <div class="mt-4 flex items-center space-x-4 sm:mt-0">
                    <a href="#">
                        <ion-icon name="logo-facebook"
                            class="text-2xl text-slate-800 hover:text-blue-500 duration-300"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"
                            class="text-2xl text-slate-800 hover:text-blue-500 duration-300"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"
                            class="text-2xl text-slate-800 hover:text-blue-500 duration-300"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==== End Footer ==== -->
    <script src="{{ asset('js/landing.js') }}"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var icon = document.getElementById("icon");

        icon.onclick = function () {
            document.body.classList.toggle("dark-theme");
            if (document.body.classList.contains("dark-theme")) {
                icon.src = "assets/sun.png"
            } else {
                icon.src = "assets/moon.png"
            }
        }
    </script>
</body>

</html>