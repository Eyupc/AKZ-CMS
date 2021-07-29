<html lang="tr">
<head>
    <title>HABRON - Bakim</title>
    <link rel="icon" type="image/x-icon" href="../../../../assets/web-gallery/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../../../assets/web-gallery/css/style.css?ssss7s">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>

        /*assign full width inputs*/
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /*set a style for the buttons*/
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* set a hover effect for the button*/
        button:hover {
            opacity: 0.8;
        }

        /*set extra style for the cancel button*/
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /*centre the display image inside the container*/
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        /*set image properties*/
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        /*set padding to the container*/
        .container {
            padding: 16px;
        }

        /*set the forgot password text*/
        span.psw {
            float: right;
            padding-top: 16px;
        }

        /*set the Modal background*/
        .modal {
            display: none;
            position: fixed;
            z-index: 10;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        /*style the model content box*/
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 25%;
        }

        /*style the close button*/
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* add zoom animation*/
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="content">
    <div class="logo"></div>
    <div class="photo-gallery"></div>
    <div class="head-description wr-os"><b class="wr-blue">Habron.BIZ</b></div>
    <div class="desc-description wr-os">Şu anda bakim arasindayiz.</div>
    <div class="desc-description wr-os">Yenilikleri takip etmek için DISCORD sunucumuza katil.</div>
    <div class="btn white wr-rb"><b id="days"></b> Gün <b id="std"></b> Saat <b id="min"></b> Dakika <b id="sek"></b> Saniye</div>
    <a href="https://discord.gg/DzweFsWKKf"><div class="btn blue wr-rb">Discord sunucumuz</div></a>
    <div id="starsbg">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </div>
</div>
<div class="sidebar"></div>
<audio controls  style="display: none;">
    <!--<source src="./web-gallery/music/habbos.mp3" type="audio/mpeg">!-->
</audio>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Personel Girisi</button>
<div id="id01" class="modal">

    <form class="modal-content animate" action="/maintenance" method="POST">
        @csrf
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
        </div>

        <div class="container">
            <label><b>Kullanici Ismi</b></label>
            <input type="text" placeholder="Kullanici ismi" name="username" required>

            <label><b>Sifre</b></label>
            <input type="password" placeholder="Sifre" name="password" required>

            <button type="submit">Giris yap</button>
        </div>

    </form>
</div>
<script src="../../../../assets/web-gallery/js/habbo.js?ss"></script>
<script>
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
