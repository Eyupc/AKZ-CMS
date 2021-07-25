<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Habron - Haberler</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css?{{\App\utils\Functions::cache()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')
<div class="container" >
    <div class="row articles-page">
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Son haberler</h5>

                  @foreach($news as $article)
									<a href="/news/{{$article->id}}" class="other" style="background-image: url('{{$article->image}}');">{{$article->title}}</a>
                    @endforeach

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Baska haberler</h5>
                        @for($i = 3; $i<= count($news) - 1; $i++)
						<a href="/news/{{$news[$i]->id}}" class="other" style="background-image: url('{{$article->image}}');">{{$news[$i]->title}}</a>
                    @endfor

                </div>
            </div>
        </div>

        @isset($newsId)
        <div class="col-lg-8 col-12">
            <div class="card" id="article">
                <div class="card-body">
                    <div id="header" style="background-image: url('{{$newsId->image}}');">
                    <div class="avatar" style="background: url('https://www.habbo.com/habbo-imaging/avatarimage?figure={{$newsId->Habbo->look}}&amp;size=m&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;action=wav);"></div>
                    <h6>{{$newsId->title}}<br><span>Tarafindan paylasildi: <font color="#3490DC">{{$newsId->Habbo->username}}</font>
                </div>
                <p class="content"></p><p></p><hr style="text-align: center;"><p></p><p>{{$newsId->longstory}}</p>
            </div>
        </div>
    </div>
            @endisset
</div>
</div>

@include('master.parts.footer')
</body>
</html>
