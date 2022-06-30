<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .wrap{
            margin-top: 50px;
            color: #2e2e2e;
            text-align: center;
        }
        .wrap h1{
            font-size: 1.85rem !important;
            margin-bottom: 2rem;
        }
        .wrap p{
            font-size: 1.1rem !important;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap">
                        <h1 class="flex-center">welcome to test laravel</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci beatae vitae repellat enim illum quam fuga consequuntur nemo odio quo, natus pariatur molestiae aspernatur voluptatem cumque labore minima dolores hic a? Odit voluptas cupiditate animi perspiciatis accusamus iure, est maiores alias dicta dignissimos necessitatibus possimus omnis similique doloribus nesciunt voluptatem.</p>
                        <p style="margin-top: 25px">this is another update and its so sweet</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
