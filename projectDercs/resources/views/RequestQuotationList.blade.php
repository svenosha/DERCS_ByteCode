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
    <h1>REQUEST QUOTATION LIST</h2>
        <br>
        
        <!--To show customer quotation lists-->
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
        <td><input type="text" value="{{$row1->Quotation_ID}}"readonly></td>
        <td><input type="text" value="{{$row1->name}}"readonly></td>
        <td><input type="text" value="{{$row1->phone}}"readonly></td>
        <td><button type="submit" name="View Details" value="View Deatils" class="Rbutton">View Deatils</td>
        
        </tr>
        </table>
        
        
        <br><br>
        
       </form>
       
    
    </body>
    
</html>