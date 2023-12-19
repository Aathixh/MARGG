<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/registerstyles.css">
</head>

<body>
    <div class="content">
        <div class="container">
    <h1>Sign Up</h1>
    <form action="{{route('home.register')}}" method="post">
        @csrf
        @method('post')
        @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <div class="input-group">
            <input type="text" required class="input" name="name">
            <label class="user-label">Name</label>
        </div>
        <div class="input-group">
            <input type="email" required class="input" name="email">
            <label class="user-label">Email</label>
        </div>
            <div class="input-group">
            <input type="tel" required class="input" step="1" min="0" name="phn_num">
            <label class="user-label">Phone Number</label>
        </div>
        <div class="input-group">
            <input type="password" required class="input" name="password">
            <label class="user-label">Password</label>
        </div>
        <div class="input-group">
            <input type="password" required class="input" name="password_confirmation">
            <label class="user-label">Re-Enter Password</label>
        </div>
        
        <button class="input-group input" type="submit">Submit</button>
    </form>
</div>
    </div>
</body>
</html>