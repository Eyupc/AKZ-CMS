
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Habron - Ben</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-12">
            <div id="me">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-2">
                        <div class="avatar">
                            <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{auth()->user()->look}}&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=wav">
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9 offset-lg-1 offset-xl-0 offset-0 col-10">
                        <div class="row align-items-center details">
                            <div class="col-xl-8 col-lg-6 offset-2 offset-lg-0 col-10">
                                <h4><span class="user-style ">{{auth()->user()->username}}</span></h4>
                                <h6 style="margin-bottom: 0;">{{auth()->user()->motto}}</h6>
                            </div>
                            <div class='col-xl-4 col-lg-6 text-center d-none d-lg-block'><a href='/hotel' target='_blank' class='enter'><i class='fas fa-arrow-circle-right'></i> Hotele gir</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="silver">Son haberler <span class="float-right"><i class="far fa-newspaper"></i></span></h5>
            <div id="articles-strip">
                <div class="card-columns">

                    @foreach($news as $new)
                    <a href="/news/{{$new->id}}">
                    </a><div class="card"><a href="/news/{{$new->id}}">
                            <div class="card-body" style="background-image: url('{{$new->image}}')">
                                <div class="avatar">
                                    <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$new->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;headonly=1" data-toggle="tooltip" data-placement="top" data-title="" data-original-title="" title="">
                                </div>
                            </div>
                        </a><div class="card-footer"><a href="/news/{{$new->id}}">
                            </a><h6><a href="/news/{{$new->id}}"></a><a href="/news/{{$new->id}}"></a>{{$new->title}}</h6>
                            <p>{{$new->description}}</p>
                            <div class="info">
                                <div class="initial">
                                    <span class="username" style="color:#3490dc;">{{$new->author}}<span class="user-style "></span></span>
                                    <span class="published" style="color:red;">{{$new->date}}<i class="far fa-clock"></i> </span>
                                </div>
                                <div class="audience"><i class="fas fa-info-circle"></i> <a href="/news/{{$new->id}}"> Click to continue reading.</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div id="socials">
                <a href="#" target="_blank" class="facebook-banner">
                    <i class="fab fa-facebook"></i> <span>Facebook</span>
                </a>
                <a href="Discord" target="_blank" class="twitter-banner">
                    <i class="fab fa-twitter-square"></i> <span>Twitter</span>
                </a>
                <a href="https://discord.gg/CzJH4Cw7mS" target="_blank" class="discord-banner">
                    <i class="fab fa-discord"></i> <span>Discord</span>
                </a>
            </div>
            <h5 class="silver">Taktigin rozetler <span class="float-right"><i class="far fa-id-badge"></i></span></h5>
            <div id="sidebar-badges" class="card">
                <div class="card-body">
                    @foreach($badges as $badge)
                    <a class="badge-item" data-toggle="tooltip" data-placement="top" title="" data-original-title=""><img src="https://habron.biz/swf/c_images/album1584/{{$badge->badge_code}}.gif" alt=""></a>
                    @endforeach
                </div>
            </div>
            <h5 class="silver">Hotel'den son göruntuler <span class="float-right"><i class="fas fa-camera-retro"></i></span></h5>
            <div id="latest-photos">
                <div class="camera-carousel owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer"><div class="owl-stage">
                            @foreach($photos as $photo)
                            <div class="owl-item cloned" style="width: 210px; margin-right: 10px;">
                                <div class="item">
                                    <img src="{{$photo->url}}" class="img-fluid" alt="" style="border-radius: 5px 5px 0 0;">
                                    <div class="info  aqua ">
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
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
            </div>
        </div>
    </div>
</div>
@include('master.parts.footer')
</body>
</html>
