<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/registerstyles.css">
</head>

<body>
    <div class="content" style="margin-top: 15%">
    <h1 style="margin: 5%">Login Page</h1>
    <div class="container">
    <form action="/authenticate" method="post">
        @csrf
        @method('post')
        @if($errors->any())
            {!!implode('',$errors->all(':message'))!!}
        @endif
        <div class="input-group">
            <input type="email" required class="input" name="email">
            <label class="user-label">Email</label>
        </div>
        <div class="input-group">
            <input type="password" required class="input" name="password">
            <label class="user-label">Password</label>
        </div>
        <button class="input-group input" type="submit">Submit</button>
    </form>
    </div>
    </div>
</body>

</html>