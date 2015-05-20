<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300'
	rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<nav class="navbar navbar-default">
		<div class="container-fluid">
</div>
	</nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Giriş Paneli</h3>
                    </div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



<link href="{{ asset('/css/bootstrap-theme.min.css') }}" rel="stylesheet">
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>

<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">



@if (count($errors) > 0)
<script type="text/javascript">
$(document).ready(function(){
    $(".bs-example").delay( 1000 ).slideUp();
});
</script>
<div class="bs-example">
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <ul>
    @foreach ($errors->all() as $error)
    		<li><strong>Hata ! </strong> {{ $error }}</li>
    @endforeach
    </ul>
    </div>
</div>
@endif




@if (isset($data))
<script type="text/javascript">
$(document).ready(function(){
    $(".bs-example").delay( 1000 ).slideUp();
});
</script>
<div class="bs-example">
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <ul>
     @foreach($data as $veri)
     <li><strong>Hata ! </strong> {{ $veri }}</li>
      @endforeach
    </ul>
    </div>
</div>
@endif


                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('/admin') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="mail@mail.com" autofocus >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="12345" autocomplete="off">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Beni Hatırla
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block" value = "Giriş Yap">Giriş Yap</button>
                            </fieldset>
                        </form>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>





</body>
</html>
