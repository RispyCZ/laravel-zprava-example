<!DOCTYPE html>
<html lang="cs">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        @foreach ($messages as $message)
        <div>
            <p>{{ $message->obsah }}</p>
            <time>{{ $message->created_at }}</time>
            <hr />
        </div>
        @endforeach
        <form action="/message" method="POST">
            @csrf
            <textarea name="zprava">Napiš zprávu</textarea>
            <button type="submit">Přidej zprávu</button>
        </form>
    </body>

</html>