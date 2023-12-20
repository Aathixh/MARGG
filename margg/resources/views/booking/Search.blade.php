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
            <div style="flex: 1;display:flex;justify-content:center;margin-top:0.6%">
                <button type="submit" style="margin-right:2%"><span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front text">Search
                    </span>
                </button>
                <a>
                    <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.75 7.33303V11.222C14.7728 12.4877 13.7657 13.5325 12.5 13.556C11.2343 13.5325 10.2271 12.4877 10.25 11.222V7.33303C10.2277 6.06772 11.2347 5.02357 12.5 5.00003C13.7653 5.02357 14.7723 6.06772 14.75 7.33303Z"
                            stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M8.46233 13.8534C8.13618 13.5981 7.66478 13.6555 7.40945 13.9817C7.15411 14.3078 7.21152 14.7792 7.53767 15.0346L8.46233 13.8534ZM17.4623 15.0346C17.7885 14.7792 17.8459 14.3078 17.5906 13.9817C17.3352 13.6555 16.8638 13.5981 16.5377 13.8534L17.4623 15.0346ZM13.25 16C13.25 15.5858 12.9142 15.25 12.5 15.25C12.0858 15.25 11.75 15.5858 11.75 16H13.25ZM11.75 19C11.75 19.4142 12.0858 19.75 12.5 19.75C12.9142 19.75 13.25 19.4142 13.25 19H11.75ZM7.53767 15.0346C10.4524 17.3164 14.5476 17.3164 17.4623 15.0346L16.5377 13.8534C14.1661 15.7101 10.8339 15.7101 8.46233 13.8534L7.53767 15.0346ZM11.75 16V19H13.25V16H11.75Z"
                            fill="#000000" />
                    </svg>
                </a>
            </div>
        </form>
    </div>
</body>

</html>