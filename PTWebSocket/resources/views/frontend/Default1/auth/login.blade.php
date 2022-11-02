@extends('backend.layouts.auth')

@section('page-title', trans('app.login'))

@section('content')
<img src="prva.jpg" style="position: absolute;
    width: 100%;
    top: 0%;
    height: 100%;
    z-index: -1;">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ route('frontend.auth.login') }}"><span class="logo-lg"><b><br><br><br></b> <small></small></span></a>
    </div>
	
	<div>
<font size="4"><a href="https://t.me/betito247"></a></font>
</div>
<br>
    @include('backend.partials.messages')

    <div class="login-box-body">

      <form role="form" action="<?= route('frontend.auth.login.post') ?>" method="POST" id="login-form" autocomplete="off">

        <input type="hidden" value="<?= csrf_token() ?>" name="_token">
		<br>
<span  style="color: #fff;
    padding: 0px 0px 0px 40%;
    font-size: inherit;
    font-weight: 700;
}">Username:</span>
        <div class="form-group has-feedback">
          <input type="text" name="username" id="username" class="form-control" placeholder="@lang('app.email_or_username')">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
<span  style="color: #fff;
    padding: 0px 0px 0px 40%;
    font-size: inherit;
    font-weight: 700;
}">Password:</span>
        <div class="form-group has-feedback">
          <input type="password" name="password" id="password" class="form-control" placeholder="@lang('app.password')">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
<span  style="color: #fff;
    padding: 0px 0px 0px 37%;
    font-size: inherit;
    font-weight: 700;
}">REMEMBER ME</span>
			<input type="checkbox" name="rememberme" value="rememberme" checked style="display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;"><br>

        <div class="row">
          <div class="col-xs-12">

            <button type="submit" class="btn btn-primary btn-block btn-flat" id="btn-login">
              @lang('app.log_in')
            </button>
<br>
          </div>
        </div>


      </form>

    </div>
  </div>

  <script src="/back/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/back/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/back/plugins/iCheck/icheck.min.js"></script>

@stop

@section('scripts')
  {!! JsValidator::formRequest('VanguardLTE\Http\Requests\Auth\LoginRequest', '#login-form') !!}
@stop