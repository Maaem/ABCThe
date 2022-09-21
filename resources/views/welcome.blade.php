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

<body class="bg-white">
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
            <button @click="isOpen = !isOpen" type="button"
              class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
              <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                <path fill-rule="evenodd"
                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                </path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="md:flex items-center" :class="isOpen ? 'block' : 'hidden'">
          <div class="flex flex-col text-gray-700 mt-2 md:flex-row md:mt-0 md:mx-1">
            <a class="my-1 text-sm  leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="/pages/about">QUI SOMMES-NOUS ?</a>
            <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="/pages/partenaires">NOS PARTENAIRES</a>
            <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="/pages/contact">CONTACTEZ-NOUS</a>
          </div>

          <div class="flex items-center py-2 -mx-1 md:mx-0">
            <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-[#386B96] font-medium text-white leading-5 md:mx-0 md:w-auto" href="/pages/connexion">SE CONNECTER</a>
          </div>

        </div>
      </div>
    </nav>
  </header>

  <!-- Fin de la nav bar -->

  <!-- début partie bleu -->

  <div
    class="grid grid-cols-3 place-items-center bg-[#dde9f4] text-center rounded-lg sm:p-6 dark:bg-gray-800 dark:border-gray-700 text-gray-600">

    <!-- les 2 personnes -->
    <div class="flex justify-start ml-8">
      <img class="object-contain h-48 w-96" src="/img/2personnes.png" alt="2 personnes debout">
    </div>

    <!-- les 2 phrases du milieu -->
    <div class="sm:py-12 sm:px-6 lg:px-8">
      <div class="">
        <h2 class="max-w-xl text-4xl mt-8 mx-auto text-gray-600"">Trouvez le <b>praticien</b> <br> adapté à votre besoin</h2>
        <p class=" max-w-xl mt-8 mx-auto text-base text-gray-600">Les <b>médecines complémentaires</b> peuvent <br>
          vous accompagner dans votre quotidien. Testez-les !</p>
      </div>
    </div>

    <!-- la femme assise-->
    <div class="flex justify-end">
      <img class="object-scale-down" src="img/femmeassise.png" alt="une femme assise">
    </div>
  </div>

  <!-- fin partie bleu -->

  <!-- début phrase -->

  <div
    class="my-8 p-4 w-full text-center rounded-lg border-0 sm:p-8 dark:bg-gray-800 dark:border-gray-700 text-gray-600 ">
    <h5 class="mb-2 text-3xl font-bold dark:text-white">Inscrivez-vous gratuitement</h5>
    <div class="justify-center items-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
    </div>
  </div>

  <!-- fin phrase -->

  <!-- début card 1-->

  <!-- essai 2 -->
  <div class="py-6 m-8 overflow-hidden">
    <div class="flex justify-center drop-shadow-2xl sm:px-6 lg:px-8">
      <div class="mx-auto w-96 h-96">

        <!-- bloc praticien -->
        <div class="mt-6 relative text-base max-w-prose mx-auto lg:mt-0 lg:max-w-none">
          <blockquote class="relative bg-white rounded-lg shadow-lg">
            <div class="rounded-t-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
              <h3 class="text-xl font-bold text-center text-[#52A033] ">Je suis un praticien</h3>
              <div class="relative text-lg text-gray-700 font-medium mt-8">
                <p class="mt-3 text-base text-center text-gray-500"> Pourquoi m'inscrire ? Ces pratiques non reconnues
                  méritent de l'être. Soyez visible et garantissez vos rendez-vous ! Participez à cette aventure et
                  rejoignez la communauté !</p>
              </div>
            </div>
            <cite
              class="relative flex items-center sm:items-start bg-gray-50 rounded-b-lg not-italic py-5 px-6 sm:py-5 sm:pl-12 sm:pr-10 sm:mt-10">
              <span class="relative sm:absolute sm:top-0 sm:transform sm:-translate-y-1/2">
                <img class="h-24 w-30" src="img/massage.png" alt="">
              </span>
              <span class="relative ml-4 text-indigo-300 font-semibold leading-6 sm:ml-24 sm:pl-1">
                <a href="pages/inscription" class="text-base ml-20 font-medium text-[#52A033]  hover:text-indigo-600">Je
                  m'inscris<span aria-hidden="true"> &rarr;</span></a>
              </span>
            </cite>
          </blockquote>
        </div>

        <!-- fin bloc praticien -->


      </div>
    </div>
  </div>

  <!-- fin card 1-->





  <!-- début footer -->

  <!-- début footer -->

  <footer class="bg-[#dde9f4]" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-10 lg:px-8">
        <div class="space-y-8 xl:col-span-1 flex justify-center mb-8">
            <img class="h-10" src="/img/1Fichier 91.png" alt="logo abcThérapeutes">
        </div>
        <div class="flex justify-center text-center">
            <!-- page dif -->
            <div class="md:grid md:grid-cols-3 md:gap-8 mb-20">
                <div>
                    <a class="my-1 text-sm  leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0"
                        href="/pages/about">
                        <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase">Qui sommes-nous ?
                        </h3>
                    </a>
                </div>
                <div class="mt-12 md:mt-0">
                    <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0"
                        href="/pages/partenaires">
                        <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase">Nos Partenaires
                        </h3>
                    </a>
                </div>
                <div class="mt-12 md:mt-0">
                    <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0"
                        href="">
                        <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase">Mentions Légales
                        </h3>
                    </a>
                </div>
                <div>
                  <a class="my-1 text-sm  leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0"
                      href="">
                      <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase">CGU
                      </h3>
                  </a>
              </div>

              <div>
                <a class="my-1 text-sm  leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0"
                    href="">
                    <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase">FAQ
                    </h3>
                </a>
            </div>

                <div class="mt-12 md:mt-0">
                    <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0"
                        href="/pages/contact">
                        <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase">Contact</h3>
                    </a>
                </div>
            </div>
        </div>
        <!-- mots clés -->
        <div class="md:gap-8">
            <div class="flex justify-center md:flex flex-wrap text-center">
                <div class="md:mt-0 lg:ml-10 lg:mb-18">
                    <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase sm:mr-4">Les pratiques
                        les plus recherchées</h3>
                    <ul role="list" class="mt-4 space-y-4 sm:mr-6">
                        <a href="#" class="text-base text-gray-600 hover:text-gray-600 ml-2 sm:text-justify">
                            Shiatsu </a>
                        <span class="ml-2">-</span>
                        <a href="#" class="text-base text-gray-600 hover:text-gray-600 ml-2"> Réflexo </a>
                        <span class="ml-2">-</span>
                        <a href="#" class="text-base text-gray-600 hover:text-gray-600 ml-2"> XXX </a>


                    </ul>
                </div>

                <div class="mt-12 md:mt-0 lg:ml-10 lg:mr-6 md:gap-8">
                    <h3 class="text-sm font-semibold text-gray-600 tracking-wider uppercase sm:mr-4">Les maux clés
                        les plus recherchés</h3>
                    <ul role="list" class="mt-4 space-y-4 sm:mr-6">
                        <a href="#" class="text-base text-gray-600 hover:text-gray-600 lg:ml-2"> Femme enceinte </a>
                        <span class="ml-2">-</span>
                        <a href="#" class="text-base text-gray-600 hover:text-gray-600 ml-2"> Migraine </a>
                        <span class="ml-2">-</span>
                        <a href="#" class="text-base text-gray-600 hover:text-gray-600 ml-2"> XXX </a>
                    </ul>
                </div>
            </div>
        </div>

        <!-- logo -->
        <div class="flex space-x-6 justify-center mt-8">
            <a href="https://www.facebook.com/AbcTh%C3%A9rapeutes-104488444791022"
                class="text-gray-600 hover:text-gray-600">
                <span class="sr-only">Facebook</span>
                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd" />
                </svg>
            </a>

            <a href="https://www.instagram.com/abctherapeutes.fr/?hl=fr" class="text-gray-600 hover:text-gray-600">
                <span class="sr-only">Instagram</span>
                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd" />
                </svg>
            </a>

            <a href="https://www.linkedin.com/company/69253945" class="text-gray-600 hover:text-gray-600">
                <span class="sr-only">Linkedin</span>
                <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                    </path>
                </svg>
            </a>
        </div>

        <div class="mt-2 border-t border-gray-200 pt-8">
            <p class="text-base text-center text-gray-600 xl:text-center">abcThérapeutes.fr &copy; 2022</p>
        </div>
    </div>
</footer>

<!-- fin footer -->




  <!-- fin footer -->
</body>

</html>