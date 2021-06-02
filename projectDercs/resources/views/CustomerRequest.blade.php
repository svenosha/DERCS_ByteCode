<html>
    <head>
        <title>Customer Request</title>
        
    </head>
    <style>
        
        th, td {
        padding: 5px;
        vertical-align: top;
        text-align: left;
        border:1px white;    
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
            width:150px;
            font-family:Times New Roman;
        }
    </style>
    
   
    
    <body>
    <br><h2>CUSTOMER REQUEST</h2>
        <br>
        <form action="" method="POST">
        <table style="border: 1px white;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;
        text-align: left;">
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="Cus_Name" placeholder="Customer Name" size="100" required></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>:</td>
            <td><input type="text" name="Cus_Phone" placeholder="Customer Phone Number" size="100" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"required></td>
        </tr> 
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><input type="text" name="Cus_Address" placeholder="Customer Address" size="100" required ></td>
        </tr> 
        <tr>
            <td>Model</td>
            <td>:</td>
            <td><input type="text" name="Dev_Model" placeholder="Device Model" size="100" required ></td>
        </tr> 
        <tr>
            <td>Color</td>
            <td>:</td>
            <td><input type="text" name="Dev_Color" placeholder="Device Color" size="100" required></td>
        </tr>
        <tr>
            <td>Symptom</td>
            <td>:</td>
            <td><input type="text" name="Dev_Symptom" placeholder="Device Symptom" size="100" required></td>
        </tr>
        <tr>
            <td>Damage</td>
            <td>:</td>
            <td><input type="text" name="Dev_Damage" placeholder="Device Damage" size="100" required></td>
        </tr>
        </table>
        <table>
        <tr>
        <td>
        <button type="submit" name="viewQ" value="View Quotation" class="Vbutton" disabled>View Quotation
        </td>
        <td><button type="submit" name="requestQ" value="Request Quotation" class="Rbutton">Request Quotation
        </td>
        <td><button type="submit" name="Cancel" value="Cancel" class="Rbutton">Cancel
        </td>
           
       </form>
       
    
    </body>
    
</html>