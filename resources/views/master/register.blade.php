
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Register</title>
    <link rel="shortcut icon" href="../../../assets/assets2/img/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="../../../assets/assets2/css/app.css?55">
    <link rel="stylesheet" href="../../../assets/assets2/css/index.css">
    <link rel="stylesheet" href="../../../assets/assets2/css/wulles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
@include('master.parts.header')

<div class="container">
    <div class="row justify-content-center" style="margin-top: 40px;">
        <div class="col-lg-6">

            <div id="registration-banner">
                <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{$staffs->look}}&amp;size=m&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;headonly=1" class="staff" data-id="{{$staffs->id}}" data-rank="{{$staffs->rank}}" data-toggle="tooltip" data-placement="top" title="{{$staffs->username}}" data-original-title="{{$staffs->username}}">
                <div class="bubble">
                    <div class="left"> </div>
                    <div class="middle"><strong><span class="user-style">{{$staffs->username}}</span></strong>: <span id="quotes">Please enjoy your stay!</span></div>
                    <div class="right">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="silver">Create an account</h5>
                    <form action="{{route('auth.register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="Usuario" class="form-control" placeholder="Name of user" data-parsley-required-message="Create a username for you." required >
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="Mail" class="form-control" placeholder="Your email" data-parsley-required-message="Put a real email that you have access to." required >
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="Contrasena" class="form-control" placeholder="Your password" data-parsley-required-message="Time to create a strong password." required >
                        </div>
                        <div class="form-group">
                            <label>Repeat Password:</label>
                            <input type="password" name="RContrasena" class="form-control" placeholder="Retype your password" data-parsley-required-message="Retype your password here to confirm." required >
                        </div>
                        <div class="form-group">
                            <label>Security Code:</label><br><font color="#888585">Use letters and numbers to create a security code.</font>
                            <input type="password" name="Contracode" class="form-control" placeholder="Security Code" data-parsley-required-message="You really need to create a code." required ><p class="alert--text"><font color="#740c01">You will need it to enter the Hotel.</font></p>
                        </div>
                        <div class="form-group">
                            <button name="register" type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('master.parts.footer')
</body>
</html>
