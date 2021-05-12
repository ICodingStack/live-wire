<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
              integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Live Wire</title>
        <livewire:styles />
        <livewire:scripts />
    </head>
    <body class="flex justify-center">
    <div class="w-10/12 my-8 flex">

        <div class="w-7/12 mx-2 rounded border p-2">
            <livewire:comments />
        </div>
    </div>

    </body>
</html>
