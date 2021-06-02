<html>
    <head>
        <title>Rider Delivery Customer Information</title>
        
    </head>
    <style>

div {text-align: center;}
        table td#ROW1 {background-color:BCBDFD;}
        table td#ROW2 {background-color:E5E5FC;}
        th, td {
        padding: 5px;
        vertical-align: top;
        text-align: left;
        border:1px solid black;    
        }

        .abutton{
            background-color:#34CD05 ;
            color:black;
            border-color:#C9CCC8;
            border-width:1px;
            height:25px;
            width:100px;
            font-family:Times New Roman;
        }

        .rbutton{
            background-color:#DE0202 ;
            color:black;
            border-color:#C9CCC8;
            border-width:1px;
            height:25px;
            width:100px;
            font-family:Times New Roman;
        }
    </style>
    
   
    
    <body>
    <div>
    <br>
    <h1>Pickup Information</h2>
        <br>
        
        <!--To show customer information for delivery-->
        <!--Rider need to click on accept or reject button-->
        <form action="" method="POST">
        <table style="border: 1px solid back;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <tr>
        <td colspan="2"; id="ROW1">Delivery Information</td>
        <td>Quotation ID: </td>
        <td>0001</td>
        </tr>

        <tr>
        <td colspan="2"; id="ROW2"> Customer Information</td>
        <td colspan="2"; id="ROW2"> Device Information</td>
        </tr>

        <tr>
        <td>Name:</td>
        <td><input type="text" value="{{$row1->name}}"readonly></td>
        <td>Model:</td>
        <td><input type="text" value="{{$row1->Devicemodel}}"readonly></td>
        </tr>

        <tr>
        <td>H/P NO:</td>
        <td><input type="text" value="{{$row1->phone}}"readonly></td>
        <td>Color</td>
        <td><input type="text" value="{{$row1->Devicecolor}}"readonly></td>
        </tr>

        <tr>
        <td>Address:</td>
        <td><input type="text" value="{{$row1->address}}"readonly></td>
        @if($row1->trackProgress == 'Returning')
        <form action="evidence" method="post">
        @csrf
        <input type="hidden" value="{{$row1->id}}" name="Quotation_ID">
        <td colspan="2"><button type="submit" name="Accept" value="Accept" class="abutton">Accept
        &nbsp;<button type="submit" name="Reject" value="Reject" class="rbutton">Reject</td>
        </form>
        @endif
        </tr>
        
        @endforeach
        </table>
    
       
       </div>
    </body>
    
    
</html>