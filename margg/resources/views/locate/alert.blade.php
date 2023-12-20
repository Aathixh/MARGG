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
        @csrf
        @method('post')
        <input type="text" name="messages">
        <button type="submit">Submit</button>
    </form>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</body>

</html>