<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app2.ts'])
    <style>
        /* small spacing to keep right sidebar visible and not overlapped by top navbar */
        @media (min-width: 768px) {
            .content-with-rightbar { padding-right: 1rem; }
        }

        /* Layout helpers so right menu covers the same vertical distance as left column */
        .content-with-rightbar { min-height: calc(100vh - 56px); }
        .content-with-rightbar .row { align-items: stretch; }

        /* Left column stacks and allows the middle card to expand */
        .content-with-rightbar .col-12.col-md-9 { display: flex; flex-direction: column; }
        .content-with-rightbar .col-12.col-md-9 .card.flex-fill { flex: 1 1 auto; min-height: 0; }

        /* Right sidebar becomes a full-height column; card fills its column */
        .right-sidebar { display: flex; flex-direction: column; }
        .right-sidebar .card { flex: 1 1 auto; min-height: 0; }
        .right-sidebar .card .card-body { overflow: auto; }

        /* Color theming for the three menu cards */
        .menu1-card .card-body {
            background: #1e40af; /* primary indigo */
            color: #ffffff;
        }

        .menu2-card {
            background: linear-gradient(180deg, #2563eb 0%, #1e40af 100%); /* blue gradient */
            color: #fff;
            border: none;
        }
        .menu2-card .card-body { padding: 1rem; }

        .menu3-card .card-body {
            background: #0ea5a4; /* teal */
            color: #012;
        }

        /* Style list-group inside menu2 to be light and readable on the blue background */
        .menu2-card .list-group-item {
            background: rgba(255,255,255,0.06);
            color: #fff;
            border: none;
        }
        .menu2-card .list-group-item:hover {
            background: rgba(255,255,255,0.12);
            color: #fff;
        }

        /* Small shadow and rounded corners for better separation */
        .menu1-card, .menu2-card, .menu3-card, .menu-content-card {
            border-radius: 0.5rem;
            box-shadow: 0 6px 18px rgba(18, 38, 63, 0.06);
        }
    </style>
</head>
<body>
    
    

<div class="">
        <div class="row">
            {{-- Left column: Menu1, Content, Menu3 stacked --}}
            <div class="col-12 col-md-9">
                <div class="mb-3">
                    <div class="card menu1-card">
                        {{-- <div class="card-body">Menú 1</div> --}}
                    </div>
                    @yield('menu')
                </div>

                <div class="mb-3">
                    <div class="card flex-fill menu-content-card" style="min-height: 320px;">
                        <div class="card-body">
                            {{-- Main page content --}}
                            @yield('contenido')
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="card menu3-card">
                        <div class="card-body">Derechos Reservados</div>
                    </div>
                </div>
            </div>

            {{-- Right column: Menu2, in flow, does NOT overlay left column --}}
            <aside class="col-12 col-md-3 right-sidebar">
                <div class="card menu2-card">
                    <div class="card-body">
                        {{-- <h5 class="card-title">Menú 2</h5> --}}

                        {{-- <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Opción A</a>
                            <a href="#" class="list-group-item list-group-item-action">Opción B</a>
                            <a href="#" class="list-group-item list-group-item-action">Opción C</a>
                        </div> --}}
                    </div>
                </div>
            </aside>
        </div>

        {{-- <nav class="navbar fixed-bottom navbar-dark bg-primary">
            <div class="container-fluid justify-content-center">
                <span class="navbar-text text-center w-100">
                    <?php
                    echo auth()->user()->name . "<br>";
                    echo auth()->user()->email;
                    ?>
                </span>
            </div>
        </nav> --}}
    </div>







        
    {{-- <div class="row">
            <div class="col">
                @yield('menu')
            </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                @yield('contenido')
            </div>
        </div>

        <nav class="navbar fixed-bottom navbar-dark bg-primary">
        <div class="container-fluid justify-content-center">
            <span class="navbar-text text-center w-100">
                <a href="https://laravel.com" target="_blank">LARAVEL</a>
                <a href="https://getbootstrap.com" target="_blank"> - BOOTSTRAP</a>
                <a href="https://www.php.net" target="_blank"> - PHP</a>
                <a href="https://www.mysql.com" target="_blank"> - MYSQL</a>
                <a href="https://vitejs.dev" target="_blank"> - VITE</a>
            </span>
        </div>
        </nav>
    </div> --}}

</body>
</html>