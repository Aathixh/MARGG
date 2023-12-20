<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/searchstyles.css">
    <title>Search Bus</title>
</head>

<body>
    <div class="container">
    <form action="/search" method="GET">
        <div class="routing">
            <div class="input-group">
                <input type="text" autocomplete="off" required class="input" name="from">
                <label class="user-label">From</label>
            </div>
        <div class="input-group">
            <input type="text" autocomplete="off" required class="input" name="to">
            <label class="user-label">To</label>
        </div>
    </div>
    <div style="flex: 3">
    </div>
    <div style="flex: 1;justify-content:center;margin-top:0.6%">
    <button type="submit"><span class="shadow"></span>
            <span class="edge"></span>
            <span class="front text">Search
            </span>
    </button>
    </div>
    </form>
    </div>
</body>

</html>