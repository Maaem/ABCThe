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

    <title>ABC Thérapeutes - Connexion</title>
</head>

<body class="bg-white">
    <!-- Début de la nav bar -->

    <!-- alpine.js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @include('/components/headers/headersimple')


    <!-- Fin de la nav bar -->

    <!-- début partie bleu -->

    <div
        class="grid grid-cols-3 place-items-center bg-[url('/img/fondbleu1.png')] bg-no-repeat bg-cover text-center rounded-lg sm:p-10 dark:bg-gray-800 dark:border-gray-700 text-gray-600 ">

        <!-- les 2 personnes -->
        <div class="flex justify-start ml-8">
        </div>

        <!-- les 2 phrases du milieu -->
        <div class="sm:py-12 sm:px-6 lg:px-8">
            <div class="">
                <h2 class="max-w-xl text-4xl mt-8 mx-auto text-gray-600"">CONTACTEZ-NOUS</h2>
      </div>
    </div>

    <!-- la femme assise-->
    <div class=" flex justify-end">
                    <img class="object-scale-down h-40 w-40" src="/img/illu_contact1.png" alt="illustration contact">
            </div>
        </div>

        <!-- fin partie bleu -->

        <!-- insciption -->

            <div class="my-8 sm:mx-auto sm:w-full sm:max-w-md bg-no-repeat bg-right-top	 bg-[length:600px_1800px]" style="background-image: url('/img/fleur_formulaire.png')">
                <img class="object-scale-down h-40 w-40" src="/img/fleur_formulaire.png" alt="illustration contact">
                <div class="bg-white py-8 px-4 drop-shadow-lg sm:rounded-lg sm:px-10">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <label for="email" class="block text-sm font-medium text-[#386B96]">J'ai déjà un
                                compte</label>
                            <div class="mt-1">

                                <ul class="flex flex-row">
                                    <li class="relative flex text-center">
                                        <input class="sr-only peer" type="radio" value="yes" name="answer"
                                            id="answer_yes">
                                        <label
                                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer text-[#386B96] focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent"
                                            for="answer_yes">Oui</label>

                                    <li class="relative flex text-center">
                                        <input class="sr-only peer" type="radio" value="no" name="answer"
                                            id="answer_no">
                                        <label
                                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer text-[#386B96] focus:outline-none hover:bg-gray-50 peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent mx-8"
                                            for="answer_no">Non</label>
                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-[#386B96]">Votre profil</label>
                            <select id="country" name="country" autocomplete="country-name"
                                class="mt-1 block w-full text-[#386B96] rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-[#386B96] sm:text-sm">
                                <option>Je suis un patient</option>
                                <option>Je suis un praticien</option>
                                <option>Je suis une entreprise</option>
                            </select>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-[#386B96]">Email</label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#386B96] focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-[#386B96]">Rédiger un
                                message</label>
                            <div class="mt-1">
                                <textarea id="message" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#386B96] focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#386B96] dark:focus:border-blue-500"
                                    placeholder=""></textarea>
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-[#386B96]">J'ai déjà un
                                compte</label>
                            <div class="mt-1">

                                <ul class="flex flex-row">
                                    <li class="relative flex text-center">
                                        <input class="sr-only peer" type="radio" value="yes" name="answer"
                                            id="answer_yes1">
                                        <label
                                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer text-[#386B96] focus:outline-none hover:bg-gray-50 peer-checked:ring-green-500 peer-checked:ring-2 peer-checked:border-transparent"
                                            for="answer_yes1">Oui</label>

                                    <li class="relative flex text-center">
                                        <input class="sr-only peer" type="radio" value="no" name="answer"
                                            id="answer_no1">
                                        <label
                                            class="flex p-2 bg-white border border-gray-300 rounded-lg cursor-pointer text-[#386B96] focus:outline-none hover:bg-gray-50 peer-checked:ring-red-500 peer-checked:ring-2 peer-checked:border-transparent mx-8"
                                            for="answer_no1">Non</label>
                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-[#386B96]"> Numero de téléphone
                            </label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-[#386B96] focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>


                        <div>
                            <label for="about" class="block text-sm font-medium text-[#386B96]">Quelles sont vos
                                disponibilités ?</label>
                            <div class="mt-1">
                                <textarea id="message" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#386B96] focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#386B96] dark:focus:border-blue-500"
                                    placeholder=""></textarea>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">


                        </div>

                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#386B96] hover:bg-[#dde9f4] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#386B96]">Envoyer</button>
                        </div>



                    </form>


                </div>
            </div>
        </div>


        <!-- fin inscription -->




        <!-- début footer -->

        @include('/components/lesfooters/footer')


        <!-- fin footer -->
</body>

</html>