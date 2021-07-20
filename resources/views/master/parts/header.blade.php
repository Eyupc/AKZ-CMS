<header data-slides='["http://localhost/../assets/assets2/img/headers/coffee.png"]'>
    @if(Route::current()->getName() == 'register')
        {!! RecaptchaV3::initJs() !!}
@endif
        <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link"><img src="../../../../assets/assets2/img/hotel_icon.gif" class="nav-icon"> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../../../assets/assets2/img/news_icon.gif" class="nav-icon" style="line-height: 1.75em;">Community</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="/staff" class="dropdown-item">Staff</a>
                            <a href="/leaderboards" class="dropdown-item">Leaderboards</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/gallery" class="nav-link "><img src="../../../../assets/assets2/img/culture-exchange.gif" alt="" class="nav-icon"> Photo Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="/values" class="nav-link "><img src="../../../../assets/assets2/img/banzai_icon.gif" style="max-height: 17px; line-height: 1.75em;" alt="" class="nav-icon"> Values  <span class="badge badge-danger">New</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" target="_blank" class="nav-link activehk"><img src="../../../../assets/assets2/img/staffbuilder.gif" alt="" class="nav-icon"> <font color="#e216da">Housekeeping</font></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link "><img src="../../../../assets/assets2/img/tools_memberlist.gif" alt="" class="nav-icon">  Rules</a>
                    </li>
                    @if(auth()->user())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{auth()->user()->look}}&size=m&direction=2&head_direction=2&gesture=sml&headonly=1" class="avatar">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="/account/correo" class="dropdown-item ">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{route('logout')}}" onclick="$(this).find('form').submit();" class="dropdown-item">Logout</a>

                        </div>
                    </li>
                        @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="header-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <div class="owl-carousel header-carousel owl-theme">
                        <div class="item">
                            <a href="">
                                <div id="banner" style="background-image: url('');">
                                    <div class="text">
                                        <p></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <div id="banner" style="background-image: url('');">
                                <div class="text">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 offset-lg-1 offset-xl-1">
                    <div class="row">
                        <div class='col-lg-12 col-12'><a href='/hotel' target='_blank' class='enter'><div><i class='fas fa-arrow-circle-right'></i> Enter Zubbo</div></a></div>                        <div class="col-lg-12 col-6 d-none d-lg-block">
                            <div class='online'><i class='fas fa-restroom'></i> <span class='count'>{{\App\utils\Functions::getOnline()}}</span> Zubs Online</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
