<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alertstyles.css">
    <title>Alert</title>
</head>

<body>

    <form action="/alertmsg" method="post">
        <div class="input-group">
            @csrf
            @method('post')
            <input type="text" name="messages" autocomplete="off" class="input">
            <input class="button--submit" value="Alert" type="submit">
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </form>
</body>

</html>