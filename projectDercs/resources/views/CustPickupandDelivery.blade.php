<html>
    <head>
        <title>Customer Menu</title>
        
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
        <p>Hi Teoh Jia En, please choose the service to view status:</p>
        <button onclick="window.location.href = 'CustPickupStatusList.blade.php';" class="button" >Pickup Service</button>
        <br><br><br><br>
        <button onclick="window.location.href = 'CustDeliveryStatusList.blade.php';" class="button" >Delivery Service</button>
        
        
        </div>
       
    
    </body>
    
</html>