
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Habron - Giris</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/index.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')
<div class="container">
    <div class="row">
        <div class="col-12" id="gallery-header">
            <a href="/register" class="banner">
                <h4>Bir hesabin yok mu? Hemen kayit ol!</h4>
            </a>
        </div>

        <div class="col-lg-4 col-12 d-none d-lg-block">
            <h5 class="silver">Hotel'den kareler <span class="float-right"><i class="fas fa-camera-retro"></i></span></h5>
            <div class="row" id="latest-photos">
                <div class="col-12">
                    <div class="camera-carousel owl-carousel">

                        @foreach($photos as $photo)
                        <div class="item">
                            <img src="{{$photo->url}}" class="img-fluid" alt="" style="border-radius: 5px 5px 0 0;">
                            <div class="info  blue  ">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <div class="me">
                                            <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$photo->Habbo->look}}&direction=3&head_direction=3&gesture=sml&headonly=1" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <p><a><span class="user-style">{{$photo->Habbo->username}}</span></a><br /><span style="color: #fff;">{{\App\utils\Functions::convertToDate($photo->timestamp)}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 offset-lg-1 col-12">
            <div class="card">
                <div class="card-body">
                    @if($errors->has('wrongusername') || $errors->has('wrongpass'))
                    <div class="alert alert-danger">{{$errors->first()}}</div>
                    @endif
                    <h5 class="silver">Giris bilgileri</h5>
                    <form action="{{route('auth.login')}}" method="POST" class="form">
                        @csrf
                        <div class="form-group">
                            <label>Kullanici isimi:</label>
                            <input type="text" name="username" class="form-control" placeholder="Kullanici isimi" data-parsley-required-message="I think you forgot to enter your username." required>
                        </div>
                        <div class="form-group">
                            <label>Sifre:</label>
                            <input type="password" name="password" class="form-control" placeholder="Sifre.." data-parsley-required-message="I think you forgot to enter your password." required>
                        </div>
                        <div class="form-group">
                            <button name="login" type="submit" class="btn btn-primary btn-block">Giris yap</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@include('master.parts.footer')
</body>
</html>
