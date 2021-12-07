
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="{{ asset('account') }}/assets/css/style.css"> 
</head>


@include('account.admin.layouts.inc.header');
@include('account.admin.layouts.inc.sidebar');



@yield('content')



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