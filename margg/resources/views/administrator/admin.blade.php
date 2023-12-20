<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to Admin page</h1>

    <a href="/AdminLogout"><button>
            <div class="text">Logout</div>
        </button>
    </a>

    <table border=1>
        <tr>
            <th>Sl.No</th>
            <th>Name</th>
            <th>Date</th>
            <th>Alert Message</th>
        </tr>
        @foreach($AlertMsg as $key => $data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->Name}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->Message}}</td>
        </tr>
        @endforeach
    </table>


</body>

</html>