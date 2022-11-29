<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>K&K LLC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ここにサイト説明を入れます">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    
    <body>
    	<form action="/contact" method="POST" enctype="multipart/form-data">
    		@csrf
    		@method('PUT')
    		<div class="">
    		    <dl>
    		        <dt>メール</dt>
    		        <dd>
    		            <input name="email" value="{{ old('email') }}" type="text">
                        @if ($errors->has('email'))
                        <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </dd>
    		    </dl>
    		    <dl>
    		        <dt>タイトル</dt>
    		        <dd>
    		            <input
                            name="title"
                            value="{{ old('title') }}"
                            type="text">
                            @if ($errors->has('title'))
                            <p class="error-message">{{ $errors->first('title') }}</p>
                            @endif
                    </dd>
    		    </dl>
    		    <dl>
    		        <dt>お問い合わせ</dt>
    		        <dd>
    		            <textarea name="body">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                        <p class="error-message">{{ $errors->first('body') }}</p>
                        @endif
		            </dd>
    		    </dl>
    		</div>
    		<button type="submit">送信</button>
		</form>
    </body>
</html>