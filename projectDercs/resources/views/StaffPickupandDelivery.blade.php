<html>
    <head>
        <title>Rider Menu</title>
        
    </head>
    <style>
        div {text-align: center;}
        

        .button{
            background-color:E5E5FC ;
            color:black;
            border-color:C7C7C7;
            border-width:1px;
            height:45px;
            width:280px;
            font-family:Verdana;
            font-size: 30px;
        }
    </style>
    
   
    
    <body>
    <br>
    
        <br><br><br><br><br><br>
        <div>
        <p>Please choose service for printing of invoice:</p>
        <button onclick="window.location.href = 'StaffPickupList.blade.php';" class="button" >Pickup Service</button>
        <br><br><br><br>
        <button onclick="window.location.href = 'StaffDeliveryList.blade.php';" class="button" >Manage Delivery</button>
        
        
        </div>
       
    
    </body>
    
</html>