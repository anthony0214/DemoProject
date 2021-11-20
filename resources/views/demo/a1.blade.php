<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A1 View</title>
</head>
<body>
    <h1>{{ $myVariable1 }}</h1>
    <h2>{{ $myVariable2 }}</h2>
    @forelse ($myAssocArray as $item)
        <p>{{ $item }}</p>
    @empty
        <p>No ITEM FOUND - array is empty</p>
    @endforelse
</body>
</html>

