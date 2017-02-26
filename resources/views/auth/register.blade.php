<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Matrix Admin</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/matrix-login.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="loginbox">            
        <form class="form-vertical" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
			<div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>
            <div class="control-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ trans('login.name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lv"><i class="icon-envelope"> </i></span><input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('login.emailAddress') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control" name="password" placeholder="{{ trans('login.password') }}">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="control-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lo"><i class="icon-lock"></i></span><input id="password_confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ trans('login.password_confirm') }}">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-right">{!! Form::submit(trans('login.register'), ['class' => 'btn btn-success']) !!}</span>
                 <span class="pull-left"><a class="btn btn-success" href="{{ url('/login') }}">{{ trans('login.login') }}</a></span>
            </div>
        </form>
    </div>
    <script src="js/jquery.min.js"></script>  
    <script src="js/matrix.login.js"></script> 
</body>

</html>
