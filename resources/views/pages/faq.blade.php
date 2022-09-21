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
                        <img class="h-8 w-auto sm:h-10" src="/img/1Fichier 91.png" alt="Logo abcThérapeutes">
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
                        <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-[#386B96] font-medium text-white leading-5 hover:bg-white md:mx-0 md:w-auto" href="#">SE CONNECTER</a>
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
                <h2 class="max-w-xl text-4xl mt-8 mx-auto text-gray-600"">Questions fréquentes</h2>
</div>
</div>

<!-- la femme assise-->
<div class=" flex justify-end">
                    <img class="h-32 w-28" src="/img/illu_faq.png" alt="une femme pensive">
            </div>
        </div>

        <!-- fin partie bleu -->

        <!-- faq -->
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="mt-12">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-12 lg:grid-cols-3">
                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">abcThérapeutes.fr, qu'est-ce que c'est ?</dt>
                            <dd class="mt-2 text-base text-gray-500">C’est une plate-forme digitale recensant des praticiens de médecines complémentaires certifiés. Ce site permet de trouver un praticien mais aussi de prendre rendez-vous avec lui.</dd>
                        </div>

                        <!-- More questions... -->

                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">Comment trouver un praticien ?</dt>
                            <dd class="mt-2 text-base text-gray-500">Il y a plusieurs moyens proposés :

                                <p>Si vous le connaissez déjà - Recherche par nom</p>
                                <p>Si vous cherchez une pratique proche de chez vous - Recherche par pratique et/ou code postal</p>
                                <p>Vous pouvez sélectionner un praticien Homme ou Femme</p>
                                <p>Si vous avez besoin d’une séance rapidement – Recherche par disponibilités</p>
                                <p>vous préférez que la séance se déroule en cabinet, à domicile ou en téléconsultation</p>
                                <p>Si vous avez besoin d’être guidé – Critères de recherche Pour qui ? Pour quel symptôme ? Pour quelle pathologie ?</p>
                            </dd>
                        </div>

                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">Quelles pratiques sont proposées sur abcThérapeutes.fr ?</dt>
                            <dd class="mt-2 text-base text-gray-500">Toutes les médecines complémentaires peuvent être référencées sur le site. Si une pratique est affichée, c’est qu’un praticien l’exerçant est inscrit ou encours d’inscription.</dd>
                        </div>

                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">Je recherche une pratique qui n’est pas sur le site ?</dt>
                            <dd class="mt-2 text-base text-gray-500">Le client de la plate-forme a la possibilité de contacter l’administrateur du site via la messagerie. S’il a besoin d’un praticien, nous sommes là pour le trouver.</dd>
                        </div>

                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">Est-ce que les séances sont prises en charge par la sécurité sociale ou par les mutuelles ?</dt>
                            <dd class="mt-2 text-base text-gray-500">Ces médecines complémentaires n’étant pas reconnues en France, elles ne sont pas prises en charge par la sécurité sociale. Cependant, certaines mutuelles proposent des remboursements, partiels ou totaux, en fonction des contrats négociés.</dd>
                        </div>

                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">Quels moyens de paiement sont autorisés ?</dt>
                            <dd class="mt-2 text-base text-gray-500">Seul le paiement en carte bleue lors de la réservation d’un rendez-vous est possible..</dd>
                        </div>

                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">Puis-je modifier ou annuler mon rendez-vous ?</dt>
                            <dd class="mt-2 text-base text-gray-500">Si vous voulez modifier votre rendez-vous, vous pouvez le faire jusqu’à l’heure du rendez-vous. Concernant l’annulation, des frais de 10€ seront appliqués en raison des frais liés au paiement et aux relances.</dd>
                        </div>

                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">Quels sont les frais du site ?</dt>
                            <dd class="mt-2 text-base text-gray-500">Excepté l’annulation, aucun frais n’est demandé pour la personne qui prend rendez-vous.</dd>
                        </div>

                        <div>
                            <dt class="text-lg leading-6 font-medium text-[#386B96]">Comment puis-je savoir si vos praticiens sont bien certifiés et assurés ?</dt>
                            <dd class="mt-2 text-base text-gray-500">Un praticien est obligatoirement certifié pour apparaître sur le abcThérapeutes.fr. Il est aussi obligé d’avoir un N° de SIRET ainsi qu’une assurance. Chaque inscription est validée par l’administrateur afin d’éviter tout débordement.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>


        <!-- fin faq -->

        <!-- début footer -->

        @include('components/lesfooters/footer')

        <!-- fin footer -->
</body>

</html>