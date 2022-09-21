<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui sommes-nous ?</title>
    <!-- lien tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- lien alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    @include('/components/headers/headersimple')

    <!-- début partie bleu -->

    <div class="grid grid-cols-3 place-items-center bg-[url('/img/fondbleu1.png')] bg-no-repeat bg-cover text-center rounded-lg sm:p-10 dark:bg-gray-800 dark:border-gray-700 text-gray-600 mt-8">

        <!-- les 2 personnes -->
        <div class="flex justify-start ml-8">
        </div>

        <!-- les 2 phrases du milieu -->
        <div class="sm:py-12 sm:px-6 lg:px-8">
            <div class="">
                <h2 class="max-w-xl text-4xl mt-8 mx-auto text-gray-600"">QUI SOMMES-NOUS ?</h2>
</div>
</div>

<!-- la femme assise-->
<div class=" flex justify-end">
                    <img class="h-36 w-42" src="/img/illu_partenaires1.png" alt="une femme pensive">
            </div>
        </div>

        <!-- qui sommes nous -->
        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
                <div class="space-y-12">
                    <ul role="list" class="space-y-12 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8 lg:gap-y-12 lg:space-y-0">
                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="aspect-w-3 aspect-h-2 h-0 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="rounded-lg object-cover shadow-lg" src="/img/elodieruben.png" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="space-y-1 text-lg font-medium leading-6">
                                            <h3>Elodie Ruben</h3>
                                            <p class="text-indigo-600">Fondatrice de la plate-forme abcThérapeutes.fr</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Elodie Ruben, femme, épouse et maman, j'ai été diagnostiquée d'un cancer du sein à l'âge de 32 ans.
                                                Grand chamboulement dans ma vie, j'ai démarré les traitements très rapidement avec des effets
                                                secondaires innombrables… C'est alors que je me suis tournée vers les médecines complémentaires
                                                en accord avec le corps médical.

                                                Il est très dur de trouver des praticiens de confiance. Malgré les dizaines d'annuaires qui existent,
                                                comment trouver quelqu'un en qui on peut avoir pleinement confiance ? Surtout dans un moment de
                                                notre vie où l'on est affaibli physiquement et/ou psychologiquement !
                                                Filtre autre plus humain à décrire, échange téléphonique, bouche à oreille,

                                                C'est alors que j'ai décidé d'aider. Aider via cet outil : abcthérapeutes.fr

                                                Ce n'est pas qu'un simple site de prise de rendez-vous ou un annuaire. Chaque praticien doit montrer
                                                patte blanche en indiquant ses certifications et ses assurances (entres autres). Et la recherche est
                                                facilité !

                                                Ne cherchez pas un praticien qui communique avec les esprits ou qui vous tire les cartes, vous n'êtes
                                                pas au bon endroit !
                                                Ici, vous trouverez uniquement des praticiens qui accompagnent pour améliorer le bien-être de votre
                                                quotidien par des points d'acupression ou encore par de la méditation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- More people... -->

                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="aspect-w-3 aspect-h-2 h-0 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="space-y-1 text-lg font-medium leading-6">
                                            <h3>Yohan Barkat</h3>
                                            <p class="text-indigo-600">Accompagnement financier et juridique</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="aspect-w-3 aspect-h-2 h-0 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="space-y-1 text-lg font-medium leading-6">
                                            <h3>Rouzbeh Siami</h3>
                                            <p class="text-indigo-600">Accompagnement financier et juridique</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="aspect-w-3 aspect-h-2 h-0 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="space-y-1 text-lg font-medium leading-6">
                                            <h3>John Doe</h3>
                                            <p class="text-indigo-600">fondatrice de la plate-forme abcThérapeutes.fr</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="aspect-w-3 aspect-h-2 h-0 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="space-y-1 text-lg font-medium leading-6">
                                            <h3>John Doe</h3>
                                            <p class="text-indigo-600">fondatrice de la plate-forme abcThérapeutes.fr</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>



        <!-- fin qui sommes nous -->



        @include('/components/lesfooters/footer')

</body>

</html>