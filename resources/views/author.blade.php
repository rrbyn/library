<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body class="flex justify-center items-center">
    <div>
        {{dd($author)}}
        <div class="flex justify-between border-b-2 border-black bg-gray-100 ">
            <div class="p-4">Nimi</div>
            <div class="p-4">{{ $book->author->first_name}}</div>

        </div>

    </div>

</body>


</html>
