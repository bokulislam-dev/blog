
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Login - Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/css/style.css"> 
</head>
<body>
    
    <div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="{{ asset('account') }}/assets/img/logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="text" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
                                </div>
								<div class="form-group">
									<input class="form-control" placeholder="Password"  type="password"
                                    name="password" required autocomplete="current-password">
                                </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							<div class="text-center forgotpass"><a href="{{ route('password.request') }}">Forgot Password?</a> </div>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							{{-- <div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div> --}}
							<div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('account') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('account') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('account') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('account') }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('account') }}/assets/plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('account') }}/assets/plugins/morris/morris.min.js"></script>
    <script src="{{ asset('account') }}/assets/js/chart.morris.js"></script>
    <script src="{{ asset('account') }}/assets/js/script.js"></script>
</body>

</html>



{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
