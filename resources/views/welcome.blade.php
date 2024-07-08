<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Template Laravel
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ Vite::asset('resources/img/pipistrello.jpg')}}" alt="">
                    <ul>
                        <li><a href="">prova list item e link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer>

        <span class="rock-salt-regular text-secondary p-1 m-1">
            <i class="fas fa-yin-yang"></i> AP.
        </span>


    </footer>
    
</body>
</html>