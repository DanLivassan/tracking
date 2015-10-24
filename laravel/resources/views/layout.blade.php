<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="google-site-verification" content="cDOBHpaqeoB09SEje3aBQM43auFb8Mao4hsiMvzJ1Ys" />
	<meta name="viewport" content="width = device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>{{ $title }}</title>
	{!! HTML::style('/css/main.css') !!}
</head>
<body>
	<header>
		<input type="checkbox" id="check_menu" value="">
		<label class="logo" for="check_menu">| | |</label>
		<nav class="nav_top">
			<ul>
				@yield('itens_menu')
			</ul>
		</nav>
		
	

	</header>

	<div id="content">
		@if(Session::has('message'))
			<p id="msg" class="{{Session::get('message_type')}}">{{ Session::get('message') }}</p>
		@endif
		@yield('content')
	
	</div>

	<div id="footer">
		hahaha
		&copy; FacilitiDev {{ date('Y') }}
	</div>
</body>
</html>