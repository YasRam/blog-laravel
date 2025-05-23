@extends('components.layout')
@section('content')
<div class="p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div>
                    <div class="flex items-center mb-1">
                        <div class="text-2xl font-semibold">{{$users}}</div>
                    </div>
                    <div class="text-sm font-medium text-gray-400">Users</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                            class="ri-more-fill"></i></button>
                    <ul
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- <a href={{ route('users.index') }} class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a> --}}
        </div>
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-4">
                <div>
                    <div class="flex items-center mb-1">
                        <div class="text-2xl font-semibold">{{$categories}}</div>
                        <div
                            class="p-1 rounded bg-emerald-500/10 text-emerald-500 text-[12px] font-semibold leading-none ml-2">
                            +30%</div>
                    </div>
                    <div class="text-sm font-medium text-gray-400">Categories</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                            class="ri-more-fill"></i></button>
                    <ul
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="/dierenartsen" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
        </div>
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div>
                    <div class="text-2xl font-semibold mb-1">{{$posts}}</div>
                    <div class="text-sm font-medium text-gray-400">Posts</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                            class="ri-more-fill"></i></button>
                    <ul
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="text-sm font-medium text-gray-400">Users</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-6">

                <a href="/gebruikers" class="text-[#0f0] font-medium text-sm hover:text-red-800">Create</a>
                <a href="/gebruikers" class="text-[#f00] font-medium text-sm hover:text-red-800">View All</a>
            </div>
        </div>

        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="text-sm font-medium text-gray-400">Category</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-6">

                <a href="/gebruikers" class="text-[#0f0] font-medium text-sm hover:text-red-800">Create</a>
                <a href="/gebruikers" class="text-[#f00] font-medium text-sm hover:text-red-800">View All</a>
            </div>
        </div>

        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="text-sm font-medium text-gray-400">Posts</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-6">

                <a href="/gebruikers" class="text-[#0f0] font-medium text-sm hover:text-red-800">Create</a>
                <a href="/gebruikers" class="text-[#f00] font-medium text-sm hover:text-red-800">View All</a>
            </div>
        </div>

        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div class="text-sm font-medium text-gray-400">Authers</div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-6">

                <a href="/gebruikers" class="text-[#0f0] font-medium text-sm hover:text-red-800">Create</a>
                <a href="/gebruikers" class="text-[#f00] font-medium text-sm hover:text-red-800">View All</a>
            </div>
        </div>
    </div>
    
</div>

@endsection