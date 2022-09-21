<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <!-- lien tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- lien flowbite -->
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
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

<body class="bg-[#dde9f4]">
  <!-- Début de la nav bar -->

  <!-- alpine.js -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  <header x-data="{ isOpen: false }" class="bg-white">
    <nav class="container mx-auto px-6 py-3">
      <div class="flex flex-col md:flex-row md:justify-between md:items-center">
        <div class="flex justify-between items-center">
          <div class="flex items-center">
            <img class="h-8 w-auto sm:h-10" src="img/1Fichier 91.png" alt="Logo abcThérapeutes">
          </div>

          <!-- Mobile menu button -->
          <div class="flex md:hidden">
            <button @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
              <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="md:flex items-center" :class="isOpen ? 'block' : 'hidden'">
          <div class="flex flex-col text-gray-700 mt-2 md:flex-row md:mt-0 md:mx-1">
            <a class="my-1 text-sm  leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">QUI SOMMES-NOUS ?</a>
            <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">NOS PARTENAIRES</a>
            <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="#">CONTACTEZ-NOUS</a>
          </div>

          <div class="flex items-center py-2 -mx-1 md:mx-0">
            <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-[#386B96] font-medium text-white leading-5 hover:bg-white md:mx-0 md:w-auto" href="#">SE CONNECTER</a>
          </div>

        </div>
      </div>
    </nav>
  </header>

  <!-- Fin de la nav bar -->

  <!-- début partie bleu -->

  <div class="grid grid-cols-3 place-items-center bg-white text-center rounded-lg sm:p-10 dark:bg-gray-800 dark:border-gray-700 text-gray-600 ">

    <!-- les 2 personnes -->
    <div class="flex justify-start ml-8">
      <img class="object-contain h-48 w-96" src="/img/2personnes.png" alt="2 personnes debout">
    </div>

    <!-- les 2 phrases du milieu -->
    <div class="sm:py-12 sm:px-6 lg:px-8">
      <div class="">
        <h2 class="max-w-xl text-4xl mt-8 mx-auto text-gray-600"">Trouvez le <b>praticien</b> <br> adapté à votre besoin</h2>
        <p class=" max-w-xl mt-8 mx-auto text-base text-gray-600">Les <b>médecines complémentaires</b> peuvent <br> vous accompagner dans votre quotidien. Testez-les !</p>
      </div>
    </div>

    <!-- la femme assise-->
    <div class="flex justify-end">
      <img class="object-scale-down" src="img/femmeassise.png" alt="une femme assise">
    </div>
  </div>

  <!-- fin partie bleu -->

  <!-- début card 1-->

  <!-- essai 2 -->
  <div class="py-16 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 space-y-8 sm:px-6 lg:px-8">
      <div class="lg:grid lg:grid-cols-3 lg:gap-8 lg:items-start">

        <!-- bloc pratitien -->
        <div class="mt-12 relative text-base max-w-prose mx-auto lg:mt-0 lg:max-w-none">
          </svg>
          <blockquote class="relative bg-white rounded-lg shadow-lg">
            <div class="rounded-t-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
              <h3 class="text-xl font-bold text-center text-[#52A033] ">Je suis un praticien</h3>
              <div class="relative text-lg text-gray-700 font-medium mt-8">
                <p class="mt-3 text-base text-center text-gray-500"> Pourquoi m'inscrire ? Ces pratiques non reconnues méritent de l'être. Soyez visible et garantissez vos rendez-vous ! Participez à cette aventure et rejoignez la communauté !</p>
              </div>
            </div>
            <cite class="relative flex items-center sm:items-start bg-gray-50 rounded-b-lg not-italic py-5 px-6 sm:py-5 sm:pl-12 sm:pr-10 sm:mt-10">
              <span class="relative sm:absolute sm:top-0 sm:transform sm:-translate-y-1/2">
                <img class="h-24 w-30" src="img/massage.png" alt="">
              </span>
              <span class="relative ml-4 text-indigo-300 font-semibold leading-6 sm:ml-24 sm:pl-1">
                <a href="#" class="text-base ml-20 font-medium text-[#52A033]  hover:text-indigo-600">Je m'inscris<span aria-hidden="true"> &rarr;</span></a>
              </span>
            </cite>
          </blockquote>
        </div>

        <!-- fin bloc pratitien -->

        <!-- bloc patient -->
        <div class="mt-12 relative text-base max-w-prose mx-auto lg:mt-0 lg:max-w-none">
          </svg>
          <blockquote class="relative bg-white rounded-lg shadow-lg">
            <div class="rounded-t-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
              <h3 class="text-xl font-bold text-center text-[#386B96]">Je suis un patient</h3>
              <div class="relative text-lg text-gray-700 font-medium mt-8">
                <p class="mt-3 text-base text-center text-gray-500"> Ne cherchez plus ! <br>Une simple recherche suffira à trouver un praticien adapté à votre besoin. Si vous ne trouvez pas, contactez-nous ! <br> <br> </p>
              </div>
            </div>
            <cite class="relative flex items-center sm:items-start bg-gray-50 rounded-b-lg not-italic py-5 px-6 sm:py-5 sm:pl-12 sm:pr-10 sm:mt-10">
              <span class="relative sm:absolute sm:top-0 sm:transform sm:-translate-y-1/2">
                <img class="h-24 w-30" src="img/hommeorange.png" alt="">
              </span>
              <span class="relative ml-4 text-indigo-300 font-semibold leading-6 sm:ml-24 sm:pl-1">
                <a href="#" class="text-base ml-20 font-medium text-[#386B96] hover:text-indigo-600">Je m'inscris<span aria-hidden="true"> &rarr;</span></a>
              </span>
            </cite>
          </blockquote>
        </div>

        <!-- fin bloc patient -->


        <!-- bloc entreprise -->
        <div class="mt-12 relative text-base max-w-prose mx-auto lg:mt-0 lg:max-w-none">
          </svg>
          <blockquote class="relative bg-white rounded-lg shadow-lg">
            <div class="rounded-t-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
              <h3 class="text-xl font-bold text-center text-[#A41C1D]">Je suis une entreprise</h3>
              <div class="relative text-lg text-gray-700 font-medium mt-8">
                <p class="mt-3 text-base text-center text-gray-500">Pro.abcThérapeutes a été pensé pour Améliorer la Qualité de Vie au Travail des collaborateurs grâce au bien-être thérapeutique. Profitez de notre accompagnement sur mesure !</p>
              </div>
            </div>
            <cite class="relative flex items-center sm:items-start bg-gray-50 rounded-b-lg not-italic py-5 px-6 sm:py-5 sm:pl-12 sm:pr-10 sm:mt-10">
              <span class="relative sm:absolute sm:top-0 sm:transform sm:-translate-y-1/2">
                <img class="h-24 w-30" src="img/massage2.png" alt="">
              </span>
              <span class="relative ml-4 text-indigo-300 font-semibold leading-6 sm:ml-24 sm:pl-1">
                <a href="#" class="text-base ml-20 font-medium text-[#A41C1D] hover:text-indigo-600">En savoir +<span aria-hidden="true"> &rarr;</span></a>
              </span>
            </cite>
          </blockquote>
        </div>

        <!-- fin bloc entreprise -->

      </div>
    </div>
  </div>



  <!-- fin card 1-->


  <!-- début comment ça marche -->

  <div class="relative bg-white">
    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-4 lg:items-start">
      <div class="relative sm:py-16 lg:py-0">
        <div class="relative ml-28 overflow-hidden">
          <img class="object-contain h-96 w-64 ml-12" src="/img/1Fichier 141.png" alt="">
        </div>
      </div>

      <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">

        <div class="sm:pt-16 lg:pt-20 mr-20">
          <div class="p-4 w-full sm:p-8 text-gray-600">
            <h2 class="mb-2 text-3xl text-center font-bold dark:text-white">Comment ça marche ?</h2>
            <p class="mb-5 text-lg text-center sm:text-lg">Commençons par indiquer votre ville de recherche</p>
            <div class="flex justify-center">
              <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-600  focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-600 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Dans quelle ville êtes-vous ?</button>
              <img class="object-scale-down h-12 w-8" src="img/icon-33.png" alt="une loupe">
            </div>
            <div class="flex justify-center ml-6">
              <img class="object-scale-down h-12 w-8 ml-6" src="img/groupe779.png" alt="">
              <button type="button" class="geo justify-center mr-20 text-sm font-medium text-gray-600 focus:outline-none rounded-lg hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-600 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Me géolocaliser</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- fin comment ça marche -->

  <!-- début phrase -->

  <div class="my-8 p-4 w-full text-center rounded-lg border-0 sm:p-8 dark:bg-gray-800 dark:border-gray-700 text-gray-600 ">
    <h5 class="mb-2 text-3xl font-bold dark:text-white">Ils nous ont rejoint</h5>
    <div class="justify-center items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
    </div>
  </div>

  <!-- fin phrase -->


  <!-- début card practicien-->
  <ul role="list" class="grid grid-cols-1 gap-2 sm:grid-cols-3 lg:grid-cols-3">
    <li class="col-span-1 m-8 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate text-gray-600 ">
          <div class="flex items-center space-x-3 text-gray-600">
            <h3 class="text-sm font-bold truncate">Prénom Nom</h3>
          </div>
          <p class="mt-1  text-sm truncate">Réflexologie, Sophrologie</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 65 avenue du Gnl de Gaulle, MELUN</p>
        </div>
        <img class="w-20 h-20 border-gray-900 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-bl-lg hover:text-gray-600 ">
              <!-- Heroicon name: solid/mail -->
              <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              <span class="ml-3">MESSAGE</span>
            </a>
          </div>
          <div class="-ml-px w-0 flex-1 flex">
            <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-br-lg hover:text-gray-600 ">
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

    <li class="col-span-1 m-8 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate text-gray-600 ">
          <div class="flex items-center space-x-3 text-gray-600">
            <h3 class=" text-sm font-bold truncate">Prénom Nom</h3>
          </div>
          <p class="mt-1  text-sm truncate">Réflexologie, Sophrologie</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 65 avenue du Gnl de Gaulle, MELUN</p>
        </div>
        <img class="w-20 h-20 border-gray-900 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-bl-lg hover:text-gray-600 ">
              <!-- Heroicon name: solid/mail -->
              <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              <span class="ml-3">MESSAGE</span>
            </a>
          </div>
          <div class="-ml-px w-0 flex-1 flex">
            <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-br-lg hover:text-gray-600 ">
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

    <li class="col-span-1 m-8 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate text-gray-600">
          <div class="flex items-center space-x-3 text-gray-600">
            <h3 class="text-sm font-bold truncate">Prénom Nom</h3>
          </div>
          <p class="mt-1 text-sm truncate">Réflexologie, Sophrologie</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 65 avenue du Gnl de Gaulle, MELUN</p>
        </div>
        <img class="w-20 h-20 border-gray-900 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-bl-lg hover:text-gray-600 ">
              <!-- Heroicon name: solid/mail -->
              <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              <span class="ml-3">MESSAGE</span>
            </a>
          </div>
          <div class="-ml-px w-0 flex-1 flex">
            <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-br-lg hover:text-gray-600 ">
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

    <li class="col-span-1 m-8 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate text-gray-600">
          <div class="flex items-center space-x-3 text-gray-600">
            <h3 class="text-sm font-bold truncate">Prénom Nom</h3>
          </div>
          <p class="mt-1 text-sm truncate">Réflexologie, Sophrologie</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 65 avenue du Gnl de Gaulle, MELUN</p>
        </div>
        <img class="w-20 h-20 border-gray-900 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-bl-lg hover:text-gray-600 ">
              <!-- Heroicon name: solid/mail -->
              <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              <span class="ml-3">MESSAGE</span>
            </a>
          </div>
          <div class="-ml-px w-0 flex-1 flex">
            <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-br-lg hover:text-gray-600 ">
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

    <li class="col-span-1 m-8 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate text-gray-600">
          <div class="flex items-center space-x-3 text-gray-600">
            <h3 class="text-sm font-bold truncate">Prénom Nom</h3>
          </div>
          <p class="mt-1 text-sm truncate">Réflexologie, Sophrologie</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 65 avenue du Gnl de Gaulle, MELUN</p>
        </div>
        <img class="w-20 h-20 border-gray-900 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-bl-lg hover:text-gray-600 ">
              <!-- Heroicon name: solid/mail -->
              <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              <span class="ml-3">MESSAGE</span>
            </a>
          </div>
          <div class="-ml-px w-0 flex-1 flex">
            <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-br-lg hover:text-gray-600 ">
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

    <li class="col-span-1 m-8 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate text-gray-600">
          <div class="flex items-center space-x-3 text-gray-600">
            <h3 class="text-sm font-bold truncate">Prénom Nom</h3>
          </div>
          <p class="mt-1  text-sm truncate">Réflexologie, Sophrologie</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 25 rue de Paris, PARIS 12e</p>
          <p class="flex-shrink-0  py-0.5 text-xs font-medium"> 65 avenue du Gnl de Gaulle, MELUN</p>
        </div>
        <img class="w-20 h-20 border-gray-900 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-bl-lg hover:text-gray-600 ">
              <!-- Heroicon name: solid/mail -->
              <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
              <span class="ml-3">MESSAGE</span>
            </a>
          </div>
          <div class="-ml-px w-0 flex-1 flex">
            <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-600  font-medium border border-transparent rounded-br-lg hover:text-gray-600 ">
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
  </ul>

  <!-- fin card practicien-->


  <!-- début footer -->

  @include('/lesfooters/footer')


  <!-- fin footer -->
</body>

</html>