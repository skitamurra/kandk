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
      <form method="POST" action="{{ route('contact.send') }}">
      @csrf
      @method('PUT')
  
      <label>メールアドレス</label>
      {{ $inputs['email'] }}
      <input
          name="email"
          value="{{ $inputs['email'] }}"
          type="hidden">
  
      <label>タイトル</label>
      {{ $inputs['title'] }}
      <input
          name="title"
          value="{{ $inputs['title'] }}"
          type="hidden">
  
  
      <label>お問い合わせ内容</label>
      {!! nl2br(e($inputs['body'])) !!}
      <input
          name="body"
          value="{{ $inputs['body'] }}"
          type="hidden">
  
      <button type="submit" name="action" value="back">
          入力内容修正
      </button>
      <button type="submit" name="action" value="submit">
          送信する
      </button>
    </form>
  </body>
</html>