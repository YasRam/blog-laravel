<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Admin Panel</title>
    @vite('resources/css/app.css')

</head>

<body class="text-gray-800 font-inter">


    <!--sidenav -->
    <div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">

        <a href="/" class="flex items-center pb-4 border-b border-b-gray-800">

            <h2 class="font-bold text-2xl">LOREM <span class="bg-[#f84525] text-white px-2 rounded-md">IPSUM</span></h2>
        </a>
        <ul class="mt-4">
            <span class="text-gray-400 font-bold">ADMIN</span>
            <li class="mb-1 group">
                <x-nav-link href="/" :active="request()->is('/')">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Home</span>
                </x-nav-link>

                <x-nav-link href="/about" :active="request()->is('about')">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">About</span>
                </x-nav-link>

                <x-nav-link href="/Dashboard" :active="request()->is('Dashboard')">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </x-nav-link>
            </li>
            <span class="text-gray-400 font-bold">ADMIN</span>

            <li class="mb-1 group">
                <x-nav-link href="/users" :active="request()->is('users')">
                    <i class='bx bx-user mr-3 text-lg'></i>
                    <span class="text-sm">Users</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </x-nav-link>
            </li>
            <li class="mb-1 group">
                <x-nav-link href="/category" :active="request()->is('category')">
                    <i class='bx bx-user mr-3 text-lg'></i>
                    <span class="text-sm">Category</span>
                </x-nav-link>
            </li>
            <li class="mb-1 group">
                <x-nav-link href="/posts" :active="request()->is('posts')">
                    <i class='bx bx-user mr-3 text-lg'></i>
                    <span class="text-sm">Posts</span>
                </x-nav-link>
            </li>

            <span class="text-gray-400 font-bold">BLOG</span>
            <li class="mb-1 group">
                <a href={{ route('post.index') }} :active="request()->is('posts')"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class='bx bxl-blogger mr-3 text-lg'></i>
                    <span class="text-sm">Post</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <x-nav-link href="/Posts" :active="request()->is('Posts')">
                    <i class='bx bxl-blogger mr-3 text-lg'></i>
                    <span class="text-sm">Posts</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </x-nav-link>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href=""
                            class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href=""
                            class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Categories</a>
                    </li>
                </ul>
            </li>

            <span class="text-gray-400 font-bold">PERSONAL</span>

        </ul>
    </div>
    {{-- <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div> --}}
    <!-- end sidenav -->


    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->

        <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            {{-- <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button> --}}

            <ul class="ml-auto flex items-center">
                <button id="fullscreen-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        class="hover:bg-gray-100 rounded-full" viewBox="0 0 24 24"
                        style="fill: gray;transform: ;msFilter:;">
                        <path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"></path>
                    </svg>
                </button>
                <script>
                    const fullscreenButton = document.getElementById('fullscreen-button');

                    fullscreenButton.addEventListener('click', toggleFullscreen);

                    function toggleFullscreen() {
                        if (document.fullscreenElement) {
                            // If already in fullscreen, exit fullscreen
                            document.exitFullscreen();
                        } else {
                            // If not in fullscreen, request fullscreen
                            document.documentElement.requestFullscreen();
                        }
                    }
                </script>
                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg"
                                    alt="" />
                                <div
                                    class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping">
                                </div>
                                <div
                                    class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                        </div>
                        <div class="p-2 md:block text-left">
                            <h2 class="text-sm font-semibold text-gray-800">John Doe</h2>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
        <!-- end navbar -->

        <!-- Content -->
        @yield('content')
        <!-- End Content -->
    </main>


</body>

</html>
