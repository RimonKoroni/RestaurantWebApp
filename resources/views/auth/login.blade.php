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
        <form class="form-vertical" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
			<div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>
            <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('login.emailAddress') }}">
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
            <div class="control-group">
                <div class="controls">
                    <div class="checkbox" style="padding-left: 42px;">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('login.rememberMe') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><a class="btn btn-info" href="{{ url('/password/reset') }}">{{ trans('login.forgotYourPassword') }}</a></span>
                <span class="pull-right">{!! Form::submit(trans('login.login'), ['class' => 'btn btn-success fa fa-btn fa-sign-in']) !!}</span>
            </div>
        </form>
    </div>
    <script src="js/jquery.min.js"></script>  
    <script src="js/matrix.login.js"></script> 
</body>

</html>
