<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Bus</title>
</head>

<body>
    <form action="/search" method="GET">
        <input type="text" required class="input" name="to" placeholder="To">
        <input type="text" required class="input" name="from" placeholder="From">
        <button type="submit">Search</button>
    </form>
</body>

</html>