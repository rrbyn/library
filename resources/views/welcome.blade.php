<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>


    <table class="table-auto border border-solid">
        <thead>

            <tr>
                <td class="p-4 bg-gray-200 font-bold text-center"><a href="/?sort=title&order={{ $order }}">Book Title</td>
                <td class="p-4 bg-gray-200 font-bold">Author </td>
                <td class="p-4 bg-gray-200 font-bold text-center"><a href="/?sort=release_date&order={{ $order }}">Release Date</td>
            </tr>
        </thead>
        @foreach($books as $book)
        <tr>
            <td class="p-2 gray-100 border-r-2 border-gray-400"><a href="/book/{{ $book->id }}"> {{$book->title}}</a></td>
            <td class="p-2"> @foreach ($book->author as $author)
                @if($loop->last)
                {{dd($book)}}
                <span> <a href="/author/{{ $author->id }}">{{$author->first_name}} {{$author->last_name}} ({{$author->books()->count()}})</span></a>

                @else

                <span> {{$author->first_name}} {{$author->last_name}},</span>

                @endif
                @endforeach

            </td>
            <td class="p-2 gray-100">{{$book->release_date}}</td>

        </tr>
        @endforeach
    </table>
    {{ $books->links()}}
</body>

</html>
