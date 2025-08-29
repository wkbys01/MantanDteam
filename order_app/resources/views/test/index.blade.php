<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">

    <title>テストページ</title>
</head>
<body>
    @foreach ($main_category as $main)
    <div class="test_div">
        @if (is_array($main->translations['ja']))
            {{-- 配列の場合：行ごとに出力 --}}
            @foreach ($main->translations['ja'] as $line)
                <p>{{ $line }}</p>
            @endforeach
        @else
            {{-- 文字列の場合：そのまま1行出力 --}}
            <p>{{ $main->translations['ja'] }}</p>
        @endif
    </div>
@endforeach
</body>
</html>