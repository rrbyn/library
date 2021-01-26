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
        <div class="flex justify-between border-b-2 border-black bg-gray-100 ">
            <div class="p-4">Raamatu nimi</div>
            <div class="p-4">{{ $book->title}}</div>

        </div>
        <div class="flex justify-between border-b-2 border-black bg-gray-100">
            <div class="p-4">Raamatu aasta</div>
            <div class="p-4">{{$book -> release_date}}</div>
        </div>
        <div class="flex justify-between border-b-2 border-black bg-gray-100">
            <div class="p-4">Kaanepilt</div>
            <div class="p-4"><img src="{{$book -> cover_path}}"></div>
        </div>
        <div class="flex justify-between border-b-2 border-black bg-gray-100">
            <div class="p-4">Raamatu keel</div>
            <div class="p-4">{{$book -> language}}</div>
        </div>
        <div class="flex justify-between border-b-2 border-black bg-gray-100">
            <div class="p-4">Raamatu hind</div>
            <div class="p-4">{{$book -> price}}</div>
        </div>
        <div class="flex justify-between border-b-2 border-black bg-gray-100">
            <div class="p-4">Raamatu lk</div>
            <div class="p-4">{{$book -> pages}}</div>
        </div>
        <div class="flex justify-between border-b-2 border-black bg-gray-100">
            <div class="p-4">Raamatu sisu</div>
            <div class="p-4">{{$book -> summary}}</div>
        </div>
        <div class="flex justify-between border-b-2 border-black bg-gray-100">
            <div class="p-4">Raamatu laoseis</div>
            <div class="p-4">{{$book -> stock_saldo}}</div>
        </div>
        <div class="flex justify-between border-b-2 border-black bg-gray-100">
            <div class="p-4">Raamatu tüüp</div>
            <div class="p-4">{{$book -> type}}</div>
        </div>
    </div>

</body>


</html>
