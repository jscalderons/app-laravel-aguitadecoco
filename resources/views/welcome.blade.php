<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                /* text-align: center; */
                padding: 4rem 2.5rem;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .api-link {
                border: 1px solid lightgray;
                padding: 1rem;
                margin-bottom: .5rem;
                display: inline-block;
            }

            .api-link h3,
            .api-link p {
                margin: 0;
            }

            .api-link span {
                color: blue;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ env('APP_NAME') }}
                </div>

                <section>
                    <div class="api-link">
                        <h3>GET: Listar Products</h3>
                        <p>Obtener lista de productos</p>
                        <span>{{ env('APP_URL') }}/api/products </span>
                    </div>
                    <div class="api-link">
                        <h3>POST: Crear Producto</h3>
                        <p>Crea un producto</p>
                        <span>{{ env('APP_URL') }}/api/product </span>
                    </div>
                    <div class="api-link">
                        <h3>GET: Lista Promociones</h3>
                        <p>Obtiene la lista de promociones vigentes</p>
                        <span>{{ env('APP_URL') }}/api/promotions </span>
                    </div>
                    <div class="api-link">
                        <h3>POST: Crear Promocion</h3>
                        <p>Crea una promoción</p>
                        <span>{{ env('APP_URL') }}/api/promotion </span>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
