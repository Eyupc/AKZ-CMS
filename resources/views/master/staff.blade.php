<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Staff Team</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css">
    <link rel="stylesheet" href="../../../assets/assets2/css/staff.css">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')
<div class="container" >
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="row">
                <div class="col-12">
                    <div id="staff-banner">
                        @foreach($onlineStaffs as $staff)
                        <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&size=m&direction=3&head_direction=3&gesture=sml&headonly=1" class="staff" data-id="<{{$staff->id}}" data-rank="<{{$staff->rank}}" data-toggle="tooltip" data-placement="top" title="{{$staff->username}}">
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rank-profile owner">
                        <div class="owl-carousel staff-carousel owl-theme">
                            @foreach($staffs as $staff)
                                @if($staff->rank == 8)
                            <div class="item text-center">
                                <div class="row">
                                    <div class="col-12"><img src="/swf/c_images/album1584/ADM.gif" class="badge" data-toggle="tooltip" data-placement="top"></div>
                                    <div class="col-12">
                                        <div class="bubble">
                                            <div class="left"></div>
                                            <div class="middle"><strong><span class="user-style">{{$staff->username}}</span></strong>: {{$staff->motto}}</div>
                                            <div class="right">&nbsp;</div>
                                        </div>
                                    </div>
                                    @if($staff->online == 1)<div class="col-12"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=wav&amp;frame=0" class="avatar " alt=""></div>@else<div class="col-12"><img src="../../../assets/assets2/img/sleeping.png" class="sleeping" alt=""><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb" class="avatar  offline" alt=""></div>@endif
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rank-profile manager">
                        <div class="owl-carousel staff-carousel owl-theme">
                            @foreach($staffs as $staff)
                                @if($staff->rank == 7)
                                    <div class="item text-center">
                                        <div class="row">
                                            <div class="col-12"><img src="/swf/c_images/album1584/ADM.gif" class="badge" data-toggle="tooltip" data-placement="top"></div>
                                            <div class="col-12">
                                                <div class="bubble">
                                                    <div class="left"></div>
                                                    <div class="middle"><strong><span class="user-style">{{$staff->username}}</span></strong>: {{$staff->motto}}</div>
                                                    <div class="right">&nbsp;</div>
                                                </div>
                                            </div>
                                            @if($staff->online == 1)<div class="col-12"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=wav&amp;frame=0" class="avatar " alt=""></div>@else<div class="col-12"><img src="../../../assets/assets2/img/sleeping.png" class="sleeping" alt=""><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb" class="avatar  offline" alt=""></div>@endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rank-profile admin">
                        <div class="owl-carousel staff-carousel owl-theme">
                            @foreach($staffs as $staff)
                                @if($staff->rank == 6)
                                    <div class="item text-center">
                                        <div class="row">
                                            <div class="col-12"><img src="/swf/c_images/album1584/ADM.gif" class="badge" data-toggle="tooltip" data-placement="top"></div>
                                            <div class="col-12">
                                                <div class="bubble">
                                                    <div class="left"></div>
                                                    <div class="middle"><strong><span class="user-style">{{$staff->username}}</span></strong>: {{$staff->motto}}</div>
                                                    <div class="right">&nbsp;</div>
                                                </div>
                                            </div>
                                            @if($staff->online == 1)<div class="col-12"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=wav&amp;frame=0" class="avatar " alt=""></div>@else<div class="col-12"><img src="../../../assets/assets2/img/sleeping.png" class="sleeping" alt=""><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb" class="avatar  offline" alt=""></div>@endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rank-profile moderator">
                        <div class="owl-carousel staff-carousel owl-theme">
                            @foreach($staffs as $staff)
                                @if($staff->rank == 5)
                                    <div class="item text-center">
                                        <div class="row">
                                            <div class="col-12"><img src="/swf/c_images/album1584/ADM.gif" class="badge" data-toggle="tooltip" data-placement="top"></div>
                                            <div class="col-12">
                                                <div class="bubble">
                                                    <div class="left"></div>
                                                    <div class="middle"><strong><span class="user-style">{{$staff->username}}</span></strong>: {{$staff->motto}}</div>
                                                    <div class="right">&nbsp;</div>
                                                </div>
                                            </div>
                                            @if($staff->online == 1)<div class="col-12"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=wav&amp;frame=0" class="avatar " alt=""></div>@else<div class="col-12"><img src="../../../assets/assets2/img/sleeping.png" class="sleeping" alt=""><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staff->look}}&direction=3&head_direction=3&gesture=eyb" class="avatar  offline" alt=""></div>@endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-body">
                    <h5>The Team</h5>
                    <p> Hotel's team is one big happy family, each staff member has a different role and duties to fulfill.<br><br>Most of our team usually consists of players who have been on  for quite some time, but that does not mean that we only recruit old and well-known players, we recruit those who shine for us!</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@include('master.parts.footer')
</body>
</html>
