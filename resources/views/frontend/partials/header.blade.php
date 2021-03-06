<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions">

                        @if(auth()->user())
                        <a href="{{route('user.profile')}}"><i class="fa fa-user" style="font-size: 20px;padding-right: 10px"></i>Profile</a>
                            <a href="{{route('user.logout')}}">Logout<i class="fa fa-sign-out" style="font-size: 20px;padding-right: 10px"></i></a>
                        @else
                            <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                        @endif

                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-title text-center">
                                            <h4>Login</h4>
                                        </div>
                                        <div class="d-flex flex-column text-center">
                                            <form  action="{{route('user.login')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" id="email1"placeholder="Your email address...">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control" id="password1" placeholder="Your password...">
                                                </div>
                                                <input type="submit" class="btn btn-info btn-block btn-round" value="Login">
                                            </form>

                                            <div class="text-center text-muted delimiter">or use a social network</div>
                                            <div class="d-flex justify-content-center social-buttons">
                                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </button>
                                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </button>
                                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </button>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><img src="images/flag/usa.svg" alt=""> USD</a></li>
                                    <li><a href="#"><img src="images/flag/singapore.svg" alt=""> SGD</a></li>
                                    <li><a href="#"><img src="images/flag/japan.svg" alt=""> JPN</a></li>
                                </ul>
                            </div>
                            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Japanese</a></li>
                                    <li><a href="#">Chinese</a></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <div class="header__logo"><a class="ps-logo" href="index.html"><img src="frontend/images/logo.png" alt=""></a></div>
            </div>
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    <li class="menu-item menu-item-has-children dropdown"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Homepage #1</a></li>
                            <li class="menu-item"><a href="#">Homepage #2</a></li>
                            <li class="menu-item"><a href="#">Homepage #3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>
                        <div class="mega-menu">
                            <div class="mega-wrap">
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.html">NEW RELEASES</a></li>
                                        <li><a href="product-listing.html">FEATURES SHOES</a></li>
                                        <li><a href="product-listing.html">BEST SELLERS</a></li>
                                        <li><a href="product-listing.html">NOW TRENDING</a></li>
                                        <li><a href="product-listing.html">SUMMER ESSENTIALS</a></li>
                                        <li><a href="product-listing.html">MOTHER'S DAY COLLECTION</a></li>
                                        <li><a href="product-listing.html">FAN GEAR</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">Shoes</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">All Shoes</a></li>
                                        <li><a href="product-listing.html">Running</a></li>
                                        <li><a href="product-listing.html">Training & Gym</a></li>
                                        <li><a href="product-listing.html">Basketball</a></li>
                                        <li><a href="product-listing.html">Football</a></li>
                                        <li><a href="product-listing.html">Soccer</a></li>
                                        <li><a href="product-listing.html">Baseball</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">CLOTHING</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                                        <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                                        <li><a href="product-listing.html">Polos</a></li>
                                        <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-listing.html">Jackets & Vests</a></li>
                                        <li><a href="product-listing.html">Pants & Tights</a></li>
                                        <li><a href="product-listing.html">Shorts</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">Accessories</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                                        <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                                        <li><a href="product-listing.html">Polos</a></li>
                                        <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-listing.html">Jackets & Vests</a></li>
                                        <li><a href="product-listing.html">Pants & Tights</a></li>
                                        <li><a href="product-listing.html">Shorts</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">BRAND</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">NIKE</a></li>
                                        <li><a href="product-listing.html">Adidas</a></li>
                                        <li><a href="product-listing.html">Dior</a></li>
                                        <li><a href="product-listing.html">B&G</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a href="#">Women</a></li>
                    <li class="menu-item"><a href="#">Kids</a></li>
                    <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.html">Blog-grid</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>
                                    <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
                            <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navigation__column right">
                <form class="ps-search--header" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="Search Product???">
                    <button><i class="ps-icon-search"></i></button>
                </form>
                <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>
                    <div class="ps-cart__listing">
                        <div class="ps-cart__content">
                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="frontend/images/cart-preview/1.jpg" alt=""></div>
                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Amazin??? Glazin???</a>
                                    <p><span>Quantity:<i>12</i></span><span>Total:<i>??176</i></span></p>
                                </div>
                            </div>
                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="frontend/images/cart-preview/2.jpg" alt=""></div>
                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Crusty Croissant</a>
                                    <p><span>Quantity:<i>12</i></span><span>Total:<i>??176</i></span></p>
                                </div>
                            </div>
                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="frontend/images/cart-preview/3.jpg" alt=""></div>
                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Rolling Pin</a>
                                    <p><span>Quantity:<i>12</i></span><span>Total:<i>??176</i></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-cart__total">
                            <p>Number of items:<span>36</span></p>
                            <p>Item Total:<span>??528.00</span></p>
                        </div>
                        <div class="ps-cart__footer"><a class="ps-btn" href="cart.html">Check out<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>
