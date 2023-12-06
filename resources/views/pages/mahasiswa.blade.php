<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Page</title>
</head>
<body>
    mahasiswa ini weh {{$nama}} saya berumur {{$umur}}

    @if($umur < 20 && $umur > 15)
        <div>You Are So Intermediate</div>
    @elseif($umur > 20 && $umur < 40)
        <div>You are advanced</div>
    @else
        <div>You are proffessional</div>
    @endif

    @switch($umur)
    @case($umur < 50)
        <div>Kurang tua lho</div>
        @break
    @default
        <div>Nah Udah Cukup Tua lho</div>
        @break
    @endswitch
    @for($i = 0; $i < 5; $i++)
        <div>woi</div>
    
    @endfor

    <?php 
        $i = [1, 2, 3, 4, 5]
    ?>
    @foreach($i as $nilai)
        <div>{{$nilai}}</div>
    @endforeach
</body>
</html>