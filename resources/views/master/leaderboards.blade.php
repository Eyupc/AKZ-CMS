<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Habron - Liderler</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/leader.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')
<div class="container">
    <div class="row">

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><font color="#bf6211">Kredi</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($credits as $top)
												<tr style="background-color: #f8f9fa; ">
												<td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$top->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
												<td width="75%">
												<font color="#209cee"><b><span class="user-style">{{$top->username}}</span></b></font>
												<br><b>{{$top->credits}}</b> Kredi<span class="float-right"></span>
												</td>
												</tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><font color="#7c189c">Elmas</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($points as $diamonds)
                            <tr style="background-color: #f8f9fa; ">
                                <td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$diamonds->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
                                <td width="75%">
                                    <font color="#209cee"><b><span class="user-style '.$creditsStats['user_style'].'">{{$diamonds->Habbo->username}}</span></b></font>
                                    <br><b>{{$diamonds->amount}}</b> Elmas<span class="float-right"></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><font color="#2977a9">Yildiz Puani</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($GOTW as $YP)
                            <tr style="background-color: #f8f9fa; ">
                                <td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$YP->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
                                <td width="75%">
                                    <font color="#209cee"><b><span class="user-style">{{$YP->Habbo->username}}</span></b></font>
                                    <br><b>{{$YP->amount}}</b> Yildiz Puani<span class="float-right"></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><font color="#bf6211">Saygi</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($respects as $respect)
                        <tr style="background-color: #f8f9fa; ">
                            <td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$respect->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
                            <td width="75%">
                                <font color="#209cee"><b><span class="user-style">{{$respect->Habbo->username}}</span></b></font>
                                <br><b>{{$respect->respects_received}}</b> Saygi<span class="float-right"></span>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><font color="#7c189c">Basari Puani</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>

                        @foreach($achievements as $score)
                        <tr style="background-color: #f8f9fa; ">
                            <td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$score->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
                            <td width="75%">
                                <font color="#209cee"><b><span class="user-style">{{$score->Habbo->username}}</span></b></font>
                                <br><b>{{$score->achievement_score}}</b> Basari Puani<span class="float-right"></span>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><font color="#2977a9">Aktiflik</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($online as $time)
                            <tr style="background-color: #f8f9fa; ">
                                <td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$time->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
                                <td width="75%">
                                    <font color="#209cee"><b><span class="user-style">{{$time->Habbo->username}}</span></b></font>
                                    <br><b>{{(int)($time->progress/60)  }}</b> Saat<span class="float-right"></span>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<@include('master.parts.footer')
</body>
</html>
