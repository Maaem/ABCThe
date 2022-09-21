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
  <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">


    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200" x-data="{ 'showModal': false }">
      <button class="flex-1 flex flex-col p-8 bg-[#dde9f4]" @click="showModal = true">
        <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        <h3 class="mt-6 ml-32 text-gray-900 text-sm font-medium">Prénom Nom</h3>
        <dl class="mt-1 flex-grow flex flex-col justify-between ml-20">
          <dt class="sr-only">Title</dt>
          <dd class="text-gray-500 text-sm">Réflexologie, Sophrologie</dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
          </dd>
        </dl>
      </button>
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

      <!-- modal -->
      <!-- This example requires Tailwind CSS v2.0+ -->
      <div class="relative z-10" role="dialog" aria-modal="true" x-show="showModal">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0"></div>

        <div class="fixed inset-0 overflow-hidden">
          <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
              <!--
          Slide-over panel, show/hide based on slide-over state.

          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
              <div class="pointer-events-auto w-screen max-w-md">
                <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                  <div class="px-4 py-6 sm:px-6">
                    <div class="flex items-start justify-between">
                      <h2 id="slide-over-heading" class="text-lg font-medium text-gray-900">Profile</h2>
                      <div class="ml-3 flex h-7 items-center">
                        <button type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500" @click="showModal = false">
                          <span class="sr-only">Close panel</span>
                          <!-- Heroicon name: outline/x -->
                          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Main -->
                  <div>
                    <div class="pb-1 sm:pb-6">
                      <div>
                        <div class="relative h-40 sm:h-56">
                          <img class="absolute h-full w-full object-cover" src="https://images.unsplash.com/photo-1501031170107-cfd33f0cbdcc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&h=600&q=80" alt="">
                        </div>
                        <div class="mt-6 px-4 sm:mt-8 sm:flex sm:items-end sm:px-6">
                          <div class="sm:flex-1">
                            <div>
                              <div class="flex items-center">
                                <h3 class="text-xl font-bold text-gray-900 sm:text-2xl">Mme Prénom Nom</h3>
                                <span class="ml-2.5 inline-block h-2 w-2 flex-shrink-0 rounded-full bg-green-400">
                                  <span class="sr-only">Online</span>
                                </span>
                              </div>
                              <p class="text-sm text-gray-500">Réflexologie, Sophrologie</p>
                            </div>
                            <div class="mt-5 flex flex-wrap space-y-3 sm:space-y-0 sm:space-x-3"> 
                              <button type="button" class="inline-flex w-full flex-shrink-0 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:flex-1">EN CABINET</button>
                              <button type="button" class="inline-flex w-full flex-1 items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">A DOMICILE</button>
                              <div class="ml-3 inline-flex sm:ml-0">
                                <!-- <div class="relative inline-block text-left">
                                  <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white p-2 text-sm font-medium text-gray-400 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="options-menu-button" aria-expanded="false" aria-haspopup="true" @click="open = !open">
                                    <span class="sr-only">Open options menu</span>
                                    <!-- Heroicon name: solid/dots-vertical 
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                  </button>

                                  <!--
                              Dropdown panel, show/hide based on dropdown state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95" 
                            
                                  <div class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                      <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" 
                                      <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-0">View profile</a>
                                      <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-item-1">Copy profile link</a>
                                    </div>
                                  </div>
                                 </div>  -->
                              </div>
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 pt-5 pb-5 sm:px-0 sm:pt-0">
                      <dl class="space-y-8 px-4 sm:space-y-6 sm:px-6">
                        <div>
                          <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Descriptif</dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                            <p>Enim feugiat ut ipsum, neque ut. Tristique mi id elementum praesent. Gravida in tempus feugiat netus enim aliquet a, quam scelerisque. Dictumst in convallis nec in bibendum aenean arcu.</p>
                          </dd>
                        </div>
                        <div>
                          <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Cabinets :</dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">25 rue de Paris, PARIS 12e</dd>
                          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">65 avenue du Gnl de Gaulle, MELUN</dd>
                        </div>
                        <div>
                          <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Clientèle suivie</dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">Symptômes suivis.com</dd>
                        </div>
                        <div>
                          <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Symptômes suivis</dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">Symptômes suivis.com</dd>
                        </div>
                        <div>
                          <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Pathologies suivies</dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                            <time datetime="1988-06-23"> June 23, 1988 </time>
                          </dd>
                        </div>
                      </dl>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- fin modal -->
    </li>



    <!-- More people... -->
  </ul>


  <!-- fin side bar -->



</body>

</html>