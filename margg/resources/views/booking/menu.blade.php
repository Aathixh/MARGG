<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menustyles.css">
    <title>book Tickets</title>
</head>

<body>
    <div class="top-bar">
    <h1> BOOK TICKETS</h1>
    <a href="/logout"><button>
            <div class="text">Logout</div>
        </button>
    </a>
</div>
    <!-- here this /locate url is given to the book now button for the tym being... in real program it must redirect somewhere else like payment gateway.... -->


    <table border="1">
        <tr>
            <th>Sl.No</th>
            <th>Bus_No</th>
            <th>Date</th>
            <th>From</th>
            <th>To</th>
            <th>Departure_Time</th>
            <th>Duration</th>
            <th>Arrival_Time</th>
            <th>Price</th>
            <th>Tickets</th>
        </tr>
        @foreach($BusData as $key => $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->Bus_No}}</td>
            <td>{{$data->Date}}</td>
            <td>{{$data->From}}</td>
            <td>{{$data->To}}</td>
            <td>{{$data->Departure_Time}}</td>
            <td>{{$data->Duration}}</td>
            <td>{{$data->Arrival_Time}}</td>
            <td>{{$data->Price}}</td>
            <td style="text-align: center;"><a href="/locate_new">
                    <button>
                        <div class="text">Book Now</div>
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>