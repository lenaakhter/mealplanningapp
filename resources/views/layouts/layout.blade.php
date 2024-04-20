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
        @if (Auth::check())
    <!-- Dropdown for logged-in users -->
    <div class="dropdown">
        <a href="/dashboard" class="dropdown-link inline-flex items-center px-3 py-2 text-sm leading-4 font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
            {{ Auth::user()->name }}
          
        </a>
        <div class="dropdown-content hidden absolute bg-white shadow-md">
            <!-- Correct logout form setup -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
@else
    <!-- Direct link for visitors -->
    <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
        Login / Register
    </a>
@endif

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
                        <a href="/mindfulness" id="footlink">Mindfulness</a>
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

                        <span class="dot" href="" id="ig"></span>
                        <span class="dot"href="" id="fb"></span>
                        <span class="dot" href="" id="pin"></span>
                        <span class="dot" href="" id="tt"></span>
                        <span class="dot" href="" id="lnkdn"></span>

                    </div>
                </div>

            </div>
        </div>

    </footer>

</html>
