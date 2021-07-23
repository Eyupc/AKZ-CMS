<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Habron - Personeller</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/staff.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
@include('master.parts.header')
<body>
<style>
    .staff-block {
        background-color: #eee;
        border-radius: 5px;
        transition: all .3ms;
        width: 98%;
        margin-top: 8px;
    }
</style>
<main class="container justify-content-center py-4">
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="row">
                @if(count($onlineStaffs) > 0)
                <div class="col-12">
                    <div id="staff-banner">
                        @foreach($onlineStaffs as $staff)
                        <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=ey&headonly=1" class="staff" data-id="{{$staff->id}}" data-rank="{{$staff->rank}}" data-toggle="tooltip" data-placement="top" title="{{$staff->username}}">
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="silver" style="background-color: #005104; text-shadow: none; color: #fff;border-radius: 5px;margin-bottom: 8px;">
                                Kurucu</h5>
                            <img src="https://assets.habboon.pw/c_images/album1584//OWNR.gif" title="Habron Personeli" style="position: absolute;top: 15px;right: 25px;">
                            <div class="row no-gutters">
                                @foreach($staffs as $staff)
                                    @if($staff->rank == 8)
                                <div class="col-lg-6 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            @if($staff->online == 1)
                                            <div class="staff-block alert-success">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-2 text-center">
                                                        <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=ey&headonly=1" class="avatar" alt="{{$staff->username}}">
                                                    </div>
                                                    <div class="col-10">
                                                        <strong>{{$staff->username}}</strong><br />
                                                        <span>{{$staff->motto}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                                @else
                                                <div class="staff-block">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-2 text-center">
                                                            <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb&headonly=1" class="avatar offline " alt="{{$staff->username}}">
                                                        </div>
                                                        <div class="col-10">
                                                            <strong>{{$staff->username}}</strong><br />
                                                            <span>{{$staff->motto}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="silver" style="background-color: #B41359; text-shadow: none; color: #fff;border-radius: 5px;margin-bottom: 8px;">
                                Yönetici</h5>
                            <img src="https://assets.habboon.pw/c_images/album1584//MNGR.gif" title="Habron Personeli" style="position: absolute;top: 15px;right: 25px;">
                            <div class="row no-gutters">
                                @foreach($staffs as $staff)
                                    @if($staff->rank == 7)
                                <div class="col-lg-6 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            @if($staff->online == 1)
                                                <div class="staff-block alert-success">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-2 text-center">
                                                            <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=ey&headonly=1" class="avatar" alt="{{$staff->username}}">
                                                        </div>
                                                        <div class="col-10">
                                                            <strong>{{$staff->username}}</strong><br />
                                                            <span>{{$staff->motto}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="staff-block">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-2 text-center">
                                                            <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb&headonly=1" class="avatar offline " alt="{{$staff->username}}">
                                                        </div>
                                                        <div class="col-10">
                                                            <strong>{{$staff->username}}</strong><br />
                                                            <span>{{$staff->motto}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="silver" style="background-color: #002FA2; text-shadow: none; color: #fff;border-radius: 5px;margin-bottom: 8px;">
                            Menajer</h5>
                        <img src="https://assets.habboon.pw/c_images/album1584//MNGR.gif" title="Habron Personeli" style="position: absolute;top: 15px;right: 25px;">
                        <div class="row no-gutters">
                            @foreach($staffs as $staff)
                                @if($staff->rank == 6)
                                    <div class="col-lg-6 col-12">
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                @if($staff->online == 1)
                                                    <div class="staff-block alert-success">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-2 text-center">
                                                                <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=ey&headonly=1" class="avatar" alt="{{$staff->username}}">
                                                            </div>
                                                            <div class="col-10">
                                                                <strong>{{$staff->username}}</strong><br />
                                                                <span>{{$staff->motto}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="staff-block">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-2 text-center">
                                                                <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb&headonly=1" class="avatar offline " alt="{{$staff->username}}">
                                                            </div>
                                                            <div class="col-10">
                                                                <strong>{{$staff->username}}</strong><br />
                                                                <span>{{$staff->motto}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="silver" style="background-color: #D64306; text-shadow: none; color: #fff;border-radius: 5px;margin-bottom: 8px;">
                            Personel</h5>
                        <img src="https://assets.habboon.pw/c_images/album1584//MNGR.gif" title="Habron Personeli" style="position: absolute;top: 15px;right: 25px;">
                        <div class="row no-gutters">
                            @foreach($staffs as $staff)
                                @if($staff->rank > 2 && $staff->rank < 6)
                                    <div class="col-lg-6 col-12">
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                @if($staff->online == 1)
                                                    <div class="staff-block alert-success">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-2 text-center">
                                                                <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=ey&headonly=1" class="avatar" alt="{{$staff->username}}">
                                                            </div>
                                                            <div class="col-10">
                                                                <strong>{{$staff->username}}</strong><br />
                                                                <span>{{$staff->motto}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="staff-block">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-2 text-center">
                                                                <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb&headonly=1" class="avatar offline " alt="{{$staff->username}}">
                                                            </div>
                                                            <div class="col-10">
                                                                <strong>{{$staff->username}}</strong><br />
                                                                <span>{{$staff->motto}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
        <div class="card">
            <div class="card-body">
                <h5 class="silver" style="background-color: #98d2ff; text-shadow: none; color: #fff;border-radius: 5px;margin-bottom: 8px;">
                    Uzman</h5>
                <img src="https://assets.habboon.pw/c_images/album1584//OWNR.gif" title="Habron Personeli" style="position: absolute;top: 15px;right: 25px;">
                <div class="row no-gutters">
                    @foreach($staffs as $staff)
                        @if($staff->rank == 2)
                            <div class="col-lg-6 col-12">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        @if($staff->online == 1)
                                            <div class="staff-block alert-success">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-2 text-center">
                                                        <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=ey&headonly=1" class="avatar" alt="{{$staff->username}}">
                                                    </div>
                                                    <div class="col-10">
                                                        <strong>{{$staff->username}}</strong><br />
                                                        <span>{{$staff->motto}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="staff-block">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-2 text-center">
                                                        <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb&headonly=1" class="avatar offline " alt="{{$staff->username}}">
                                                    </div>
                                                    <div class="col-10">
                                                        <strong>{{$staff->username}}</strong><br />
                                                        <span>{{$staff->motto}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
                </div></div></div>
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="silver">Habron Personeli nedir?</h5>
                    <p class="mb-0">Habron personelleri, sizin güvenliğinizi sağlar ve daha keyifli bir şekilde Habron oynamanız için çalışırlar.
                        Personeller, özenle seçilip onaylanarak Habron görevlisi olarak eğitilmiş kişilerdir. Onaylanmayan, kötü davranışlar sergileyen Habron kullanıcılarına uyarılar gönderirler, Habron içerisinde çeşitli organizasyonlar düzenleyip, yönetirler ve daha keyifli bir vakit geçirmeniz için uğraşırlar.</p>
                </div>
            </div>
        </div></div>
</main>
@include('master.parts.footer')
</body>
</html>