</header>





































{{--<div class="header__top">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">--}}
{{--                    <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>--}}
{{--            </div>--}}

{{--            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">--}}
{{--                @if(auth()->user())--}}
{{--                    <div class="header__actions" ><a href=""data-toggle="modal" data-target="#loginModal" ><i class="fas fa-user" style="font-size: 20px;padding-right: 10px"></i>Profile</a>--}}
{{--                @else--}}
{{--                    <div class="header__actions" ><a href=""data-toggle="modal" data-target="#loginModal">Login</a>--}}
{{--                @endif--}}

{{--                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header border-bottom-0">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                            <span aria-hidden="true">&times;</span>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <div class="form-title text-center">--}}
{{--                                            <h4>Login</h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex flex-column text-center">--}}
{{--                                            <form method="post"action="{{route('user.login')}}">--}}
{{--                                                @csrf--}}
{{--                                                <div class="form-group" >--}}
{{--                                                    <input type="email" name="email" class="form-control" id="email1"placeholder="Your email address...">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input type="password" name="password" class="form-control" id="password1" placeholder="Your password...">--}}
{{--                                                </div>--}}
{{--                                                <input type="submit" class="btn btn-info btn-block btn-round" value="Login">--}}
{{--                                            </form>--}}

{{--                                            <div class="text-center text-muted delimiter">or use a social network</div>--}}
{{--                                            <div class="d-flex justify-content-center social-buttons">--}}
{{--                                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">--}}
{{--                                                    <i class="fab fa-twitter"></i>--}}
{{--                                                </button>--}}
{{--                                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">--}}
{{--                                                    <i class="fab fa-facebook"></i>--}}
{{--                                                </button>--}}
{{--                                                <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">--}}
{{--                                                    <i class="fab fa-linkedin"></i>--}}
{{--                                                </button>--}}
{{--                                                </di>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer d-flex justify-content-center">--}}
{{--                                        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#"><img src="{{asset('assets/images/flag/usa.svg')}}" alt=""> USD</a></li>--}}
{{--                                <li><a href="#"><img src="{{asset('assets/images/flag/singapore.svg')}}" alt=""> SGD</a></li>--}}
{{--                                <li><a href="#"><img src="{{asset('assets/images/flag/japan.svg')}}" alt=""> JPN</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">English</a></li>--}}
{{--                                <li><a href="#">Japanese</a></li>--}}
{{--                                <li><a href="#">Chinese</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}



{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<nav class="navigation">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="navigation__column left">--}}
{{--            <div class="header__logo"><a class="ps-logo" href="{{route('home')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""></a></div>--}}
{{--        </div>--}}
{{--        <div class="navigation__column center">--}}
{{--            <ul class="main-menu menu">--}}
{{--                <li class="menu-item menu-item-has-children dropdown"><a href="{{route('home')}}">Home</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="menu-item"><a href="{{route('home')}}">Homepage #1</a></li>--}}
{{--                        <li class="menu-item"><a href="{{route('home')}}">Homepage #2</a></li>--}}
{{--                        <li class="menu-item"><a href="{{route('home')}}">Homepage #3</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>--}}
{{--                    <div class="mega-menu">--}}
{{--                        <div class="mega-wrap">--}}
{{--                            <div class="mega-column">--}}
{{--                                <ul class="mega-item mega-features">--}}
{{--                                    <li><a href="product-listing.html">NEW RELEASES</a></li>--}}
{{--                                    <li><a href="product-listing.html">FEATURES SHOES</a></li>--}}
{{--                                    <li><a href="product-listing.html">BEST SELLERS</a></li>--}}
{{--                                    <li><a href="product-listing.html">NOW TRENDING</a></li>--}}
{{--                                    <li><a href="product-listing.html">SUMMER ESSENTIALS</a></li>--}}
{{--                                    <li><a href="product-listing.html">MOTHER'S DAY COLLECTION</a></li>--}}
{{--                                    <li><a href="product-listing.html">FAN GEAR</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="mega-column">--}}
{{--                                <h4 class="mega-heading">Shoes</h4>--}}
{{--                                <ul class="mega-item">--}}
{{--                                    <li><a href="product-listing.html">All Shoes</a></li>--}}
{{--                                    <li><a href="product-listing.html">Running</a></li>--}}
{{--                                    <li><a href="product-listing.html">Training & Gym</a></li>--}}
{{--                                    <li><a href="product-listing.html">Basketball</a></li>--}}
{{--                                    <li><a href="product-listing.html">Football</a></li>--}}
{{--                                    <li><a href="product-listing.html">Soccer</a></li>--}}
{{--                                    <li><a href="product-listing.html">Baseball</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="mega-column">--}}
{{--                                <h4 class="mega-heading">CLOTHING</h4>--}}
{{--                                <ul class="mega-item">--}}
{{--                                    <li><a href="product-listing.html">Compression & Nike Pro</a></li>--}}
{{--                                    <li><a href="product-listing.html">Tops & T-Shirts</a></li>--}}
{{--                                    <li><a href="product-listing.html">Polos</a></li>--}}
{{--                                    <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>--}}
{{--                                    <li><a href="product-listing.html">Jackets & Vests</a></li>--}}
{{--                                    <li><a href="product-listing.html">Pants & Tights</a></li>--}}
{{--                                    <li><a href="product-listing.html">Shorts</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="mega-column">--}}
{{--                                <h4 class="mega-heading">Accessories</h4>--}}
{{--                                <ul class="mega-item">--}}
{{--                                    <li><a href="product-listing.html">Compression & Nike Pro</a></li>--}}
{{--                                    <li><a href="product-listing.html">Tops & T-Shirts</a></li>--}}
{{--                                    <li><a href="product-listing.html">Polos</a></li>--}}
{{--                                    <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>--}}
{{--                                    <li><a href="product-listing.html">Jackets & Vests</a></li>--}}
{{--                                    <li><a href="product-listing.html">Pants & Tights</a></li>--}}
{{--                                    <li><a href="product-listing.html">Shorts</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="mega-column">--}}
{{--                                <h4 class="mega-heading">BRAND</h4>--}}
{{--                                <ul class="mega-item">--}}
{{--                                    <li><a href="product-listing.html">NIKE</a></li>--}}
{{--                                    <li><a href="product-listing.html">Adidas</a></li>--}}
{{--                                    <li><a href="product-listing.html">Dior</a></li>--}}
{{--                                    <li><a href="product-listing.html">B&G</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="menu-item"><a href="#">Women</a></li>--}}
{{--                <li class="menu-item"><a href="#">Kids</a></li>--}}
{{--                <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.html">Blog-grid</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>--}}
{{--                                <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="menu-item"><a href="blog-list.html">Blog List</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li class="menu-item"><a href="{{route('contactUs')}}">Contact Us #1</a></li>--}}
{{--                        <li class="menu-item"><a href="{{route('contactsUs')}}">Contact Us #2</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="navigation__column right">--}}
{{--            <form class="ps-search--header" action="do_action" method="post">--}}
{{--                <input class="form-control" type="text" placeholder="Search Product???">--}}
{{--                <button><i class="ps-icon-search"></i></button>--}}
{{--            </form>--}}
{{--            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>--}}
{{--                <div class="ps-cart__listing">--}}
{{--                    <div class="ps-cart__content">--}}
{{--                        <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>--}}
{{--                            <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/cart-preview/1.jpg" alt=""></div>--}}
{{--                            <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Amazin??? Glazin???</a>--}}
{{--                                <p><span>Quantity:<i>12</i></span><span>Total:<i>??176</i></span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>--}}
{{--                            <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/cart-preview/2.jpg" alt=""></div>--}}
{{--                            <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Crusty Croissant</a>--}}
{{--                                <p><span>Quantity:<i>12</i></span><span>Total:<i>??176</i></span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>--}}
{{--                            <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/cart-preview/3.jpg" alt=""></div>--}}
{{--                            <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">The Rolling Pin</a>--}}
{{--                                <p><span>Quantity:<i>12</i></span><span>Total:<i>??176</i></span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="ps-cart__total">--}}
{{--                        <p>Number of items:<span>36</span></p>--}}
{{--                        <p>Item Total:<span>??528.00</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="ps-cart__footer"><a class="ps-btn" href="cart.html">Check out<i class="ps-icon-arrow-left"></i></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="menu-toggle"><span></span></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
