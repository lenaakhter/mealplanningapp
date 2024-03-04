<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styling -->
        <link rel="stylesheet" href="/css/global.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Actor&family=Jomhuria&display=swap" rel="stylesheet">


        <title>Calfoodie</title>


    <div class="calfoodieTitle">
        <h1>calfoodie</h1>
    </div>

    <div class="navbarlinks">

        <div class="homenav">
            <a href="/" id="navlink">Home</a>
        </div>
        <div class="recipesnav">
            <a href="/recipes" id="navlink">Recipes</a>
        </div>
        <div class="mealplannav">
            <a href="/mealplan" id="navlink">My Meal Plan</a>
        </div>
        <div class="mindnav">
            <a href="/mindfulness" id="navlink">Mindfulness</a>
        </div>
        <div class="regnav">
            <a href="/login" id="navlink">Login/Signup</a>
        </div>

    </div>
</head>

    <body>
        @yield('content')
    </body>

    <footer>

    </footer>

</html>
