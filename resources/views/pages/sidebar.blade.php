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

  <!-- Background color split screen for large screens -->
  <div aria-hidden="true"></div>
  <div aria-hidden="true"></div>
  <div class="relative flex min-h-full flex-col">

    <!--  sidebar & contenu -->
    <div class="min-w-0 flex-1 bg-white xl:flex">
      <!-- Account profile -->
      <div class="bg-[#dde9f4]">
        <div class="bg-[#dde9f4] xl:w-80 p-4 xl:flex-shrink-0 xl:border-r xl:border-gray-200">
          <div class="flex-1 space-y-8">
            <div class="space-y-8 sm:flex sm:items-center sm:justify-between sm:space-y-0 xl:block xl:space-y-8">
              <div class="">
                <!-- logo -->
                <div class="flex justify-center mt-16">
                  <img class="h-8 w-auto sm:h-10" src="/img/1Fichier 91.png" alt="Logo abcThérapeutes">
                </div>

              </div>
              <div class="relative z-10 flex items-baseline justify-center pt-12 pb-6 border-b border-gray-200">
                <h1 class="text-xl font-extrabold tracking-tight text-black">Filtrer</h1>
              </div>
              <!-- Action buttons -->
              <div class="flex flex-col sm:flex-row xl:flex-col">
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

                      <ul x-show="open" class="pt-6" id="filter-section-1">
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
                      </ul>
                    </div>
                  </li>
                  <li>

                    <!-- essai 2 seance -->

                    <div x-data="{ open: false }">
                      <div class="relative mt-1">
                        <button type="button" class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label" @click="open = true">

                          <span class="flex text-lg">
                            <!-- icon par qui -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-[#386B96]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            Par qui ?
                          </span>
                          <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                            <!-- Heroicon name: mini/chevron-up-down -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
                            </svg>
                          </span>
                        </button>

                        <ul class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3" x-show="open" @click.outside="open = false">

                          <li class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4" id="listbox-option-0" role="option">
                            <span class="font-normal block truncate hover:font-semibold">Une praticienne</span>

                            <span class=" text-white hover:text-indigo-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                              <!-- Heroicon name: mini/check -->
                              <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                              </svg>
                            </span>
                          </li>

                          <!-- More items... -->
                          <li class="text-gray-900 relative cursor-default select-none py-2 pl-8 pr-4" id="listbox-option-0" role="option">
                            <span class="font-normal hover:font-semibold block truncate">Un praticien</span>

                            <!--
          Checkmark, only display for selected option.

          Highlighted: "text-white", Not Highlighted: "text-indigo-600"
        -->
                            <span class=" text-white hover:text-indigo-600 absolute inset-y-0 left-0 flex items-center pl-1.5">
                              <!-- Heroicon name: mini/check -->
                              <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                              </svg>
                            </span>
                          </li>


                        </ul>
                      </div>
                    </div>

                    <!-- fin essai 2 seance -->

                    <!-- essai 3 -->


                    <!-- essai 3 -->
                  </li>

                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- contenu principal -->




    </div>


  </div>






  @include('/lesfooters/footer')



</body>

</html>