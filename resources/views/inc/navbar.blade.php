<nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                 
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav">
                     <li class="{{Request::is('home')? 'active':''}}"><a href="/home">Home</a></li>
                     <li class="{{Request::is('profile')? 'active':''}}"><a href="/profile">Profile</a></li>
                    <li class="{{Request::is('Bangladesh')? 'active':''}}"><a href="/Bangladesh">Bangladesh</a></li>
                    <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Tourism 
                    in Bangladesh <span class="caret"></span></a> 
                    <ul class="dropdown-menu">
                    <li class="{{Request::is('Infrastructure')? 'active':''}}"><a href="/infrastructure">Tourism Infrastructure</a></li>
                    <li><a href="tourism-information.php">Tour Information</a></li>
                    </ul>
                    </li>
                    <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Tourism 
                    Attractions <span class="caret"></span></a> 
                    <ul class="dropdown-menu">
                     <li><a href="attraction-dhaka.php">Dhaka</a></li>
                     <li><a href="attraction-sundarban.php">Sundarban</a></li>
                     <li><a href="attraction-coxs-bazaar.php">Cox's Bazaar - Beach & Island</a></li>
                     <li><a href="attraction-archeology.php">Archeology of Bangladesh</a></li>
                     <li><a href="attraction-port-city.php">Port City Chittagong</a></li>
                     <li><a href="attraction-bandarban.php">Indigenous Life Bandarban</a></li>
                     <li><a href="attraction-rangamati.php">Rangamati - Tribe, Hill & Lake</a></li>
                     <li><a href="attraction-sylhet.php">Sylhet - Natural Beauty</a></li>
                     <li><a href="attraction-rural.php">Rural Bangladesh</a></li>
                     <li><a href="attraction-river.php">River Cruise</a></li>
                     <li><a href="attraction-photography.php">Photography</a></li>
                     <li><a href="attraction-student.php">Student Tour</a></li>
                     <li><a href="attraction-adventure.php">Adventure</a></li>
                     <li><a href="attraction-cultural.php">Cultural & Festival</a></li>
                     <li><a href="attraction-ngo.php">NGO Activity</a></li>
                     <li><a href="attraction-special.php">Special Interests</a></li>
                   </ul>
                   </li>
                   
                       <li class="{{Request::is('hotel')? 'active':''}}"><a href="/hotel">Hotels</a></li>
                       <li class="{{Request::is('about')? 'active':''}}"><a href="/about">About Us</a></li>
                       <li class="{{Request::is('ourservice')? 'active':''}}"><a href="/ourservice">Our Services</a></li>
                       <li class="{{Request::is('contact')? 'active':''}}"><a href="/contact">Contact</a></li>
                       
                 </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px;" aria-haspopup="true">
                                <img src="/uploads/avatars/{{auth::user()->avatar}}" style="width: 32px; height: 32px;position: absolute;top: 10px;left: 10px; border-radius: 50%;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                  <li><a href="/messages">Messages</a></li>
                                  <li><a href="/profile">Profile</a></li>
                                  <li><a href="/post">Post</a></li>
                                  <li><a href="/showpost">Check Post</a></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>