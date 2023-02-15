<template>
    <div>
        <Head :title="title"/>

        <div class="min-h-screen bg-gray-100">
            <nav class="flex items-center justify-between flex-wrap bg-blue-700 p-6">
                <div class="flex items-center flex-no-shrink text-white mr-6">
                    <span class="font-semibold text-xl tracking-tight ml-12">Summoners Codex</span>
                </div>
                <div class="block sm:hidden">
                    <button @click="toggleMenu" class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
                <div :class="menuOpen ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                    <div class="text-sm sm:flex-grow">
                        <a href="#responsive-header" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-teal-lighter hover:text-white mr-4">
                            Characters
                        </a>
                        <a href="#responsive-header" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-teal-lighter hover:text-white mr-4">
                            Cards
                        </a>
                        <a href="#responsive-header" class="no-underline block mt-4 sm:inline-block sm:mt-0 text-teal-lighter hover:text-white">
                            Teams
                        </a>
                    </div>
                    <div>
                        <a href="#" class="no-underline inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 sm:mt-0">Login</a>
                    </div>
                </div>
            </nav>

            <div class="relative flex items-start ">
                <div class="fixed top-0 z-40 transition-all duration-300">
                    <div class="flex justify-end">
                        <button @click="sidebarOpen = !sidebarOpen" :class="{'hover:bg-gray-900': !sidebarOpen, 'hover:bg-gray-700': sidebarOpen}" class="bg-gray-900 transition-all duration-300 p-2 mx-3 my-3 rounded-full focus:outline-none">
                            <svg viewBox="0 0 512 512" class="w-8 h-8 mx-auto fill-current" :class="{'text-white': !sidebarOpen, 'text-gray-300': sidebarOpen}">
                                <path v-if="!sidebarOpen" fill-rule="evenodd" d="M319.61 20.654c13.145 33.114 13.144 33.115-5.46 63.5 33.114-13.145 33.116-13.146 63.5 5.457-13.145-33.114-13.146-33.113 5.457-63.498-33.114 13.146-33.113 13.145-63.498-5.459zM113.024 38.021c-11.808 21.04-11.808 21.04-35.724 24.217 21.04 11.809 21.04 11.808 24.217 35.725 11.808-21.04 11.808-21.04 35.724-24.217-21.04-11.808-21.04-11.808-24.217-35.725zm76.55 56.184c-.952 50.588-.95 50.588-41.991 80.18 50.587.95 50.588.95 80.18 41.99.95-50.588.95-50.588 41.99-80.18-50.588-.95-50.588-.95-80.18-41.99zm191.177 55.885c-.046 24.127-.048 24.125-19.377 38.564 24.127.047 24.127.046 38.566 19.375.047-24.126.046-24.125 19.375-38.564-24.126-.047-24.125-.046-38.564-19.375zm-184.086 83.88c-1.191.024-2.36.07-3.492.134-18.591 1.064-41.868 8.416-77.445 22.556L76.012 433.582c78.487-20.734 132.97-21.909 170.99-4.615V247.71c-18.076-8.813-31.79-13.399-46.707-13.737a91.166 91.166 0 0 0-3.629-.002zm122.686 11.42c-2.916-.026-5.81.011-8.514.098-12.81.417-27.638 2.215-45.84 4.522V427.145c43.565-7.825 106.85-4.2 171.244 7.566l-39.78-177.197c-35.904-8.37-56.589-11.91-77.11-12.123zm2.289 16.95c18.889.204 36.852 2.768 53.707 5.02l4.437 16.523c-23.78-3.75-65.966-4.906-92.467-.98l-.636-17.805c11.959-2.154 23.625-2.88 34.959-2.758zm-250.483 4.658l-10.617 46.004h24.094l10.326-46.004H71.158zm345.881 0l39.742 177.031 2.239 9.973 22.591-.152-40.855-186.852h-23.717zm-78.857 57.82c16.993.026 33.67.791 49.146 2.223l3.524 17.174c-32.645-3.08-72.58-2.889-102.995 0l-.709-17.174c16.733-1.533 34.04-2.248 51.034-2.223zm-281.793 6.18l-6.924 30.004h24.394l6.735-30.004H56.389zm274.418 27.244c4.656.021 9.487.085 14.716.203l2.555 17.498c-19.97-.471-47.115.56-59.728 1.05l-.7-17.985c16.803-.493 29.189-.828 43.157-.766zm41.476.447c8.268.042 16.697.334 24.121.069l2.58 17.74c-8.653-.312-24.87-.83-32.064-.502l-2.807-17.234a257.25 257.25 0 0 1 8.17-.073zm-326.97 20.309l-17.985 77.928 25.035-.17 17.455-77.758H45.313zm303.164 11.848c19.608-.01 38.66.774 56.449 2.572l2.996 20.787c-34.305-4.244-85.755-7.697-119.1-3.244l-.14-17.922c20.02-1.379 40.186-2.183 59.795-2.193zm-166.606 44.05c-30.112.09-67.916 6.25-115.408 19.76l-7.22 2.053 187.759-1.27v-6.347c-16.236-9.206-37.42-14.278-65.13-14.196zm134.41 6.174c-19.63.067-37.112 1.439-51.283 4.182v10.064l177.594-1.203c-44.322-8.634-89.137-13.17-126.31-13.043zM26 475v18h460v-18H26z" clip-rule="evenodd"></path>
                                <path v-if="sidebarOpen" fill-rule="evenodd" d="M101.1 24.88L135.5 157l88.1 4.8-3-17.2-1.9-11.2 123.3 7.4 4.9 27.8 75.9 4.2-32.5-124.62-289.2-23.3zm-18.82 1.6c-30.5 11.9-55.7 53.1-49.8 75.32l3.3 11.8c.6-1.8 1.3-3.5 2.1-5.3 9.9-23.72 26.5-46.82 50.3-58.92l-5.9-22.9zm10.8 41.6c-16.7 10-29.9 28.1-38 47.42-5.2 12.5-8 25.6-8.7 36.5l17.46 63.5c12.8-21.2 30.19-42.3 53.96-52.4L93.08 68.08zM240.3 152.8l20.2 117.4 87 4.3L326.8 158l-86.5-5.2zm46.8 21.2a25.29 20.33 24.87 0 1 2.4 0 25.29 20.33 24.87 0 1 27.2 22.4 25.29 20.33 24.87 0 1-13.2 19.2l20.8 37.5-48.7-2.2 10.9-36.1a25.29 20.33 24.87 0 1-18.5-20.6 25.29 20.33 24.87 0 1 19.1-20.2zm-146.8 1.3l15 57.6 81.2 3.4-9.8-56.2-86.4-4.8zm-17.9 5.6c-21.8 10.6-39.52 36.3-51.73 59.4l12.46 45.3c10.27-15.7 23.97-32.8 53.57-49.9l-14.3-54.8zm227.8 5.9l9.7 54.7 81.7 3.5-14.1-53.9-77.3-4.3zM160 251.1l31.2 119.6 289.2 23.2-34-130.6-83.3-3.5 6 33.9-123.8-6.3-5.7-32.9-79.6-3.4zm-18.6 2.7c-32 19.4-39.7 35.9-51.79 55.4l21.49 78.1c.3-.5.6-1.1.9-1.6 10.6-19.3 27.8-37.7 51.1-48.5l-21.7-83.4zM168 355.7c-17.7 9.1-31.2 23.7-39.6 39-4.5 8.1-7.3 16.3-8.7 23.7l11.7 42.4 1.6.2c-3.8-27.6 11.4-60.5 41.3-81.1l-6.3-24.2zm26.3 34c-32.6 17.3-46.5 52.4-41.8 72.9l289.8 24.5c-5.3-7.8-8.7-17.9-8.6-28.5l-22.4-9 46.3-7.3-13.5-12.8c5.6-7 13.7-13.1 24.9-17.7l-274.7-22.1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div :class="{'w-3/4 md:w-80': sidebarOpen, 'w-0': !sidebarOpen}" class="fixed top-0 bottom-0 left-0 z-30 block w-0 h-full min-h-screen overflow-y-auto text-gray-400 transition-all duration-300 ease-in-out bg-gray-900 shadow-lg overflow-x-hidden">
                    <div class="flex flex-col items-stretch justify-between h-full">
                        <div class="flex flex-col flex-shrink-0 w-full">
                            <div class="flex items-center justify-center px-8 py-3 text-xl text-center">
                                Menu
                            </div>

                            <nav>
                                <div class="flex-grow md:block md:overflow-y-auto overflow-x-hidden mt-2" :class="{'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen}">

                                    <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring {{ request()->is('dashboard/orders*') ? 'bg-gray-800' : '' }}" href="{{ route('dashboard.orders') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                                        </svg>
                                        <span class="mx-4">Spoilers</span>
                                    </a>

                                    <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                                        </svg>
                                        <span class="mx-4">Resources</span>

                                    </a>

                                    <a @click="referencesOpen = !referencesOpen" @click.away="referencesOpen = false" class="flex justify-start items-center px-4 py-3 hover:bg-gray-800 hover:text-gray-400" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                        <span class="mx-4">References</span>
                                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <div x-cloak wire:ignore :class="{'opacity-100': referencesOpen,'opacity-0 h-0 hidden': !referencesOpen}" class="transition-all duration-500 ease-in-out">
                                        <a class="flex items-center pl-8 pr-4 py-2 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring" href="{{ route('dashboard.orders') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                            </svg>

                                            <span class="mx-4">FAQs</span>
                                        </a>

                                        <a class="flex items-center pl-8 pr-4 py-2 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring {{ request()->is('dashboard/orders*') ? 'bg-gray-800' : '' }}" href="{{ route('dashboard.orders') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 9.563C9 9.252 9.252 9 9.563 9h4.874c.311 0 .563.252.563.563v4.874c0 .311-.252.563-.563.563H9.564A.562.562 0 019 14.437V9.564z" />
                                            </svg>

                                            <span class="mx-4">Terrain Markers</span>
                                        </a>

                                        <a class="flex items-center pl-8 pr-4 py-2 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring {{ request()->is('dashboard/orders*') ? 'bg-gray-800' : '' }}" href="{{ route('dashboard.orders') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>

                                            <span class="mx-4">Summoning Charts</span>
                                        </a>

                                        <a class="flex items-center pl-8 pr-4 py-2 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring {{ request()->is('dashboard/orders*') ? 'bg-gray-800' : '' }}" href="{{ route('dashboard.orders') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
                                            </svg>

                                            <span class="mx-4">Schemes & Strategies</span>
                                        </a>
                                    </div>

                                    <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                                        </svg>
                                        <span class="mx-4">Resources</span>

                                    </a>

                                    <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-gray-400 focus:outline-none focus:ring" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>

                                        <span class="mx-4">Blog</span>

                                    </a>

                                </div>

                            </nav>

                        </div>
                        <div>
                            <a title="Logout" href="{{ route('logout') }}" class="block px-4 py-3" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                <svg class="text-gray-400 fill-current w-7 h-7" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" aria-label="door-leave" viewBox="0 0 32 32" title="door-leave">
                                    <g>
                                        <path d="M27.708,15.293c0.39,0.39 0.39,1.024 0,1.414l-4,4c-0.391,0.391 -1.024,0.391 -1.415,0c-0.39,-0.39 -0.39,-1.024 0,-1.414l2.293,-2.293l-11.586,0c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1l11.586,0l-2.293,-2.293c-0.39,-0.39 -0.39,-1.024 0,-1.414c0.391,-0.391 1.024,-0.391 1.415,0l4,4Z">
                                        </path>
                                        <path d="M11.999,8c0.001,0 0.001,0 0.002,0c1.699,-0.001 2.859,0.045 3.77,0.25c0.005,0.001 0.01,0.002 0.015,0.003c0.789,0.173 1.103,0.409 1.291,0.638c0,0 0,0.001 0,0.001c0.231,0.282 0.498,0.834 0.679,2.043c0,0.001 0,0.002 0.001,0.003c0.007,0.048 0.014,0.097 0.021,0.147c0.072,0.516 0.501,0.915 1.022,0.915c0.584,0 1.049,-0.501 0.973,-1.08c-0.566,-4.332 -2.405,-4.92 -7.773,-4.92c-7,0 -8,1 -8,10c0,9 1,10 8,10c5.368,0 7.207,-0.588 7.773,-4.92c0.076,-0.579 -0.389,-1.08 -0.973,-1.08c-0.521,0 -0.95,0.399 -1.022,0.915c-0.007,0.05 -0.014,0.099 -0.021,0.147c-0.001,0.001 -0.001,0.002 -0.001,0.003c-0.181,1.209 -0.448,1.762 -0.679,2.044l0,0c-0.188,0.229 -0.502,0.465 -1.291,0.638c-0.005,0.001 -0.01,0.002 -0.015,0.003c-0.911,0.204 -2.071,0.25 -3.77,0.25c-0.001,0 -0.001,0 -0.002,0c-1.699,0 -2.859,-0.046 -3.77,-0.25c-0.005,-0.001 -0.01,-0.002 -0.015,-0.003c-0.789,-0.173 -1.103,-0.409 -1.291,-0.638l0,0c-0.231,-0.282 -0.498,-0.835 -0.679,-2.043c0,-0.001 0,-0.003 -0.001,-0.005c-0.189,-1.247 -0.243,-2.848 -0.243,-5.061c0,0 0,0 0,0c0,-2.213 0.054,-3.814 0.243,-5.061c0.001,-0.002 0.001,-0.004 0.001,-0.005c0.181,-1.208 0.448,-1.76 0.679,-2.042c0,0 0,-0.001 0,-0.001c0.188,-0.229 0.502,-0.465 1.291,-0.638c0.005,-0.001 0.01,-0.002 0.015,-0.003c0.911,-0.205 2.071,-0.251 3.77,-0.25Z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Page Content -->
            <main class="min-h-screen">
                <slot/>
            </main>

            <!-- Footer -->
            <footer class="bg-white dark:bg-gray-900">
                <div class="container p-6 mx-auto">
                    <div class="lg:flex">
                        <div class="w-full -mx-6 lg:w-2/5">
                            <div class="px-6">
                                <div>
                                    <a href="#" class="text-xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Brand</a>
                                </div>

                                <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-400">Join 31,000+ other and never miss out on new tips, tutorials, and more.</p>

                                <div class="flex mt-6 -mx-2">
                                    <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Reddit">
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                            </path>
                                        </svg>
                                    </a>

                                    <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Facebook">
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                            </path>
                                        </svg>
                                    </a>

                                    <a href="#" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400" aria-label="Github">
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 lg:mt-0 lg:flex-1">
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                                <div>
                                    <h3 class="text-gray-700 uppercase dark:text-white">About</h3>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Company</a>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">community</a>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Careers</a>
                                </div>

                                <div>
                                    <h3 class="text-gray-700 uppercase dark:text-white">Blog</h3>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Tec</a>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Music</a>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Videos</a>
                                </div>

                                <div>
                                    <h3 class="text-gray-700 uppercase dark:text-white">Products</h3>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Mega cloud</a>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Aperion UI</a>
                                    <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Meraki UI</a>
                                </div>

                                <div>
                                    <h3 class="text-gray-700 uppercase dark:text-white">Contact</h3>
                                    <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">+1 526 654 8965</span>
                                    <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">example@email.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

                    <div>
                        <p class="text-center text-gray-500 dark:text-gray-400">© Brand 2020 - All rights reserved</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>

<script setup>
import {ref} from 'vue';
import {Link} from '@inertiajs/vue3';
import JetApplicationMark from '@/Components/ApplicationMark.vue';
import JetBanner from '@/Components/Banner.vue';
import JetDropdown from '@/Components/Dropdown.vue';
import JetDropdownLink from '@/Components/DropdownLink.vue';
import JetNavLink from '@/Components/NavLink.vue';
import JetResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Menubar from "primevue/menubar";
import InputText from "primevue/inputtext";

defineProps({
    title: String,
});

const menuOpen = ref(false);
const sidebarOpen = ref(false);

const toggleMenu = () => {
    menuOpen.value = !menuOpen.value;
}

const items = ref([
    {
        href: "/",
        label: "Home",
    },
    {
        href: "/test",
        label: "Test",
    }
])

</script>
