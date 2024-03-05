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

        <div class="foot">
            <div class="footertitle">
                <h1>calfoodie</h1>
            </div>
            <div class="footerlinks">

                <div class="footerhome">
                    <div class="footitle">
                         
                    </div>
                    <div class="footlinks">
                        
                    <a href="/" id="footlinkh">Home</a>
                    </div>
                </div>
                <div class="footerservices">
                    <div class="foottitle">
                        <h2>Services</h2>
                    </div>
                    <div class="footlinks">
                        <a href="/recipes" id="footlink">Recipes</a>
                        <a href="/mealplan" id="footlink">My Meal Plan</a>
                    </div>
                </div>
                <div class="footermhl">
                    <div class="foottitle">
                        <h2>Mental Health Links</h2>
                    </div>
                    <div class="footlinks">
                        <a href="/" id="footlink">placeholder</a>
                        <a href="/" id="footlink">placeholder</a> 
                    </div>

                </div>
                <div class="footerconnect">
                    <div class="foottitle">
                        <h2>Connect with us</h2>
                    </div>
                </div>

            </div>
        </div>

    </footer>

</html>
