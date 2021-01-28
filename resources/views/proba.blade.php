<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            background: url(https://cf.bstatic.com/images/hotel/max1024x768/240/240968846.jpg);
            font-size: 4.5em;
        }
        .text {
            background-clip: text;
            -webkit-background-clip: text;
            color: rgba(0,0,0,.2);
        }
    </style>
</head>
<body>
    <h1 class="text">
        Valami szöveg jön ide<br>
        Alá is valami<br>
    </h1>
    <form action="{{ route('save') }}" method="POST">
        @csrf
        <input name="name" type="text">
        <input type="submit" value="save">
    </form>

</body>
</html>
