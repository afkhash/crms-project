<!DOCTYPE html>

<head>
    <title>
        Customer Records
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
        text-align:center;
    }
    </style>
</head>
<p class= font> <a href="/customers">  < return to Customer Records </a></p>
<p class= font> <a href="/home">  < return to Home </a></p>
<br>
<body>
<p class=font> <strong> Customer Records</strong> </p><br>
    <p class=font>Date: {{ date('Y-m-d H:i:s') }}</p>
    <p class=font> Accessed by: {{ Auth::user()->name }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th> Item</th>
                <th>Representative</th>
                <th> Company</th>
                <th> Title</th>
                <th> Last name</th>
                <th> First name</th>
                <th> Address</th>
                <th>Email</th>
            </tr>

        </thead>
        <tbody>
            @foreach ( $customers as $cust)
            <tr>
                <td>{{$cust->id}} </td>
                <td>{{$cust->item}} </td>
                <td>{{$cust->representative}} </td>
                <td>{{$cust->company}} </td>
                <td>{{$cust->title}} </td>
                <td>{{$cust->lastname}} </td>
                <td>{{$cust->firstname}} </td>
                <td>{{$cust->address}} </td>
                <td>{{$cust->email}} </td>
            </tr>

            @endforeach
        </tbody>

    </table>
  

</body>