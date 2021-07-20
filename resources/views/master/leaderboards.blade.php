<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Leaderboards</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?55">
    <link rel="stylesheet" href="../../../assets/assets2/css/leader.css">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')
<div class="container">
    <div class="row">

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><font color="#bf6211">Most Credits</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($credits as $top)
												<tr style="background-color: #f8f9fa; ">
												<td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$top->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
												<td width="75%">
												<font color="#209cee"><b><span class="user-style">{{$top->username}}</span></b></font>
												<br><b>{{$top->credits}}</b> Credits<span class="float-right"></span>
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
                    <h5 class="card-title"><font color="#7c189c">Most Duckets</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($duckets as $pixels)
												<tr style="background-color: #f8f9fa; ">
												<td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$pixels->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
												<td width="75%">
												<font color="#209cee"><b><span class="user-style">{{$pixels->Habbo->username}}</span></b></font>
												<br><b>{{$pixels->amount}}</b> Duckets<span class="float-right"></span>
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
                    <h5 class="card-title"><font color="#2977a9">Most Diamonds</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($points as $diamonds)
												<tr style="background-color: #f8f9fa; ">
												<td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$diamonds->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
												<td width="75%">
												<font color="#209cee"><b><span class="user-style '.$creditsStats['user_style'].'">{{$diamonds->Habbo->username}}</span></b></font>
												<br><b>{{$diamonds->amount}}</b> Diamonds<span class="float-right"></span>
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
                    <h5 class="card-title"><font color="#bf6211">Respects</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($respects as $respect)
                        <tr style="background-color: #f8f9fa; ">
                            <td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$respect->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
                            <td width="75%">
                                <font color="#209cee"><b><span class="user-style">{{$respect->Habbo->username}}</span></b></font>
                                <br><b>{{$respect->respects_received}}</b> Respects<span class="float-right"></span>
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
                    <h5 class="card-title"><font color="#7c189c">Achievement Score</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>

                        @foreach($achievements as $score)
                        <tr style="background-color: #f8f9fa; ">
                            <td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$score->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
                            <td width="75%">
                                <font color="#209cee"><b><span class="user-style">{{$score->Habbo->username}}</span></b></font>
                                <br><b>{{$score->achievement_score}}</b> Achievement Points<span class="float-right"></span>
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
                    <h5 class="card-title"><font color="#2977a9">Online Time</font></h5>
                    <table class="credit-leaderboard" width="100%">
                        <tbody>
                        @foreach($online as $time)
                            <tr style="background-color: #f8f9fa; ">
                                <td width="25%"><img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$time->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;headonly=1"></td>
                                <td width="75%">
                                    <font color="#209cee"><b><span class="user-style">{{$time->Habbo->username}}</span></b></font>
                                    <br><b>{{(int)($time->progress/60)  }}</b> Hours<span class="float-right"></span>
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
