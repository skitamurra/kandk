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
			<header>
				<div id="logo">
					<img src="/images/kkmark.png" id="mark">
					<ruby>
						<a href="/">K&K LLC</a>
						<rt>ウェブの可能性</rt>
					</ruby>
				</div>
			</header>
			
			<main>
				<section>
					<h1><font size="10">K&K The Destination is a New Future!</font></h1>
					<h2>インターネット事業を通じて社会をより豊かに</h2>
				</section>
				<!--<div id="map" style="height:500px"></div>-->
				<!--<script src="{{ asset('/js/app.js') }}"></script>-->
				<!--<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyCjFSiWesch1MHvmc79AsxVnd7pZtW384E&callback=initMap" async defer>-->
				<!--</script>-->
			</main>
			<footer>
				<ul id="footermenu">
					<li><a href={{ route('outline') }}>企業概要</a></li>
					<li><a href={{ route('governance') }}>ガバナンス</a></li>
					<li><a href={{ route('access') }}>アクセス</a></li>
					<li><a href={{ route('contact.index') }}>お問い合わせ</a></li>
				</ul>
			</footer>
			
			<!--ページの上部へ戻るボタン-->
			<div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>
		</div>
	</body>
</html>	