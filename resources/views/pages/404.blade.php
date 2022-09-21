<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <!-- lien tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- lien alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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

<body class="h-full">

    <div class="flex min-h-full flex-col bg-white pt-16 pb-12">
        <main class="mx-auto flex w-full max-w-7xl flex-grow flex-col justify-center px-4 sm:px-6 lg:px-8">
            <div class="flex flex-shrink-0 justify-center">
                <a href="/" class="inline-flex">
                    <span class="sr-only">ABCThérapeutes</span>
                    <img class="h-8 w-auto sm:h-10" src="img/1Fichier 91.png" alt="Logo abcThérapeutes">
                </a>
            </div>
            <div class="py-16">
                <div class="text-center">
                    <h1 class="mt-2  text-2xl text-gray-800">Désolé, nous n’avons pas trouvé la page que vous cherchez.</h1>
                    <div class="mt-6">
                        <a href="#" class="text-base font-medium text-[#386B96] hover:text-indigo-500">Retourner à la page d'accueil<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mx-auto w-full max-w-7xl flex-shrink-0 px-4 sm:px-6 lg:px-8">
            <nav class="flex justify-center space-x-4">
                <a href="#" class="text-sm font-medium text-[#386B96] hover:text-gray-600">Contactez nous</a>
                <span class="inline-block border-l border-gray-300" aria-hidden="true"></span>
                <a href="#" class="text-sm font-medium text-[#386B96] hover:text-gray-600">FAQ</a>
                <span class="inline-block border-l border-gray-300" aria-hidden="true"></span>
                <a href="https://www.facebook.com/AbcTh%C3%A9rapeutes-104488444791022" class="text-sm font-medium text-[#386B96] hover:text-gray-600">Facebook</a>
            </nav>
        </footer>
    </div>



</body>

</html>