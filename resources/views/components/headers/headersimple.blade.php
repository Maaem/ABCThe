
<body class="">
  <!-- Début de la nav bar -->

  <!-- alpine.js -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  <header x-data="{ isOpen: false }" class="bg-white">
    <nav class="container mx-auto px-6 py-3">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/"><img class="h-8 w-auto sm:h-10" src="/img/1Fichier 91.png" alt="Logo abcThérapeutes"></a>
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
                <a class="my-1 text-sm  leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="about">QUI SOMMES-NOUS ?</a>
                <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="partenaires">NOS PARTENAIRES</a>
                <a class="my-1 text-sm leading-5 hover:text-blue-600 hover:no-underline md:mx-4 md:my-0" href="contact">CONTACTEZ-NOUS</a>
              </div>

                <div class="flex items-center py-2 -mx-1 md:mx-0">
                    <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-[#386B96] font-medium text-white leading-5 md:mx-0 md:w-auto" href="connexion">SE CONNECTER</a>
                </div>

            </div>
        </div>
    </nav>
</header>

  <!-- Fin de la nav bar -->
