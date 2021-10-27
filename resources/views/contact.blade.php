<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <form action="/contact" method="get">
        @csrf
        plasse input name : <input type="text" name="name" id="name">
        <input type="submit" value="ارسل">
    </form>

    {{-- <h1>you name is {{$name}}</h1> --}}



{{--


    <ul>
        @foreach ($tasks as $task)

        <li>
            {{$task}}
        </li>
        @endforeach
    </ul>
    <br>
    <ul>
        @foreach ($tasks as $index=>$task)
        <li>
            {{$index}}
            {{$task}}
        </li>
        @endforeach
    </ul> --}}
</body>
</html>
