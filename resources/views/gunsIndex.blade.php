<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>武器一覧</title>
</head>
<body>
<div>
    <p>{{gethostname()}}</p>
    <h1>DBから取得データ</h1>
    <table>
        @if(!empty($gunsFromDB))
            @foreach($gunsFromDB as $gun)
                <tr>
                    <td>{{$gun->name}}</td>
                    <td><img src="{{env('CLOUDFRONT_URL').$gun->img}}" style="width: 50px; height: 50px"/></td>
                </tr>
            @endforeach
        @else
            <p>データなし</p>
        @endif
    </table>
</div>
<div>
    <h1>Redisから取得データ</h1>
    <table>
        @if(!empty($gunsFromRedis))
            @foreach($gunsFromRedis as $gun)
                <tr>
                    <td>{{$gun['name']}}</td>
                    <td><img src="{{env('CLOUDFRONT_URL').$gun['img']}}" style="width: 50px; height: 50px"/></td>
                </tr>
            @endforeach
        @else
            <p>データなし</p>
        @endif
    </table>
</div>
</body>
</html>
