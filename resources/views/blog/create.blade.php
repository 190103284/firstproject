<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form method="POST" action="{{ route('add_client')}}">
    @csrf
    <input type="text" name="id" placeholder="id">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="body" placeholder="body">
    <input type="text" name="timestamps" placeholder="timestamps">
    <button type="submit">Add</button>
    </form>
</body>
</html>