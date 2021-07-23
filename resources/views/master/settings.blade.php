<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Habron - Ayarlar</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')

<div class="container" >
    <div class="row">

        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="silver">Ayarlar</h5>
                    <ul class="nav nav-pills" id="account-navigation">
                        <li class="nav-item">
                            <a href="/settings/password" class="nav-link ">Sifre degisme</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            @if($errors->any())
                <div class="alert alert-danger">
             @foreach($errors->all() as $error)
                {{$error}}<br>
                @endforeach
                </div>
            @else
                @if(session('changed'))
                <div class="alert alert-success">{{Session::get('changed')}}</div>
                    @endif
            @endif
            <div class="card">
                <div class="card-body">
                    <h5 class="silver">Hesap ayarlari</h5>
                    <p><b>Hesabinizin siresini degisirken dikkat etmeniz gerekir.</b></p><hr>
                    <form action="{{route('post.password')}}" method="POST" class="form-horizontal">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label><strong>Suanki Sifreniz:</strong></label>
                                <input type="password" name="currentpass" id="inputEmail" size="32" maxlength="32" placeholder="Suanki sifreniz" id="current_password" class="form-control" required >
                                <span class="text-muted">Suanki hesap sifreniz.</span>
                            </div>
                            <div class="form-group">
                                <label><strong>Yeni sifreniz:</strong></label>
                                <input type="password" name="newpass" id="inputEmail" size="32" maxlength="32" placeholder="Yeni sifrenizi girin.." id="new_password" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <input type="password" name="newpass_2" id="inputEmail" size="32" maxlength="32" placeholder="Yeniden yeni sifrenizi girin.." id="new_password" class="form-control" required >
                                <span class="text-muted">Gelecekte kullanmakta olacaginiz sifre.</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="account" class="btn btn-primary btn-block">Sifremi degistir!</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@include('master.parts.footer')

</body>
</html>
