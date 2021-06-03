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
            background-color:#279EFC ;
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
    
        <br>
        <h2>Please fill in acceptance details</h2>
        <!--To view customer information and device details-->
        <!--Staff need to click on accept or reject button-->
        <table style="border: 1px solid back;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <tr>
        @php($i=1)
        @foreach ($data as $row1)
        <thead>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price (RM)</th>
        <th>Decsription</th>
        <tr>
        <td><input type="text" value="{{$row1->ItemName}}"readonly></td>
        <td><input type="text" value="{{$row1->Quantity}}"readonly></td>
        <td><input type="text" value="{{$row1->Price}}"readonly></td>
        <td><input type="text" value="{{$row1->Desc}}"readonly></td>

        <tr>
        <td >Service Charge (RM):</td>
        <td><input type="text" value="{{$row1->ServiceCharge}}"readonly></td>
        <td>Total need to pay (RM)</td>
        <td><input type="text" value="{{$row1->Total}}"readonly></td>
        <td>Additional Notes</td>
        <td><input type="text" value="{{$row1->Notes}}"readonly></td>
        </tr>

        <tr>
        <td></td>
        <td></td>
        
        <form action="acceptCustRequest" method="post">
        @csrf
        <input type="hidden" value="{{$row1->id}}" name="Quotation_ID">
        <td ><button type="submit" name="Generate" value="Generate" class="rbutton">Generate Quote
        &nbsp;<button type="submit" name="Cancel" value="Cancel" class="rbutton">Cancel
        </td>
        </form>
        
        </tr>
        
        @endforeach
        </table>
    
       
       </div>
    </body>
    
    
</html>