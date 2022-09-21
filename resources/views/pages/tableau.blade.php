<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header gris</title>
    <!-- lien tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- lien alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="./assets/img/favicon.ico" />
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
        <!-- lien tailwind css -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- lien alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- lien css -->
        <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet">
        <!-- tailwind css -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Delius&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Balsamiq Sans', cursive;
            }

            span {
                font-family: 'Delius';
            }

            .geo {
                font-family: 'Delius';
            }
        </style>

        <title>ABC Thérapeutes</title>
    </head>

    <body>



        <!-- header -->
        <nav x-data="{open: false}" class="lg:bg-[url('/img/nvfond.png')] lg:bg-center lg:bg-no-repeat lg:bg-contain">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8 mt-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex items-center px-2 lg:px-0">
                        <div class="hidden lg:block lg:mr-4">
                        </div>
                    </div>
                    <div class="flex lg:hidden">
                        <!-- Mobile menu boutton -->
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-[#dde9f4] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
                            <span class="sr-only">Open main menu</span>

                            <!--
                Icon when menu is closed.
    
                Heroicon name: outline/menu
    
                Menu open: "hidden", Menu closed: "block"
              -->
                            <svg name="menu" onclick="Menu(e)" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
                Icon when menu is open.
    
                Heroicon name: outline/x
    
                Menu open: "block", Menu closed: "hidden"
              -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:block lg:ml-4">
                        <div class="flex items-center">
                            <!-- Profile dropdown -->
                            <div class="ml-4 relative flex-shrink-0" x-data="{open: false}">
                                <div>
                                    <button type="button"
                                        class="bg-[#dde9f4] rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true"
                                        x-on:click="open = !open">
                                        <span class="sr-only">menu</span>
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </button>
                                </div>

                                <div :class="open ? 'block' : 'hidden'"
                                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Se connecter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="lg:hidden" id="mobile-menu">
                <div :class="open ? 'block' : 'hidden'" class="px-2 pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-white hover:bg-[#dde9f4]">Mon
                        espace</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-white hover:bg-[#dde9f4]">Paramètres</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-white hover:bg-[#dde9f4]">Deconnexion</a>
                </div>
            </div>
        </nav>

        <!-- fin header -->


        <!-- essai sidebar -->

        <div class=" flex ">
            <aside class="w-80 h-full " aria-label="Sidebar">

                <div class="overflow-y-auto py-4 px-3 rounded dark:bg-gray-800 bg-[#dde9f4] -mt-32 h-full">
                    <!-- logo -->
                    <div class="flex justify-center my-16">
                        <img class="h-8 w-auto sm:h-10" src="/img/1Fichier 91.png" alt="Logo abcThérapeutes">
                    </div>
                    <ul class="space-y-8">
                        <li class="">
                            <!-- tableau de bord -->
                            <div class="text-sm text-center">
                                <a href=""
                                    class="font-medium py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-[#386B96] hover:text-[#386B96] px-10">
                                    Tableau de bord </a>
                            </div>
                        </li>
                        <li>
                            <!-- Mon profil -->
                            <div class="text-sm text-center">
                                <a href=""
                                    class="font-medium py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-[#386B96] hover:text-[#386B96] px-10">
                                    Mon profil </a>
                            </div>
                        </li>
                        <li>
                            <!-- Mes rendez-vous -->
                            <div class="text-sm text-center">
                                <a href=""
                                    class="font-medium py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-[#386B96] hover:text-[#386B96] px-10">
                                    Mes rendez-vous </a>
                            </div>
                        </li>
                        <li>
                            <!-- Suivi financier -->
                            <div class="text-sm text-center">
                                <a href=""
                                    class="font-medium py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-[#386B96] hover:text-[#386B96] px-10">
                                    Suivi financier </a>
                            </div>

                        </li>
                        <li>
                            <!-- Mes patients -->
                            <div class="text-sm text-center">
                                <a href=""
                                    class="font-medium py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-[#386B96] hover:text-[#386B96] px-10">
                                    Mes patients </a>
                            </div>
                        </li>
                        <li>

                        </li>
                        <li>

                        </li>
                        <li>

                        </li>
                    </ul>
                </div>

            </aside>


            <!-- fin essai sidebar -->



            <!-- contenu principal -->
            <div class="flex-1 mx-20 grid justify-items-center">

                <!-- Notifications -->
                <div class="overflow-hidden bg-white shadow sm:rounded-md my-12 h-96 w-96">
                    <div class="relative z-10 flex items-baseline justify-center pt-16 pb-6 border-b border-gray-200">
                        <h1 class="text-xl font-extrabold tracking-tight text-black">Notifications</h1>
                    </div>
                    <ul role="list" class="divide-y divide-gray-200">
                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex min-w-0 flex-1 items-center">
                                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-1 md:gap-4">
                                            <div class="hidden md:block">
                                                <div>
                                                    <p class="text-sm text-gray-900">
                                                        Applied on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                        <!-- Heroicon name: mini/check-circle -->
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Completed phone screening
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex min-w-0 flex-1 items-center">
                                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-1 md:gap-4">
                                            <div class="hidden md:block">
                                                <div>
                                                    <p class="text-sm text-gray-900">
                                                        Applied on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                        <!-- Heroicon name: mini/check-circle -->
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Completed phone screening
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex min-w-0 flex-1 items-center">
                                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-1 md:gap-4">
                                            <div class="hidden md:block">
                                                <div>
                                                    <p class="text-sm text-gray-900">
                                                        Applied on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                        <!-- Heroicon name: mini/check-circle -->
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Completed phone screening
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- fin notifications -->

                <!--rdv -->
                <div class="overflow-hidden bg-white shadow sm:rounded-md my-12 h-96 w-96">
                    <div class="relative z-10 flex items-baseline justify-center pt-16 pb-6 border-b border-gray-200">
                        <h1 class="text-xl font-extrabold tracking-tight text-black">Mes prochains Rendez-vous</h1>
                    </div>
                    <ul role="list" class="divide-y divide-gray-200">
                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                        <div class="truncate">
                                            <div class="flex text-sm">
                                                <p class="truncate font-medium text-indigo-600">Back End Developer</p>
                                                <p class="ml-1 flex-shrink-0 font-normal text-gray-500">in Engineering
                                                </p>
                                            </div>
                                            <div class="mt-2 flex">
                                                <div class="flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: mini/calendar -->
                                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <p>
                                                        Closing on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-5 flex-shrink-0">
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                        <div class="truncate">
                                            <div class="flex text-sm">
                                                <p class="truncate font-medium text-indigo-600">Front End Developer</p>
                                                <p class="ml-1 flex-shrink-0 font-normal text-gray-500">in Engineering
                                                </p>
                                            </div>
                                            <div class="mt-2 flex">
                                                <div class="flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: mini/calendar -->
                                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <p>
                                                        Closing on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-5 flex-shrink-0">
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                        <div class="truncate">
                                            <div class="flex text-sm">
                                                <p class="truncate font-medium text-indigo-600">User Interface Designer
                                                </p>
                                                <p class="ml-1 flex-shrink-0 font-normal text-gray-500">in Design</p>
                                            </div>
                                            <div class="mt-2 flex">
                                                <div class="flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: mini/calendar -->
                                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <p>
                                                        Closing on
                                                        <time datetime="2020-01-14">January 14, 2020</time>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-5 flex-shrink-0">
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>


                <!-- fin rdv -->

                <!-- Actualités -->
                <div class="overflow-hidden bg-white shadow sm:rounded-md my-12 h-96 w-96">
                    <div class="relative z-10 flex items-baseline justify-center pt-16 pb-6 border-b border-gray-200">
                        <h1 class="text-xl font-extrabold tracking-tight text-black">Actualités</h1>
                    </div>
                    <ul role="list" class="divide-y divide-gray-200">
                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex min-w-0 flex-1 items-center">
                                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-1 md:gap-4">
                                            <div class="hidden md:block">
                                                <div>
                                                    <p class="text-sm text-gray-900">
                                                        Applied on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                        <!-- Heroicon name: mini/check-circle -->
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Completed phone screening
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex min-w-0 flex-1 items-center">
                                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-1 md:gap-4">
                                            <div class="hidden md:block">
                                                <div>
                                                    <p class="text-sm text-gray-900">
                                                        Applied on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                        <!-- Heroicon name: mini/check-circle -->
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Completed phone screening
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex min-w-0 flex-1 items-center">
                                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-1 md:gap-4">
                                            <div class="hidden md:block">
                                                <div>
                                                    <p class="text-sm text-gray-900">
                                                        Applied on
                                                        <time datetime="2020-01-07">January 7, 2020</time>
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                        <!-- Heroicon name: mini/check-circle -->
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Completed phone screening
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Heroicon name: mini/chevron-right -->
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- fin Actualités -->






            </div>


        </div>



        @include('/components/lesfooters/footer')

    </body>

    </html>