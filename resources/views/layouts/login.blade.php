<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	{{-- ヘッダー --}}
	@include('include.header')
	
	<body class="login">
		<div>
			{{-- コンテンツ --}}
			@yield('content')
		</div>
	</body>
	
	{{-- フッターJavascript --}}
	@include('include.footer_js')
</html>