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
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-[#dde9f4] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
            <span class="sr-only">Open main menu</span>

            <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
            <svg name="menu" onclick="Menu(e)" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:block lg:ml-4">
          <div class="flex items-center">
            <!-- Profile dropdown -->
            <div class="ml-4 relative flex-shrink-0" x-data="{open: false}">
              <div>
                <button type="button" class="bg-[#dde9f4] rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true" x-on:click="open = !open">
                  <span class="sr-only">menu</span>
                  <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

              <div :class="open ? 'block' : 'hidden'" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Se connecter</a>
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
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-white hover:bg-[#dde9f4]">Mon espace</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-white hover:bg-[#dde9f4]">Paramètres</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-white hover:bg-[#dde9f4]">Deconnexion</a>
      </div>
    </div>
  </nav>

  <!-- fin header -->


  <!-- essai sidebar -->

  <div class=" flex">
    <aside class="w-80" aria-label="Sidebar">

      <div class="overflow-y-auto py-4 px-3 rounded dark:bg-gray-800 bg-[#dde9f4] -mt-32">
        <!-- logo -->
        <div class="flex justify-center mt-16">
          <img class="h-8 w-auto sm:h-10" src="/img/1Fichier 91.png" alt="Logo abcThérapeutes">
        </div>
        <div class="relative z-10 flex items-baseline justify-center pt-24 pb-6 border-b border-gray-200">
          <h1 class="text-xl font-extrabold tracking-tight text-black">Filtrer</h1>
        </div>
        <ul class="space-y-2">
          <li>
            <!-- premiere recherche -->
            <div>
              <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
              <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#386B96]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                  </svg>
                </div>
                <input type="search" id="default-search" class="block p-4 pl-10 w-full placeholder-[#356086] text-sm text-gray-900 bg-gray-50 rounded-lg border border-[#386B96] focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-5" placeholder="Dans quelle ville êtes-vous ?" required>
              </div>
            </div>
          </li>
          <li>
            <!-- Où voulez-vous votre séance -->
            <div class="border-b border-gray-200 py-6" x-data="{open: false}">
              <h3 class="-my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-gray-400 hover:text-[#386B96] " aria-controls="filter-section-0" aria-expanded="false" x-on:click="open = !open">
                  <!-- icon où -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-[#386B96] " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  <span class="font-medium text-[#386B96] "> Où voulez-vous votre séance ? </span>
                  <span class="mr-4 flex items-center">
                    <!--Heroicon name: flèche -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->
              <div x-show="open" class="pt-6" id="filter-section-0">
                <div class="space-y-4 ml-6">
                  <div class="flex items-center">
                    <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-color-0" class="ml-3 text-sm text-gray-600"> En cabinet </label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-color-1" class="ml-3 text-sm text-gray-600"> A domicile </label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-color-2" class="ml-3 text-sm text-gray-600"> Téléconsultation </label>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>

            <!-- Par qui voulez vous que votre séance soit faite -->
            <div class="border-b border-gray-200 py-6" x-data="{open: false}">
              <h3 class="-my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-gray-400 hover:text-[#386B96] " aria-controls="filter-section-1" aria-expanded="false" x-on:click="open = !open">
                  <!-- icon par qui -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-[#386B96]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                  </svg>
                  <span class="font-medium text-[#386B96] "> Par qui voulez-vous que votre séance soit faite ? </span>
                  <span class="mr-4 flex items-center">
                    <!--Heroicon name: flèche -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->

              <div x-show="open" class="pt-6" id="filter-section-1">
                <div class="space-y-4 ml-6">
                  <div class="flex items-center">
                    <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-category-0" class="ml-3 text-sm text-gray-600"> Une praticienne </label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-category-1" class="ml-3 text-sm text-gray-600"> Un praticien </label>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <!-- recherche practicien -->
            <div>
              <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
              <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#386B96]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                  </svg>
                </div>
                <input type="search" id="default-search" class="block p-4 pl-10 w-full placeholder-[#356086] text-sm text-gray-900 bg-gray-50 rounded-lg border border-[#386B96] focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-5" placeholder="Rechercher par nom du praticien" required>
              </div>
            </div>
          </li>
          <li>
            <!-- recherche pour qui -->
            <div class="border-b border-gray-200 py-6" x-data="{open: false}">
              <h3 class="-my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-gray-400 hover:text-[#386B96] " aria-controls="filter-section-2" aria-expanded="false" x-on:click="open = !open">
                  <!-- icon pour qui -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-[#386B96]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  <span class="font-medium text-[#386B96] "> Pour qui </span>
                  <span class="mr-4 flex items-center">
                    <!--Heroicon name: flèche -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->
              <div x-show="open" class="pt-6" id="filter-section-2">
                <div class="space-y-4 ml-6">
                  <div class="flex items-center">
                    <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-size-0" class="ml-3 text-sm text-gray-600"> 2L </label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-size-1" class="ml-3 text-sm text-gray-600"> 6L </label>
                  </div>


                </div>
              </div>
            </div>
          </li>
          <li>
            <!-- recherche Pour quel symptôme ? -->
            <div class="border-b border-gray-200 py-6" x-data="{open: false}">
              <h3 class="-my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-gray-400 hover:text-[#386B96] " aria-controls="filter-section-2" aria-expanded="false" x-on:click="open = !open">
                  <!-- icon symptôme -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-[#386B96]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                  </svg>
                  <span class="font-medium text-[#386B96] "> Pour quel symptôme ? </span>
                  <span class="mr-4 flex items-center">
                    <!--Heroicon name: flèche -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->
              <div x-show="open" class="pt-6" id="filter-section-2">
                <div class="space-y-4 ml-6">
                  <div class="flex items-center">
                    <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-size-0" class="ml-3 text-sm text-gray-600"> 2L </label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-size-1" class="ml-3 text-sm text-gray-600"> 6L </label>
                  </div>


                </div>
              </div>
            </div>
          </li>
          <li>
            <!-- recherche Pour quelle pathologie ? -->
            <div class="border-b border-gray-200 py-6" x-data="{open: false}">
              <h3 class="-my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-gray-400 hover:text-[#386B96] " aria-controls="filter-section-2" aria-expanded="false" x-on:click="open = !open">
                  <!-- icon pathologie -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-[#386B96]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                  </svg>
                  <span class="font-medium text-[#386B96] "> Pour quelle pathologie ? </span>
                  <span class="mr-4 flex items-center">
                    <!--Heroicon name: flèche -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->
              <div x-show="open" class="pt-6" id="filter-section-2">
                <div class="space-y-4 ml-6">
                  <div class="flex items-center">
                    <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-size-0" class="ml-3 text-sm text-gray-600"> 2L </label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-size-1" class="ml-3 text-sm text-gray-600"> 6L </label>
                  </div>


                </div>
              </div>
            </div>
          </li>
          <li>
            <!-- recherche Langues parlées ? -->
            <div class="border-b border-gray-200 py-6" x-data="{open: false}">
              <h3 class="-my-3 flow-root">
                <!-- Expand/collapse section button -->
                <button type="button" class="py-3 w-full flex items-center justify-between border-2 border-[#386B96]  rounded-lg text-sm text-gray-400 hover:text-[#386B96] " aria-controls="filter-section-2" aria-expanded="false" x-on:click="open = !open">
                  <!-- icon pathologie -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-4 text-[#386B96] border-[#386B96]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                  </svg>
                  <span class="font-medium text-[#386B96] "> Langues parlées ? </span>
                  <span class="mr-4 flex items-center">
                    <!--Heroicon name: flèche -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
              </h3>
              <!-- Filter section, show/hide based on section state. -->
              <div x-show="open" class="pt-6" id="filter-section-2">
                <div class="space-y-4 ml-6">
                  <div class="flex items-center">
                    <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-size-0" class="ml-3 text-sm text-gray-600"> 2L </label>
                  </div>

                  <div class="flex items-center">
                    <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-[#386B96]  focus:ring-indigo-500">
                    <label for="filter-size-1" class="ml-3 text-sm text-gray-600"> 6L </label>
                  </div>


                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </aside>


    <!-- fin essai sidebar -->



    <!-- contenu principal -->
    <div class="flex-1 mx-20">


      <div class="flex flex-cols-2 text-gray-600 justify-center mr-24">

        <!-- la femme assise-->
        <div class="flex justify-start ml-8">
          <img class="object-scale-down" src="/img/femmeassise.png" alt="une femme assise">
        </div>

        <!-- les 2 phrases du milieu -->
        <div class="sm:py-12 sm:px-6 lg:px-8 mx-8">
          <h2 class="max-w-xl text-4xl mt-8 mx-auto text-[#386B96]">Résultat de votre recherche</h2>
        </div>

      </div>
      <!-- fin partie texte -->

      <ul role=" list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">


        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-8 bg-[#dde9f4]">
            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
            <h3 class="mt-6 text-gray-900 text-sm font-medium">Prénom Nom</h3>
            <dl class="mt-1 flex-grow flex flex-col justify-between">
              <dt class="sr-only">Title</dt>
              <dd class="text-gray-500 text-sm">Réflexologie, Sophrologie</dd>
              <dt class="sr-only">Role</dt>
              <dd class="mt-3">
                <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
              </dd>
            </dl>
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="w-0 flex-1 flex">
                <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/mail -->
                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="ml-3">MESSAGE</span>
                </a>
              </div>
              <div class="-ml-px w-0 flex-1 flex">
                <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/calendar -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <span class="ml-3">PRENDRE RDV</span>
                </a>
              </div>
            </div>
          </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-8 bg-[#dde9f4]">
            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
            <h3 class="mt-6 text-gray-900 text-sm font-medium">Prénom Nom</h3>
            <dl class="mt-1 flex-grow flex flex-col justify-between">
              <dt class="sr-only">Title</dt>
              <dd class="text-gray-500 text-sm">Réflexologie, Sophrologie</dd>
              <dt class="sr-only">Role</dt>
              <dd class="mt-3">
                <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
              </dd>
            </dl>
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="w-0 flex-1 flex">
                <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/mail -->
                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="ml-3">MESSAGE</span>
                </a>
              </div>
              <div class="-ml-px w-0 flex-1 flex">
                <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/calendar -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <span class="ml-3">PRENDRE RDV</span>
                </a>
              </div>
            </div>
          </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-8 bg-[#dde9f4]">
            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
            <h3 class="mt-6 text-gray-900 text-sm font-medium">Prénom Nom</h3>
            <dl class="mt-1 flex-grow flex flex-col justify-between">
              <dt class="sr-only">Title</dt>
              <dd class="text-gray-500 text-sm">Réflexologie, Sophrologie</dd>
              <dt class="sr-only">Role</dt>
              <dd class="mt-3">
                <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
              </dd>
            </dl>
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="w-0 flex-1 flex">
                <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/mail -->
                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="ml-3">MESSAGE</span>
                </a>
              </div>
              <div class="-ml-px w-0 flex-1 flex">
                <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/calendar -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <span class="ml-3">PRENDRE RDV</span>
                </a>
              </div>
            </div>
          </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-8 bg-[#dde9f4]">
            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
            <h3 class="mt-6 text-gray-900 text-sm font-medium">Prénom Nom</h3>
            <dl class="mt-1 flex-grow flex flex-col justify-between">
              <dt class="sr-only">Title</dt>
              <dd class="text-gray-500 text-sm">Réflexologie, Sophrologie</dd>
              <dt class="sr-only">Role</dt>
              <dd class="mt-3">
                <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
              </dd>
            </dl>
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="w-0 flex-1 flex">
                <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/mail -->
                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="ml-3">MESSAGE</span>
                </a>
              </div>
              <div class="-ml-px w-0 flex-1 flex">
                <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/calendar -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <span class="ml-3">PRENDRE RDV</span>
                </a>
              </div>
            </div>
          </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-8 bg-[#dde9f4]">
            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
            <h3 class="mt-6 text-gray-900 text-sm font-medium">Prénom Nom</h3>
            <dl class="mt-1 flex-grow flex flex-col justify-between">
              <dt class="sr-only">Title</dt>
              <dd class="text-gray-500 text-sm">Réflexologie, Sophrologie</dd>
              <dt class="sr-only">Role</dt>
              <dd class="mt-3">
                <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
              </dd>
            </dl>
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="w-0 flex-1 flex">
                <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/mail -->
                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="ml-3">MESSAGE</span>
                </a>
              </div>
              <div class="-ml-px w-0 flex-1 flex">
                <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/calendar -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <span class="ml-3">PRENDRE RDV</span>
                </a>
              </div>
            </div>
          </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-8 bg-[#dde9f4]">
            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
            <h3 class="mt-6 text-gray-900 text-sm font-medium">Prénom Nom</h3>
            <dl class="mt-1 flex-grow flex flex-col justify-between">
              <dt class="sr-only">Title</dt>
              <dd class="text-gray-500 text-sm">Réflexologie, Sophrologie</dd>
              <dt class="sr-only">Role</dt>
              <dd class="mt-3">
                <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
              </dd>
            </dl>
          </div>
          <div>
            <div class="-mt-px flex divide-x divide-gray-200">
              <div class="w-0 flex-1 flex">
                <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/mail -->
                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                  </svg>
                  <span class="ml-3">MESSAGE</span>
                </a>
              </div>
              <div class="-ml-px w-0 flex-1 flex">
                <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                  <!-- Heroicon name: solid/calendar -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <span class="ml-3">PRENDRE RDV</span>
                </a>
              </div>
            </div>
          </div>
        </li>

        <!-- More people... -->
      </ul>
    </div>


  </div>


  @include('lesfooters/footer')


</body>

</html>