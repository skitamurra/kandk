<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>K&K LLC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ここにサイト説明を入れます">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    
    <body id="index">
        <div class="wrapper">
            <header>
    			<div id="logo-contact">
    			    <img src="/images/kkmark.png" id="mark">
    				<ruby>
    					<a href={{ route('home') }}>K&K LLC</a>
    					<rt>ウェブの可能性</rt>
    				</ruby>
    			</div>
    		</header>
    		
            <div id="contact">
                <h3>弊社へのお問い合わせは以下のフォームをご利用下さい。（※全ての項目にご記入ください）</h3>
                <form method="POST" action="{{ route('contact.confirm') }}">
                    @csrf
                    @method('PUT')
                     <ul>
                        <li class="email">
                            <label>メールアドレス</label>
                            <input name="email" value="{{ old('email') }}" type="text" size="40">
                            @if ($errors->has('email'))
                                <p class="error-message">{{ $errors->first('email') }}</p>
                            @endif
                        </li>
                        <li class="title">
                            <label>タイトル</label>
                            <input name="title" value="{{ old('title') }}" type="text" size="40">
                            @if ($errors->has('title'))
                                <p class="error-message">{{ $errors->first('title') }}</p>
                            @endif
                        </li>
                        <li class="msg">
                            <label>お問い合わせ内容</label>
                            <textarea name="body" cols="60" rows="15">{{ old('body') }}</textarea>
                            @if ($errors->has('body'))
                                <p class="error-message">{{ $errors->first('body') }}</p>
                            @endif
                        </li>
                        <li>
                            <button type="submit" id="button">入力内容確認</button>
                        </li>
                    </ul>
                </form>
            </div>
            
        	<footer>
    			<ul id="footermenu">
    				<li><a href={{ route('outline') }}>企業概要</a></li>
					<li><a href={{ route('governance') }}>ガバナンス</a></li>
					<li><a href={{ route('access') }}>アクセス</a></li>
					<li><a href={{ route('contact.index') }}>お問い合わせ</a></li>
    			</ul>
    		</footer>
    		
            <div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>
		</div>
    </body>
</html>