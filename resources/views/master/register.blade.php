
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Habron - Kayit</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/index.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</head>

<body>
@include('master.parts.header')

<div class="container">
    <div class="row justify-content-center" style="margin-top: 40px;">
        <div class="col-lg-6">

            <div id="registration-banner">
                <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staffs->look}}&amp;size=m&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;headonly=1" class="staff" data-id="{{$staffs->id}}" data-rank="{{$staffs->rank}}" data-toggle="tooltip" data-placement="top" title="{{$staffs->username}}" data-original-title="{{$staffs->username}}">
                <div class="bubble">
                    <div class="left"> </div>
                    <div class="middle"><strong><span class="user-style">{{$staffs->username}}</span></strong>: <span id="quotes">Habron'a hosgeldin!</span></div>
                    <div class="right">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{$error}}<br>
                        @endforeach
                    </div>
                    @endif
                    <h5 class="silver">Kayit</h5>
                    <form action="{{route('auth.register')}}" method="post">
                        @csrf
                        {!! RecaptchaV3::field('captcha') !!}
                        <div class="form-group">
                            <label>Kullanici isimi:</label>
                            <input type="text" name="username" class="form-control" placeholder="Kullanici ismi" data-parsley-required-message="Create a username for you." required >
                        </div>
                        <div class="form-group">
                            <label>E-posta:</label>
                            <input type="email" name="mail" class="form-control" placeholder="E-posta" data-parsley-required-message="Put a real email that you have access to." required >
                        </div>
                        <div class="form-group">
                            <label>Sifre:</label>
                            <input type="password" name="password" class="form-control" placeholder="Sifre.." data-parsley-required-message="Time to create a strong password." required >
                        </div>
                        <div class="form-group">
                            <label>Tekrardan sifrenizi girin:</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Tekrardan sifrenizi girin.." data-parsley-required-message="Retype your password here to confirm." required >
                        </div>
                        <div class="form-group">
                            <button name="register" type="submit" class="btn btn-primary btn-block">Kayit ol</button>
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
