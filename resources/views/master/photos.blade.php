<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Habron Resimler</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/gallery.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')
<div class="container" >
    <div id="notification-center"></div>
    <div class="row align-items-center " id="gallery-header">
        <div class="col-lg-12 col-12 d-none d-lg-block">
            <div class="banner">
                <h4>Son Fotograflar</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="row" id="photos">

                    @foreach($photos as $photo)
                    <div class='col-xl-4 col-lg-6 col-md-6 col-12'>
                    <div class="card photo">
                        <div class="card-body">
                            <div class="image" id="photo-{{$photo->id}}" style="background-image: url('{{$photo->url}}');"></div>
                        </div>
                        <div class="card-footer  blue  ">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <div class="me">
                                        <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$photo->Habbo->look}}&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;headonly=1" alt="">
                                    </div>
                                </div>
                                <div class="col-9">
                                    <p><a><span class="user-style">{{$photo->Habbo->username}}</span></a><br /><span style="color: #fff;">{{\App\utils\Functions::convertToDate($photo->timestamp)}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button id="loadMore" class="btn btn-primary load-photos">Daha Fazla</button>
        </div>
    </div>
    <p class="totop"> <a href="#top">Yukariya çik</a></p>
</div>
@include('master.parts.footer')
</body>
</html>
