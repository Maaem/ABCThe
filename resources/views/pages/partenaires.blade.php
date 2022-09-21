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
                <h2 class="max-w-xl text-4xl mt-8 mx-auto text-gray-600">NOS PARTENAIRES</h2>
        </div>
    </div>

<!-- la femme assise-->
<div class=" flex justify-end">
                    <img class="h-36 w-40" src="/img/illu_partenaires2.png" alt="deux personnes">
            </div>
        </div>

        <!-- fin partie bleu -->

        <!-- partenaires -->

        <!-- partie du haut -->
        <div class="relative bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="absolute inset-0">
                <div class="bg-white h-1/3 sm:h-2/3"></div>
            </div>
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.</p>
                </div>
                <div class="mt-12 mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden mt-8">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl text-center font-semibold text-gray-900">Syndicat National du Shiatsu Professionnel</p>
                                    <p class="mt-3 text-center text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="mx-auto">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-[#386B96] bg-[#dde9f4] hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">EN SAVOIR PLUS</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden mt-8">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl text-center font-semibold text-gray-900">Syndicat National du Shiatsu Professionnel</p>
                                    <p class="mt-3 text-center text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="mx-auto">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-[#386B96] bg-[#dde9f4] hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">EN SAVOIR PLUS</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden mt-8">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl text-center font-semibold text-gray-900">Syndicat National du Shiatsu Professionnel</p>
                                    <p class="mt-3 text-center text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="mx-auto">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-[#386B96] bg-[#dde9f4] hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">EN SAVOIR PLUS</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden mt-8">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl text-center font-semibold text-gray-900">Syndicat National du Shiatsu Professionnel</p>
                                    <p class="mt-3 text-center text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="mx-auto">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-[#386B96] bg-[#dde9f4] hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">EN SAVOIR PLUS</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden mt-8">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl text-center font-semibold text-gray-900">Syndicat National du Shiatsu Professionnel</p>
                                    <p class="mt-3 text-center text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="mx-auto">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-[#386B96] bg-[#dde9f4] hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">EN SAVOIR PLUS</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden mt-8">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl text-center font-semibold text-gray-900">Syndicat National du Shiatsu Professionnel</p>
                                    <p class="mt-3 text-center text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="mx-auto">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-[#386B96] bg-[#dde9f4] hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">EN SAVOIR PLUS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <!-- fin partenaires -->



        @include('/components/lesfooters/footer')

</body>

</html>