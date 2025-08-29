<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">

    <title>テストページ</title>
</head>
<body>
    @foreach ($main_categories as $main)
    <div class="test_div">
        <p>
            {!! str_replace(['オススメ' , 'お子さまメニュー' , 'ドリンク'], ['オススメ<br>' , 'お子さま<br>メニュー<br>' , 'ドリンク<br>'], $main->translations['ja']) !!}
        </p>
    </div>
    @endforeach
</body>
</html>