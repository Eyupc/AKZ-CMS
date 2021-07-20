<!DOCTYPE html>
<html lang="pt-br">

<head>
    @section('title',"News")
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?55">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')
<div class="container" >
    <div class="row articles-page">
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Latest News</h5>

                  @foreach($news as $article)
									<a href="/news/{{$article->id}}" class="other" style="background-image: url('{{$article->image}}');">{{$article->title}}</a>
                    @endforeach

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Other News</h5>
                        @foreach($news as $article)
						<a href="/news/{{$article->id}}" class="other" style="background-image: url('{{$article->image}}');">{{$article->title}}</a>
                    @endforeach

                </div>
            </div>
        </div>

        @isset($newsId)
        <div class="col-lg-8 col-12">
            <div class="card" id="article">
                <div class="card-body">
                    <div id="header" style="background-image: url('{{$newsId->image}}');">
                    <div class="avatar" style="background: url('https://www.habbo.com/habbo-imaging/avatarimage?figure={{$newsId->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav);"></div>
                    <h6>{{$newsId->title}}<br><span>Posted by <font color="#3490DC">{{$newsId->Habbo->username}}</font>
                </div>
                <p class="content"></p><p></p><hr style="text-align: center;"><p></p><p>{{$newsId->longstroy}}</p>
            </div>
        </div>
    </div>
            @endisset
</div>
</div>

@include('master.parts.footer')
</body>
</html>
