<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>K&K LLC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="ここにサイト説明を入れます">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	
	<body id="home">
		<div class="wrapper">
			<div id="container">
				<header>
					<div id="logo">
						<img src="/images/kkmark.png" id="mark">
						<ruby>
							<a href="/">K&K LLC</a>
							<rt>ウェブの可能性</rt>
						</ruby>
					</div>
				</header>
				
				<div class="main">
				    @yield('main')
				    
				</div>
				<footer>
					<ul id="footermenu">
						<li><a href="/outline">企業概要</a></li>
						<li><a href="/contact">お問い合わせ</a></li>
					</ul>
				</footer>
				
				<!--ページの上部へ戻るボタン-->
				<div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>
			</div>
		</div>	
	</body>
</html>	