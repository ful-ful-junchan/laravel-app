<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	{{-- ヘッダー --}}
	@include('include.header')
	
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				{{-- サイドバー --}}
				@if (!$hideSidebar)
					@include('include.sidebar')
				@endif
			
				{{-- コンテンツ --}}
				@yield('content')
			</div>
			
			{{-- フッター --}}
			@if (!$hideFooter)
				@include('include.footer')
			@endif
		</div>
	</body>
	
	{{-- フッターJavascript --}}
	@include('include.footer_js')
</html>