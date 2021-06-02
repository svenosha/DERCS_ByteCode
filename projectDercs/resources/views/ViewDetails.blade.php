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
        
        <!--To view customer information and device details-->
        <!--Staff need to click on accept or reject button-->
        <table style="border: 1px solid back;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <tr>
        @php($i=1)
        @foreach ($data as $row1)
        <td>Name</td>
        <td><input type="text" value="{{$row1->name}}"readonly></td>
        <td>Phone Number</td>
        <td><input type="text" value="{{$row1->phone}}"readonly></td>
        <td>Address</td>
        <td><input type="text" value="{{$row1->Address}}"readonly></td>
        <td>Model</td>
        <td><input type="text" value="{{$row1->DeviceModel}}"readonly></td>
        <td>Color</td>
        <td><input type="text" value="{{$row1->DeviceColor}}"readonly></td>
        <td>Symptom</td>
        <td><input type="text" value="{{$row1->DeviceSymptom}}"readonly></td>
        <td>Damage</td>
        <td><input type="text" value="{{$row1->DeviceDamage}}"readonly></td>
        </tr>

        <tr>
        <td></td>
        <td></td>
        
        <form action="acceptCustRequest" method="post">
        @csrf
        <input type="hidden" value="{{$row1->id}}" name="Quotation_ID">
        <td >@if(<button type="submit" name="Accept" value="Accept" class="rbutton">Accept)
        @endif
        &nbsp;@if(<button type="submit" name="Reject" value="Reject" class="rbutton">Reject)
        @endif</td>
        </form>
        
        </tr>
        
        @endforeach
        </table>
    
       
       </div>
    </body>
    
    
</html>