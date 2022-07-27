<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
  <title>ABC Thérapeutes</title>
</head>

<body>
  <!-- Début de la nav bar -->
  <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="" class="flex items-center">
        <img class="" src="img/logo.png" alt="ABCTherapeutes Logo">
        <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">ABCThérapeutes</span> -->
      </a>
      <div class="flex md:order-2">
        <button type="button" class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-900 dark:focus:ring-blue-800">Se Connecter</button>
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1 text-blue-900	" id="navbar-cta">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Qui sommes-nous ?</a>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Nos Partenaires</a>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contactez-nous</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Fin de la nav bar -->

  <!-- début partie bleu -->

  <div class="bg-no-repeat bg-cover p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 text-blue-900" style="background-image: url('img/fondbleu1.png')">

    <div class="flex justify-start">
      <img class="w-20" src="img/femmedebout.png" alt="une femme debout">
      <img class="w-20" src="img/hommedebout.png" alt="un homme debout">
    </div>

    <h5 class="mb-2 text-3xl font-bold dark:text-white flex justify-center">Trouvez le praticien
      adapté à votre besoin</h5>

    <p class="mb-5 text-base sm:text-lg dark:text-gray-400">Les médecines complémentaires peuvent vous accompagner dans votre quotidien. Testez-les !</p>
    <div class="flex justify-center">
      <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Dans quelle ville êtes-vous ?</button>
    </div>

    <div class="flex justify-end">
      <img class="w-30" src="img/femmeassise.png" alt="une femme assise">
    </div>
  </div>




  <!-- fin partie bleu -->

  <!-- début card 1-->
  <div class="grid grid-rows-4 grid-flow-col gap-4 text-blue-900">

    <div class="scroll-ml-6 snap-start m-8">
      <a href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="text-center mb-2 text-1xl font-bold tracking-tight dark:text-white">Je suis un praticien</h5>
        <p class="text-center font-normal dark:text-gray-400">Pourquoi m'inscrire ?
          Ces pratiques non reconnues
          méritent de l'être. Soyez visible et
          garantissez vos rendez-vous !
          Participez à cette aventure et
          rejoignez la communauté!</p>
        <div class="flex justify-center">
          <button type="button" class="m-8 text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-900 focus:outline-none dark:focus:ring-blue-800">Je m'inscris</button>
        </div>
      </a>
    </div>

    <div class="scroll-ml-6 snap-start m-8 text-blue-900">
      <a href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="text-center mb-2 text-1xl font-bold tracking-tight dark:text-white">Je suis un patient</h5>
        <p class="text-center font-normal dark:text-gray-400">Ne cherchez plus !
          Une simple recherche suffira à
          trouver un praticien adapté à votre
          besoin. Si vous ne trouvez pas,
          contactez-nous!</p>
        <div class="flex justify-center">
          <button type="button" class="m-8 text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-900 focus:outline-none dark:focus:ring-blue-800">Je m'inscris</button>
        </div>
      </a>
    </div>

    <div class="scroll-ml-6 snap-start m-8 text-blue-900">
      <a href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="text-center mb-2 text-1xl font-bold tracking-tight dark:text-white">Je suis une entreprise</h5>
        <p class="text-center font-normal dark:text-gray-400">Pro.abcThérapeutes
          a été pensé pour Améliorer la Qualité de Vie au Travail des collaborateurs grâce au bien-être thérapeutique.
          Profitez de notre accompagnement sur mesure!</p>
        <div class="flex justify-center">
          <button type="button" class="m-8 text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-900 focus:outline-none dark:focus:ring-blue-800">En savoir +</button>
        </div>
      </a>
    </div>

  </div>
  <!-- fin card 1-->

  <!-- début phrase -->

  <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 text-blue-900">
    <h5 class="mb-2 text-3xl font-bold dark:text-white">Ils nous ont rejoint</h5>
    <p class="mb-5 text-base sm:text-lg dark:text-gray-400">Ils nous ont rejoint</p>
    <div class="justify-center items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
    </div>
  </div>

  <!-- fin phrase -->



  <!-- début card 2-->

  <div class="snap-x grid grid-rows-4 grid-flow-col gap-4 text-blue-900	">

    <div class="scroll-ml-6 snap-start m-8">
      <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="image.png" alt="">
        <div class="flex flex-col justify-between p-2 leading-normal">
          <h5 class="mb-2 text-1xl font-bold tracking-tight dark:text-white">Elodie RUBEN</h5>
          <p class="mb-3 font-normal dark:text-gray-400">Réflexologie,
            Sophrologie</p>
          <p class="mb-3 font-normal dark:text-gray-400">MONTREUIL
            PARIS 15e</p>
        </div>
      </a>
    </div>

    <div class="scroll-ml-6 snap-start m-8 text-blue-900	">
      <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="image.png" alt="">
        <div class="flex flex-col justify-between p-2 leading-normal">
          <h5 class="mb-2 text-1xl font-bold tracking-tight dark:text-white">Elodie RUBEN</h5>
          <p class="mb-3 font-normal dark:text-gray-400">Réflexologie,
            Sophrologie</p>
          <p class="mb-3 font-normal dark:text-gray-400">MONTREUIL
            PARIS 15e</p>
        </div>
      </a>
    </div>

    <div class="scroll-ml-6 snap-start m-8 text-blue-900	">
      <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="image.png" alt="">
        <div class="flex flex-col justify-between p-2 leading-normal">
          <h5 class="mb-2 text-1xl font-bold tracking-tight dark:text-white">Elodie RUBEN</h5>
          <p class="mb-3 font-normal dark:text-gray-400">Réflexologie,
            Sophrologie</p>
          <p class="mb-3 font-normal dark:text-gray-400">MONTREUIL
            PARIS 15e</p>
        </div>
      </a>
    </div>

    <div class="scroll-ml-6 snap-start m-8 text-blue-900">
      <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-1/2 h-20 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="image.png" alt="">
        <div class="flex flex-col justify-between p-2 leading-normal">
          <h5 class="mb-2 text-1xl font-bold tracking-tight dark:text-white">Elodie RUBEN</h5>
          <p class="mb-3 font-normal dark:text-gray-400">Réflexologie,
            Sophrologie</p>
          <p class="mb-3 font-normal dark:text-gray-400">MONTREUIL
            PARIS 15e</p>
        </div>
      </a>
    </div>
  </div>
  <!-- fin card 2-->

  <!-- début phrase de fin de page -->

  <div class="p-4 w-full text-center bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 text-blue-900">
    <h5 class="mb-2 text-3xl font-bold dark:text-white">Comment ça marche ?</h5>
    <p class="mb-5 text-base sm:text-lg dark:text-gray-400">Commençons par indiquer votre ville de recherche</p>
    <div class="flex justify-center">
      <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-blue-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Dans quelle ville êtes-vous ?</button>
    </div>
  </div>

  <!-- fin phrase de fin de page -->

  <!-- début footer -->

  <footer class="text-center bg-blue-900	 text-white">
    <div class="text-center p-4">
      © 2022 Copyright :
      <a class="text-whitehite" href="">ABCThérapeutes</a>
    </div>
  </footer>

  <!-- fin footer -->


  <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

</body>

</html>