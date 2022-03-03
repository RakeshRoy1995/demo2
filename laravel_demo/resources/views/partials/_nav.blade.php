<div class="topbar section">
    <div class="main">
        <div class="language">
            <a href="#">English </a>
        </div>
        <div class="account">
            <ul>
                <li><a href="#">Find a Store</a></li>
                

                @if(Auth::user())

                <li><a href="{{ route('myAccount') }}">My Account</a></li>

                <li>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button style="color: red" type="submit" >Logout</button>
                </form>
                    
                </li>

                
                @else
                <li><a href="{{ url('/login') }}" >Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>

<div class="navarea section">
    <div class="main">
        <div class="nav-wrapper">
        <div class="site-logo">
            <a href="#"><img src="assets/logo.png" alt=""></a>
        </div>
        <div class="navbar desktop">
            <div class="dropdown">
                <button class="dropbtn">Men 
                </button>
                <div class="dropdown-content">
                    <div class="row">
                        <div class="column">
                            <a href="#">Accessories</a>
                            <a href="#">Bags</a>
                            <a href="#">Caps & Hats</a>
                            <a href="#">Hoddies</a>
                            <a href="#">Jackets & Coats</a>
                            <a href="#">Jens</a>
                            <a href="#">Jewellery</a>
                            <a href="#">Jumpers & Cardiganes</a>
                            <a href="#">Leather Jacket</a>
                        </div>

                        <div class="column">
                            <a href="#">Shirts</a>
                            <a href="#">Shoes</a>
                            <a href="#">Shorts</a>
                            <a href="#">Suits &Blazers</a>
                            <a href="#">Sunglasses</a>
                            <a href="#">Sweatspants</a>
                            <a href="#">Swimware</a>
                            <a href="#">Trousers & Chinos</a>
                            <a href="#">T-Shirts</a>
                        </div>

                        <div class="column">
                            <a href="#">Accessories</a>
                            <a href="#">Bags</a>
                            <a href="#">Caps & Hats</a>
                            <a href="#">Hoddies</a>
                            <a href="#">Jackets & Coats</a>
                            <a href="#">Jens</a>
                            <a href="#">Jewellery</a>
                            <a href="#">Jumpers & Cardiganes</a>
                            <a href="#">Leather Jacket</a>
                        </div>
                    </div>
                    
                </div>
            </div> 
            <a href="#">Women</a>
            <a href="#">About</a>
            <a href="#">Blog</a>
            <a href="#">Support</a>
        </div>


        <div class="dropdown mobile">
            <button class="dropbtn"><i class="fa fa-bars"></i></button>
            <div class="dropdown-content">
            <a href="#">Men</a>
            <a href="#">Women</a>
            <a href="#">About</a>
            <a href="#">Blog</a>
            <a href="#">Support</a>
            </div>
        </div>


        <div class="cart">
            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        </div>
        </div>
    </div>
</div>