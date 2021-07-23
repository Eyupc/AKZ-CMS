<header>
    <style>
        header .online {
            background-color: rgba(11,11,10,.7);
            border: 2px solid #4d4b46;
            border-radius: 5px;
            width: 100%;
            color: #fff;
            text-align: center;
            padding: 5px;
        }
        header .enter div {
            background-color: #5cb85c;
            border-radius: 5px;
            width: 100%;
            text-align: center;
            padding: 5px;
            margin-bottom: 5px;
            box-shadow: 0 2px 10px rgba(50,50,50,.5);
            text-decoration: none;
            transition: all .7s ease;
        }
        header .enter {
            color: #fff;
            text-decoration: none!important;
        }
        #navbarSupportedContent{
            background: white;
        }
        span#nav{
            color:black;
        }
    </style>
    @if(Route::current()->getName() == 'register')
        {!! RecaptchaV3::initJs() !!}
    @endif
    <div class="header-container">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between justify-content-lg-between align-items-center">
                <div class="col-lg-3 col-md-6 d-lg-block d-md-block d-none">
                    <img src="https://media.discordapp.net/attachments/690248336355491956/831650526022205500/habronlogo.png?163566738137513243241312111" alt="Habboon Logo">
                </div>
                <div class="col-lg-3 col-md-4 col-8">
            <div class="row">
                <div class="col-12">
                    @if(!auth()->user())
                    <a href="/register" class="enter">
                            <div>
                            <i style="color:white;" class="fas fa-plus"></i><span style="color: white; "> Hemen kayit ol!</span>
                            </div></a>
                    @else
                        <a href="/hotel" class="enter">
                        <div>
                            <i style="color:white;" class="fas fa-arrow-circle-right"></i><span style="color: white; "> Hotele gir!</span>
                        </div></a>
                    @endif
                </div>
                <div class="col-12">
                    <div class="online">
                        <i class="fas fa-users"></i> <span class="count">{{\App\utils\Functions::getOnline()}}</span> Kullanici aktif
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link"><img src="" class="nav-icon"> <span id="nav">BEN</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="" class="nav-icon" style="line-height: 1.75em;"><span id="nav">TOPLULUK</span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="/staff" class="dropdown-item"><span id="nav">PERSONEL</span></a>
                            <a href="/leaderboards" class="dropdown-item"><span id="nav">LIDERLER</span></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/gallery" class="nav-link "><img src="" alt="" class="nav-icon"> <span id="nav">FOTOGRAFLAR</span></a>
                    </li>
                </ul>
                @if(auth()->user())
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{auth()->user()->look}}&size=m&direction=4&head_direction=4&gesture=sml&headonly=1" alt="pussycatcher" class="avatar">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="/settings" class="dropdown-item ">Hesap ayarlari</a>
                            <div class="dropdown-divider"></div>
                            <a href="/logout" onclick="$(this).find('form').submit();" class="dropdown-item">
                                Cikis yap
                            </a></div>
                </ul>
                    @endif
            </div>
        </div>
    </nav>

</header>
