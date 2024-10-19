<x-component name="x-layout">
    <html lang="en">
    <head>
        <title>Tempest</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/assets/main.css" rel="stylesheet">
    </head>
    <body class="w-10/12 mx-auto">

    <header class="bg-gray-100">
        <x-navigation></x-navigation>
    </header>

    <main class="w-full bg-gray-200 p-4 h-fit rounded-b-xl">
        <x-slot></x-slot>
    </main>

    </body>
    </html>
</x-component>
