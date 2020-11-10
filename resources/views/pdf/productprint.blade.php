<!DOCTYPE html>

<head>
    <title>
        Company Inventory
    </title>
    <style>
    table,
    tr,
    td,
    th {

        font: 20px Calibri;
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
<p class=font> <a href="/products">
        < return to Inventory </a>
</p>
<p class= font> <a href="/home">  < return to Home </a></p>
<br>

<body>
<p class=font> <strong> Company Inventory</strong> </p><br>
    <p class=font>Date: {{ date('Y-m-d H:i:s') }}</p>
    <p class=font> Accessed by: {{ Auth::user()->name }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th> Item</th>
                <th>Brand</th>
                <th> Quantity</th>
                <th> Warehouse</th>
            </tr>

        </thead>
        <tbody>
            @foreach ( $products as $prod)
            <tr>
                <td>{{$prod->id}} </td>
                <td>{{$prod->item}} </td>
                <td>{{$prod->brand}} </td>
                <td>{{$prod->quantity}} </td>
                <td>{{$prod->warehouse}} </td>
                
            </tr>

            @endforeach
        </tbody>

    </table>

</body>