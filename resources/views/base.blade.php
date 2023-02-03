<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>soma</title>
</head>
<body>

    @switch($mult)
        @case("multiplicacao")
            <h1>o resultado é {{$num1 * $num2 }}</h1>
            @break
        @case("soma")
            <h1>o resultado é {{$num1 + $num2 }}</h1>
            @break
        @case("divisao")
            <h1>o resultado é {{$num1 / $num2 }}</h1>
            @break
        @case("subtracao")
            <h1>o resultado é {{$num1 - $num2 }}</h1>
            @break

        @default
            <h1>Insira um valor valido na url</h1>
    @endswitch

</body>
</html>
