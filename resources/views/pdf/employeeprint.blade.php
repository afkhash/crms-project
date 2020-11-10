<!DOCTYPE html>

<head>
    <title>
        Employee List
    </title>
    <style>
    table,
    tr,
    td,
    th {

        font: 13px Calibri;
        border-collapse: collapse;
        border: 1px solid black;
    }

    tr:nth-child(even) {
        background-color: rgb(230, 230, 230);


    }

    th {
        background-color: #1c2121;
        color: white;
    }

    .font {
        font: 16px Calibri;
        text-align: center;

    }
    </style>
</head>
<p class=font> <a href="/employees">
        < return to Employee List</a>
</p>
<p class=font> <a href="/home">
        < return to Home </a>
</p>
<br>

<body>
    <p class=font> <strong> Employee List</strong> </p><br>
    <p class=font>Date: {{ date('Y-m-d H:i:s') }}</p>
    <p class=font> Accessed by: {{ Auth::user()->name }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th> Last name</th>
                <th>First name</th>
                <th> Address</th>
                <th> Email</th>
                <th> Job title</th>
                <th>Salary</th>
                <th> Office</th>
                <th>Reports to</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($employees as $emp)
            <tr>
                <td>{{$emp->id}} </td>
                <td>{{$emp->last_name}} </td>
                <td>{{$emp->first_name}} </td>
                <td> {{$emp->address}}</td>
                <td>{{$emp->email}} </td>
                <td>{{$emp->job}} </td>
                <td>{{$emp->salary}} </td>
                <td>{{$emp->office}} </td>
                <td>{{$emp->reports_to}} </td>
            </tr>

            @endforeach
        </tbody>

    </table>

</body>