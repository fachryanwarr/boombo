<!DOCTYPE html>

<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Fachry">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title')
    
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />

</head>

<body class="bg-gray-900 overflow-y-scroll">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    @yield('content')
       
</body>
</html>