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
              <svg name="menu" onclick="Menu(e)" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <!--
                Icon when menu is open.
    
                Heroicon name: outline/x
    
                Menu open: "block", Menu closed: "hidden"
              -->
              <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" aria-hidden="true">
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
                    id="user-menu-button" aria-expanded="false" aria-haspopup="true" x-on:click="open = !open">
                    <span class="sr-only">menu</span>
                    <img class="h-10 w-10 rounded-full"
                      src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                      alt="">
                  </button>
                </div>

                <div :class="open ? 'block' : 'hidden'"
                  class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                  role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                    id="user-menu-item-0">Se connecter</a>
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

    <div class=" flex">
      <aside class="w-80" aria-label="Sidebar">

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
      <div class="flex-1 mx-20">

        <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
          <div class="space-y-6 sm:px-6 lg:col-span-9 lg:px-0">
            <form action="#" method="POST">
              <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
                  <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                    <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what
                      you share.</p>
                  </div>

                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="company-website" class="block text-sm font-medium text-gray-700">Username</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <span
                          class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm">workcation.com/</span>
                        <input type="text" name="username" id="username" autocomplete="username"
                          class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    <div class="col-span-3">
                      <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                      <div class="mt-1">
                        <textarea id="about" name="about" rows="3"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                          placeholder="you@example.com"></textarea>
                      </div>
                      <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are hyperlinked.
                      </p>
                    </div>

                    <div class="col-span-3">
                      <label class="block text-sm font-medium text-gray-700">Photo</label>
                      <div class="mt-1 flex items-center">
                        <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                          <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                              d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                        </span>
                        <button type="button"
                          class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Change</button>
                      </div>
                    </div>

                    <div class="col-span-3">
                      <label class="block text-sm font-medium text-gray-700">Cover photo</label>
                      <div
                        class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                        <div class="space-y-1 text-center">
                          <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                            viewBox="0 0 48 48" aria-hidden="true">
                            <path
                              d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <div class="flex text-sm text-gray-600">
                            <label for="file-upload"
                              class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                              <span>Upload a file</span>
                              <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                          </div>
                          <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                  <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                </div>
              </div>
            </form>

            <form action="#" method="POST">
              <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
                  <div>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can recieve mail.</p>
                  </div>

                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                        class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                      <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                        class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                      <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                      <input type="text" name="email-address" id="email-address" autocomplete="email"
                        class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                      <select id="country" name="country" autocomplete="country-name"
                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                      </select>
                    </div>

                    <div class="col-span-6">
                      <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                      <input type="text" name="street-address" id="street-address" autocomplete="street-address"
                        class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                      <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                      <input type="text" name="city" id="city" autocomplete="address-level2"
                        class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                      <input type="text" name="region" id="region" autocomplete="address-level1"
                        class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                      <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                        class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                  <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                </div>
              </div>
            </form>

          </div>
        </div>



      </div>


    </div>



    @include('/components/lesfooters/footer')

  </body>

  </html>