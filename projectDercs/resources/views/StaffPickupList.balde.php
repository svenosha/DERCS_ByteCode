<html>
    <head>
        <title>Staff Pickup List</title>
        
    </head>
    <style>
        table thead#ROW1 {background-color:E5E5FC;}

        th, td {
        padding: 5px;
        vertical-align: top;
        text-align: left;
        border:1px solid black;    
        }

        

        .button{
            background-color:BCBDFD ;
            color:black;
            border-radius:4px;
            border-width:1px;
            height:25px;
            width:100px;
            font-family:Times New Roman;
        }
    </style>
    
   
    
    <body>
    <br>
    <h1>Rider Pickup List</h2>
        <br>
        
        <!--To show customer delivery invoice list that has benn accept by rider-->
        <p>Pickup Invoice:</p>
        <form action="" method="POST">
        <table style="border: 1px solid black;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <thead id="ROW1">
        <th>No</th>
        <th>Quotation ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
        </thead>
        <tr>
        <td>1</td>
        <td>0001</td>
        <td>Teoh Jia En</td>
        <td>12, Lorong Sentosa</td>
        <td><button type="submit" name="Print" value="Print" class="button">Print</td>
        
        </tr>
        </table>
        
        
        <br><br>
        
       </form>
       
    
    </body>
    
</html>