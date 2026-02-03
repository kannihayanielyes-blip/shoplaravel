<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Boutique Laravel</title>
</head>
<body>


<h1>{{ $product['name'] }}</h1>

<p>Prix : {{ $product['price'] }}</p>
<p> {{$product['description']}}</p>

@if($stock > 10)
    <span class="text-green-500">ON EST BIEN</span>
@elseif($stock > 1)
    <span class="text-orange-500">ON EST MOITIE BIEN</span>
@else
    <span class="text-red-500">RUPTURE</span>
@endif



</body>
</html>
