<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Offres</title>
    <!-- lien tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- lien alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    <!-- alpine.js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <header x-data="{ isOpen: false }" class="bg-white">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img class="h-10" src="/img/logovert2.png" alt="Logo abcThérapeutes">
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
                        <a class="block w-1/2 px-3 py-2 mx-1 rounded text-center text-sm bg-[#52A033] font-medium text-white leading-5 hover:bg-[#BDCD9E] md:mx-0 md:w-auto" href="#">SE CONNECTER</a>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <!-- Fin de la nav bar -->



    <!-- offres -->

    <div class="bg-gray-50">
        <div class="relative bg-white">
            <div class="bg-[#CBDEC0] mt-16">
                <div class="pt-12 px-4 sm:px-6 lg:px-8 lg:pt-20">
                    <div class="text-center">
                        <h2 class="mt-2 text-xl tracking-tight text-black sm:text-4xl sm:tracking-tight lg:text-5xl lg:tracking-tight">NOS OFFRES</h2>
                        <p class="mt-3 max-w-4xl mx-auto text-xl text-black sm:mt-5 sm:text-2xl">A défaut d'un forfait simple, nous vous proposons que vous payez en fonction de vos revenues. Cela vous permet de pouvoir utiliser un outil, sans appréhender la facture !</p>
                    </div>
                </div>

                <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
                    <div class="relative z-0">
                        <div class="absolute inset-0 h-5/6 bg-[#CBDEC0] lg:h-2/3"></div>
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="relative lg:grid lg:grid-cols-7">
                                <div class="mx-auto max-w-md lg:mx-0 lg:max-w-none lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3">
                                    <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-l-lg">
                                        <div class="flex-1 flex flex-col">
                                            <div class="bg-white px-6 py-10">
                                                <div>
                                                    <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-hobby">Sans engagement</h3>
                                                    <div class="mt-4 flex items-center justify-center">
                                                        <span class="px-3 flex items-start text-xl tracking-tight text-gray-900">
                                                            <span class="font-bold"> OFFRE DE LANCEMENT </span>
                                                        </span>
                                                    </div>
                                                    <div class="mt-4 flex items-center justify-center">
                                                        <span class="px-3 flex items-start text-lg tracking-tight text-gray-900">
                                                            <span class="font-bold"> 6% de commission par séance </span>
                                                        </span>
                                                    </div>
                                                    <div class="mt-4 flex items-center justify-center">
                                                        <span class="text-sm font-medium text-gray-500"> (puis 12% pour les 200 premiers inscrits)</span>
                                                    </div>
                                                    <div class="rounded-lg shadow-md mt-6">
                                                        <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-[#52A033] px-6 py-3 text-base font-medium text-white hover:bg-[#BDCD9E]" aria-describedby="tier-hobby"> Choisir</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10 max-w-lg mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4">
                                    <div class="relative z-10 rounded-lg shadow-xl">
                                        <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-[#BDCD9E]" aria-hidden="true"></div>
                                        <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
                                            <div>
                                                <h3 class="text-center text-3xl tracking-tight font-semibold text-gray-900 sm:-mx-6" id="tier-growth">Sans engagement</h3>
                                                <div class="mt-4 flex items-center justify-center">
                                                    <span class="px-3 flex items-start text-xl tracking-tight text-gray-900 sm:tracking-tight">
                                                        <span class="font-bold"> OFFRE 1 </span>
                                                    </span>
                                                </div>
                                                <div class="mt-4 flex items-center justify-center">
                                                    <span class="px-3 flex items-start text-lg tracking-tight text-gray-900 sm:tracking-tight">
                                                        <span class="font-bold"> 18% de commission par séance </span>
                                                    </span>
                                                </div>

                                                <div class="m-10">
                                                    <div class="rounded-lg shadow-md">
                                                        <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-[#52A033] px-6 py-4 text-xl leading-6 font-medium text-white hover:bg-[#BDCD9E]" aria-describedby="tier-growth"> Choisir</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="mt-10 mx-auto max-w-md lg:m-0 lg:max-w-none lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3">
                                    <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-r-lg">
                                        <div class="flex-1 flex flex-col">
                                            <div class="bg-white px-6 py-10">
                                                <div>
                                                    <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-hobby">Engagement 12 mois</h3>
                                                    <div class="mt-4 flex items-center justify-center">
                                                        <span class="px-3 flex items-start text-xl tracking-tight text-gray-900">
                                                            <span class="font-bold"> OFFRE 2 </span>
                                                        </span>
                                                    </div>
                                                    <div class="mt-4 flex items-center justify-center">
                                                        <span class="px-3 flex items-start text-lg tracking-tight text-gray-900">
                                                            <span class="font-bold"> 59,90€ + 6% de commission par séance </span>
                                                        </span>
                                                    </div>
                                                    <div class="rounded-lg shadow-md mt-6">
                                                        <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-[#52A033] px-6 py-3 text-base font-medium text-white hover:bg-gray-50" aria-describedby="tier-hobby"> Choisir</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Feature comparison (up to lg) -->
        <section aria-labelledby="mobile-comparison-heading" class="lg:hidden">
            <h2 id="mobile-comparison-heading" class="sr-only">Feature comparison</h2>

            <div class="max-w-2xl mx-auto py-16 px-4 space-y-16 sm:px-6">
                <div class="border-t border-gray-200" key="plan.title">
                    <div class="border-transparent -mt-px pt-6 border-t-2 sm:w-1/2">
                        <h3 class="text-gray-900 text-sm font-bold">Outils mis à disposition pour le premier forfait</h3>
                        <p class="mt-2 text-sm text-gray-500">All your essential business finances, taken care of.</p>
                    </div>

                    <div class="mt-6 relative">
                        <!-- Fake card background -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="shadow absolute right-0 w-1/2 h-full bg-white rounded-lg"></div>
                        </div>

                        <div class="ring-1 ring-black ring-opacity-5 shadow relative py-3 px-4 bg-white rounded-lg sm:p-0 sm:bg-transparent sm:rounded-none sm:ring-0 sm:shadow-none">
                            <dl class="divide-y divide-gray-200">
                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Gestion de vos rendez-vous</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Rappels par SMS</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Téléconsultation</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Suivi et gestion de votre patientèle</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Paiements en ligne de vos patients</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Facilitation de votre gestion financière</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Echanges facilités grâce à la messagerie</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Fake card border -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="ring-1 ring-black ring-opacity-5 absolute right-0 w-1/2 h-full rounded-lg"></div>
                        </div>
                    </div>

                    <div class="mt-6 relative">
                        <!-- Fake card background -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="shadow absolute right-0 w-1/2 h-full bg-white rounded-lg"></div>
                        </div>

                        <div class="ring-1 ring-black ring-opacity-5 shadow relative py-3 px-4 bg-white rounded-lg sm:p-0 sm:bg-transparent sm:rounded-none sm:ring-0 sm:shadow-none">
                            <dl class="divide-y divide-gray-200">
                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Référencement et mise en avant</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Communication sur les réseaux sociaux</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Publication de vos articles sur le blog</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Apparition dans la newsletter</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Accès aux partenariats négociés</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Accès aux grands comptes</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </dd>
                                </div>

                            </dl>
                        </div>

                        <!-- Fake card border -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="ring-1 ring-black ring-opacity-5 absolute right-0 w-1/2 h-full rounded-lg"></div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200" key="plan.title">
                    <div class="border-[#BDCD9E] -mt-px pt-6 border-t-2 sm:w-1/2">
                        <h3 class="text-[#52A033] text-sm font-bold">Outils mis à disposition pour le deuxieme forfait</h3>
                        <p class="mt-2 text-sm text-gray-500">The best financial services for your thriving business.</p>
                    </div>

                    <div class="mt-6 relative">
                        <!-- Fake card background -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="shadow-md absolute right-0 w-1/2 h-full bg-white rounded-lg"></div>
                        </div>

                        <div class="ring-2 ring-[#BDCD9E] shadow-md relative py-3 px-4 bg-white rounded-lg sm:p-0 sm:bg-transparent sm:rounded-none sm:ring-0 sm:shadow-none">
                            <dl class="divide-y divide-gray-200">
                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Gestion de vos rendez-vous</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Rappels par SMS</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Téléconsultation</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Suivi et gestion de votre patientèle</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Paiements en ligne de vos patients</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Facilitation de votre gestion financière</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Echanges facilités grâce à la messagerie</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Fake card border -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="ring-2 ring-[#BDCD9E] absolute right-0 w-1/2 h-full rounded-lg"></div>
                        </div>
                    </div>


                    <div class="mt-6 relative">
                        <!-- Fake card background -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="shadow-md absolute right-0 w-1/2 h-full bg-white rounded-lg"></div>
                        </div>

                        <div class="ring-2 ring-[#BDCD9E] shadow-md relative py-3 px-4 bg-white rounded-lg sm:p-0 sm:bg-transparent sm:rounded-none sm:ring-0 sm:shadow-none">
                            <dl class="divide-y divide-gray-200">
                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Référencement et mise en avant</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Communication sur les réseaux sociaux</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Publication de vos articles sur le blog</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Apparition dans la newsletter</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Accès aux partenariats négociés</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Accès aux grands comptes</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </dd>
                                </div>

                            </dl>
                        </div>

                        <!-- Fake card border -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="ring-2 ring-[#BDCD9E] absolute right-0 w-1/2 h-full rounded-lg"></div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200" key="plan.title">
                    <div class="border-transparent -mt-px pt-6 border-t-2 sm:w-1/2">
                        <h3 class="text-gray-900 text-sm font-bold">Outils mis à disposition pour le troisième forfait</h3>
                        <p class="mt-2 text-sm text-gray-500">Convenient features to take your business to the next level.</p>
                    </div>

                    <div class="mt-6 relative">
                        <!-- Fake card background -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="shadow absolute right-0 w-1/2 h-full bg-white rounded-lg"></div>
                        </div>

                        <div class="ring-1 ring-black ring-opacity-5 shadow relative py-3 px-4 bg-white rounded-lg sm:p-0 sm:bg-transparent sm:rounded-none sm:ring-0 sm:shadow-none">
                            <dl class="divide-y divide-gray-200">
                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Gestion de vos rendez-vous</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Rappels par SMS</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Téléconsultation</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Suivi et gestion de votre patientèle</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Paiements en ligne de vos patients</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Facilitation de votre gestion financière</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex items-center justify-between sm:grid sm:grid-cols-2">
                                    <dt class="pr-4 text-sm font-medium text-black">Echanges facilités grâce à la messagerie</dt>
                                    <dd class="flex items-center justify-end sm:px-4 sm:justify-center">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Fake card border -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="ring-1 ring-black ring-opacity-5 absolute right-0 w-1/2 h-full rounded-lg"></div>
                        </div>
                    </div>


                    <div class="mt-6 relative">
                        <!-- Fake card background -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="shadow absolute right-0 w-1/2 h-full bg-white rounded-lg"></div>
                        </div>

                        <div class="ring-1 ring-black ring-opacity-5 shadow relative py-3 px-4 bg-white rounded-lg sm:p-0 sm:bg-transparent sm:rounded-none sm:ring-0 sm:shadow-none">
                            <dl class="divide-y divide-gray-200">
                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Référencement et mise en avant</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Communication sur les réseaux sociaux</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Publication de vos articles sur le blog</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Apparition dans la newsletter</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Accès aux partenariats négociés</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                                <div class="py-3 flex justify-between sm:grid sm:grid-cols-2">
                                    <dt class="text-sm font-medium text-black sm:pr-4">Accès aux grands comptes</dt>
                                    <dd class="text-center sm:px-4">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </dd>
                                </div>

                            </dl>
                        </div>

                        <!-- Fake card border -->
                        <div aria-hidden="true" class="hidden absolute inset-0 pointer-events-none sm:block">
                            <div class="ring-1 ring-black ring-opacity-5 absolute right-0 w-1/2 h-full rounded-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature comparison (lg+) -->
        <section aria-labelledby="comparison-heading" class="hidden lg:block">
            <h2 id="comparison-heading" class="sr-only">Feature comparison</h2>

            <div class="max-w-7xl mx-auto py-24 px-8">
                <div class="w-full border-t border-gray-200 flex items-stretch">
                    <div class="-mt-px w-1/4 py-6 pr-4 flex items-end">
                    </div>

                    <div aria-hidden="true" class="pr-4 -mt-px pl-4 w-1/4">
                        <div class="border-transparent py-6 border-t-2">
                            <p class="text-gray-900 text-sm font-bold">Outils mis à disposition pour le premier forfait</p>
                        </div>
                    </div>

                    <div aria-hidden="true" class="pr-4 -mt-px pl-4 w-1/4">
                        <div class="border-[#BDCD9E] py-6 border-t-2">
                            <p class="text-[#52A033] text-sm font-bold">Outils mis à disposition pour le deuxieme forfait</p>
                        </div>
                    </div>

                    <div aria-hidden="true" class="-mt-px pl-4 w-1/4">
                        <div class="border-transparent py-6 border-t-2">
                            <p class="text-gray-900 text-sm font-bold">Outils mis à disposition pour le troisième forfait</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <!-- Fake card backgrounds -->
                    <div class="absolute inset-0 flex items-stretch pointer-events-none" aria-hidden="true">
                        <div class="w-1/4 pr-4"></div>
                        <div class="w-1/4 px-4">
                            <div class="w-full h-full bg-white rounded-lg shadow"></div>
                        </div>
                        <div class="w-1/4 px-4">
                            <div class="w-full h-full bg-white rounded-lg shadow-md"></div>
                        </div>
                        <div class="w-1/4 pl-4">
                            <div class="w-full h-full bg-white rounded-lg shadow"></div>
                        </div>
                    </div>

                    <table class="relative w-full">
                        <caption class="sr-only">
                            Business feature comparison
                        </caption>
                        <thead>
                            <tr class="text-left">
                                <th scope="col">
                                    <span class="sr-only">Feature</span>
                                </th>

                                <th scope="col">
                                    <span class="sr-only">Outils mis à disposition pour le premier forfait</span>
                                </th>

                                <th scope="col">
                                    <span class="sr-only">Outils mis à disposition pour le deuxieme forfait plan</span>
                                </th>

                                <th scope="col">
                                    <span class="sr-only">Outils mis à disposition pour le troisième forfait plan</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Gestion de vos rendez-vous</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Rappels par SMS</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- téléconsultation -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Téléconsultation </th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- Suivi et gestion de votre patientèle -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Suivi et gestion de votre patientèle</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>


                            <!-- Paiements en ligne de vos patients		 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Paiements en ligne de vos patients</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- Facilitation de votre gestion financière	 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Facilitation de votre gestion financière</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- Echanges facilités grâce à la messagerie	 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Echanges facilités grâce à la messagerie</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Fake card borders -->
                    <div class="absolute inset-0 flex items-stretch pointer-events-none" aria-hidden="true">
                        <div class="w-1/4 pr-4"></div>
                        <div class="w-1/4 px-4">
                            <div class="w-full h-full rounded-lg ring-1 ring-black ring-opacity-5"></div>
                        </div>
                        <div class="w-1/4 px-4">
                            <div class="w-full h-full rounded-lg ring-2 ring-[#BDCD9E] ring-opacity-100"></div>
                        </div>
                        <div class="w-1/4 pl-4">
                            <div class="w-full h-full rounded-lg ring-1 ring-black ring-opacity-5"></div>
                        </div>
                    </div>
                </div>


                <div class="mt-6 relative">
                    <!-- Fake card backgrounds -->
                    <div class="absolute inset-0 flex items-stretch pointer-events-none" aria-hidden="true">
                        <div class="w-1/4 pr-4"></div>
                        <div class="w-1/4 px-4">
                            <div class="w-full h-full bg-white rounded-lg shadow"></div>
                        </div>
                        <div class="w-1/4 px-4">
                            <div class="w-full h-full bg-white rounded-lg shadow-md"></div>
                        </div>
                        <div class="w-1/4 pl-4">
                            <div class="w-full h-full bg-white rounded-lg shadow"></div>
                        </div>
                    </div>

                    <table class="relative w-full">
                        <caption class="sr-only">
                            Perk comparison
                        </caption>
                        <thead>
                            <tr class="text-left">
                                <th scope="col">
                                    <span class="sr-only">Perk</span>
                                </th>

                                <th scope="col">
                                    <span class="sr-only">Outils mis à disposition pour le premier forfait</span>
                                </th>

                                <th scope="col">
                                    <span class="sr-only">Outils mis à disposition pour le deuxieme forfait plan</span>
                                </th>

                                <th scope="col">
                                    <span class="sr-only">Outils mis à disposition pour le troisième forfait plan</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">

                            <!-- Référencement et mise en avant	 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Référencement et mise en avant</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- Communication sur les réseaux sociaux	 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Communication sur les réseaux sociaux</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- Publication de vos articles sur le blog	 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Publication de vos articles sur le blog</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- Apparition dans la newsletter	 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Apparition dans la newsletter</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- Accès aux partenariats négociés	 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Accès aux partenariats négociés</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>

                            <!-- Accès aux grands comptes	 -->
                            <tr>
                                <th scope="row" class="w-1/4 py-3 pr-4 text-left text-sm font-medium text-black">Accès aux grands comptes</th>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </span>
                                </td>

                                <td class="px-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/x -->
                                        <svg class="mx-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">No</span>
                                    </span>
                                </td>

                                <td class="pl-4 relative w-1/4 py-0 text-center">
                                    <span class="relative w-full h-full py-3">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="mx-auto h-5 w-5 text-[#52A033]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Yes</span>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Fake card borders -->
                    <div class="absolute inset-0 flex items-stretch pointer-events-none" aria-hidden="true">
                        <div class="w-1/4 pr-4"></div>
                        <div class="w-1/4 px-4">
                            <div class="w-full h-full rounded-lg ring-1 ring-black ring-opacity-5"></div>
                        </div>
                        <div class="w-1/4 px-4">
                            <div class="w-full h-full rounded-lg ring-2 ring-[#BDCD9E] ring-opacity-100"></div>
                        </div>
                        <div class="w-1/4 pl-4">
                            <div class="w-full h-full rounded-lg ring-1 ring-black ring-opacity-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <!--fin offres -->

    @include('lesfooters/vert')

</body>

</html>