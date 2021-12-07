
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Register - Home</title>
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
							<h1 class="mb-3">Register</h1>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $error }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                @endforeach
                            @endif
							<form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="form-group">
									<input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                                    
                                </div>
								<div class="form-group">
									<input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
								<div class="form-group">
									<input class="form-control"  type="password"
                                    name="password"
                                    required autocomplete="new-password" placeholder="Password" />
                                 </div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							{{-- <div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div> --}}
							<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a> </div>
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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
