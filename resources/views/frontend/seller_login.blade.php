@extends('backend.layouts.layout')

@section('content')

<div class="h-100 bg-cover bg-center py-5 d-flex align-items-center" style="background-image: url({{ uploaded_asset(get_setting('seller_login_page_bg')) }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-4 mx-auto">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="mb-5 text-center">
                            @if(get_setting('system_logo_black') != null)
                                <img src="{{ uploaded_asset(get_setting('system_logo_black')) }}" class="mw-100 mb-4" height="40">
                            @else
                                <img src="{{ static_asset('assets/img/logo.png') }}" class="mw-100 mb-4" height="40">
                            @endif
                            <h1 class="fs-20 fs-md-24 fw-700 text-primary">{{ translate('Welcome Back !')}}</h1>
                            <h5 class="fs-14 fw-400 text-dark">{{ translate('Login To Your Seller Account')}}</h5>
                        </div>
                        <form class="pad-hor" method="POST" role="form" action="{{ route('seller.login.submit') }}">
                            @csrf
                            <!-- Email or Phone -->
                            <div class="form-group">
                                <label for="email" class="fs-12 fw-500 text-secondary">{{  translate('Email') }}</label>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} rounded-0" value="{{ old('email') }}" placeholder="{{  translate('johndoe@example.com') }}" name="email" id="email" autocomplete="off">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                                
                            <!-- password -->
                                               <div class="input-group border border-gray border-1">
                                              <input type="password" name="password" id="password" class="border-0 form-control" placeholder="Password" aria-label="Password" aria-describedby="toggle-password">
                                              <button class="btn border-0 opacity-50" type="button" id="toggle-password">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" {...props}><path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5s5 2.24 5 5s-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3z"></path></svg>

                                              </button>
                                            </div>

                            <div class="row mb-2">
                                <!-- Remember Me -->
                                <div class="col-6">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="has-transition fs-12 fw-400 text-gray-dark hov-text-primary">{{  translate('Remember Me') }}</span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                                <!-- Forgot password -->
                                <div class="col-6 text-right">
                                    <a href="{{ route('password.request') }}" class="text-reset fs-12 fw-400 text-gray-dark hov-text-primary"><u>{{ translate('Forgot password?')}}</u></a>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mb-4 mt-4">
                                <button type="submit" class="btn btn-primary btn-block fw-700 fs-14 rounded-4">{{  translate('Login') }}</button>
                            </div>
                        </form>
                        @if (env("DEMO_MODE") == "On")
                            <div class="mt-4">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>seller@example.com</td>
                                            <td>123456</td>
                                            <td><button class="btn btn-info btn-xs" onclick="autoFill()">{{ translate('Copy') }}</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
    <script type="text/javascript">
        function autoFill(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#toggle-password').click(function() {
      const passwordInput = $('#password');
      const passwordFieldType = passwordInput.attr('type');
      
      if (passwordFieldType === 'password') {
        passwordInput.attr('type', 'text');
        $('#toggle-password i').removeClass('bi-eye').addClass('bi-eye-slash');
      } else {
        passwordInput.attr('type', 'password');
        $('#toggle-password i').removeClass('bi-eye-slash').addClass('bi-eye');
      }
    });
  });
</script>
@endsection

