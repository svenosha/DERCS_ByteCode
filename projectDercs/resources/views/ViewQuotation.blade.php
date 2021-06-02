<html>
    <head>
        <title>Customer Request</title>
        
    </head>
    <style>
        
        th, td {
        padding: 5px;
        vertical-align: top;
        text-align: left;
        border:1px solid black;    
        }

        .Vbutton{
            background-color:#E2E6E6;
            color:black;
            border-radius:4px;
            border-width:1px;
            height:25px;
            width:150px;
            font-family:Times New Roman;
        }

        .Rbutton{
            background-color:#279EFC ;
            color:white;
            border-radius:4px;
            border-width:1px;
            height:25px;
            width:100px;
            font-family:Times New Roman;
        }
    </style>
    
   
    
    <body>
    <br>
        <br>
        <!--To show Company DEtails-->
        <table>
        <tr>
        <td>DERCS Computer Sdn Bhd <br> B-14, Lorong Pandan Damai, <br> 25150, Kuantan, Pahang
        <br><br>+601234567 <br> DERCSComputer@gmail.com</td></tr>
        </table>

        @foreach ($info as $row1)
                @php 
                    $temp = explode(' ',$row1->updated_at); 
                @endphp

        <!--To show customer details-->
        &nbsp;
        <table>
        <tr>
        <td>To:</td>
        <td><input type="text" value="{{$row1->name}}"readonly><br>
        <input type="text" value="{{$row1->address}}"readonly><br>
        <input type="text" value="{{$row1->phone}}"readonly></td>
        </tr>
        </table>

        Quotation ID: <input type="text" value="{{$row1->Quotation_ID}}"readonly>
        <br>
        Valid Until: 30/3/2021
        

        <!--To show device quotation and details-->
        <form action="" method="POST">
        <table style="border: 1px solid black;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <thead>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price (RM)</th>
        <th>Decsription</th>
        <tr>
        <td colspan="2">Service Change</td>
        <td><input type="text" value="{{$row1->serviceCharge}}"readonly></td>
        <td></td>
        </tr>
        <tr >
        <td colspan="2">Total Price (RM) </td>
        <td colspan="2" ><input type="text" value="{{$row1->repairingcost}}"readonly></td>
        </tr>
        </table>
        
        <br><br>Additional Notes: Estimated repair time is about 2 days.

        <br><br>
        <button type="submit" name="Pay" value="Pay" class="Rbutton" disabled>Pay
       
        <button type="submit" name="Back" value="Back" class="Rbutton">Back
        
           
       </form>
       
    
    </body>
    
</html>