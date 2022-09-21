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

    <title>ABC Thérapeutes - Mot de passe oublié ?</title>
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

    <!-- début partie bleu -->

    <div class="grid grid-cols-3 place-items-center bg-[url('/img/fondbleu1.png')] bg-no-repeat bg-cover text-center rounded-lg sm:p-10 dark:bg-gray-800 dark:border-gray-700 text-gray-600 ">

        <!-- les 2 personnes -->
        <div class="flex justify-start ml-8">
        </div>

        <!-- les 2 phrases du milieu -->
        <div class="sm:py-12 sm:px-6 lg:px-8">
            <div class="">
                <h2 class="max-w-xl text-4xl mt-8 mx-auto text-gray-600"">Mot de passe oublié</h2>
      </div>
    </div>

    <!-- la femme assise-->
    <div class=" flex justify-end">
                    <img class="object-scale-down" src="/img/femmeassise.png" alt="une femme assise">
            </div>
        </div>

        <!-- fin partie bleu -->

        <!-- insciption -->
        <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 drop-shadow-lg sm:rounded-lg sm:px-10">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <label for="email" class="block text-sm font-medium text-[#386B96]">Email</label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            

                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#386B96] hover:bg-[#dde9f4] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Réinitialiser mon mot de passe</button>
                        </div>

                        <div class="text-sm text-center">
                            <a href="connexion" class="font-medium text-[#386B96] hover:text-[#dde9f4]"> Se connecter </a>
                        </div>

                    </form>

                    
                </div>
            </div>
        </div>


        <!-- fin Mot de passe oublié ? -->



        <!-- début footer -->

        @include('components/lesfooters/footer')


        <!-- fin footer -->
</body>

</html>