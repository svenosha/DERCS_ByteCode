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
    
   
    <!--This interafce is for customer to request for quotation-->
    <body>
    <br><h2>CUSTOMER REQUEST</h2>
        <br>
        <form action="CustRequest" method="POST">
        <table style="border: 1px white;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;
        text-align: left;">
        @csrf
            @foreach($info as $row)
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" value="{{$row->name}}" name="name" placeholder="Customer Name" size="100" required></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>:</td>
            <td><input type="text" value="{{$row->phone}}" name="phone" placeholder="Customer Phone Number" size="100" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"required></td>
        </tr> 
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><input type="text" value="{{$row->address}}" name="address" placeholder="Customer Address" size="100" required ></td>
        </tr> 
        <tr>
            <td>Model</td>
            <td>:</td>
            <td><input type="text" value="{{$row->DeviceModel}}" name="DeviceModel" placeholder="Device Model" size="100" required ></td>
        </tr> 
        <tr>
            <td>Color</td>
            <td>:</td>
            <td><input type="text" value="{{$row->DEviceColor}}" name="DevicColor" placeholder="Device Color" size="100" required></td>
        </tr>
        <tr>
            <td>Symptom</td>
            <td>:</td>
            <td><input type="text" value="{{$row->DeviceSymptom}}" name="DeviceSymptom" placeholder="Device Symptom" size="100" required></td>
        </tr>
        <tr>
            <td>Damage</td>
            <td>:</td>
            <td><input type="text" value="{{$row->deviceDamage}}" name="DeviceDamage" placeholder="Device Damage" size="100" required></td>
        </tr>
        </table>
        <table>
        <tr>
        <td>
        <input type="hidden" name="id" value="{{$row->id}}">
        <input type="hidden" name="ServiceType" value="{{$row->ServiceType}}='Pickup">
        <input type="hidden" name="PickupStatus" value="{{$row->PickupStatus}}='Pending">
        <input type="hidden" name="DeliveryStatus" value="{{$row->DeliveryStatus}}='Pending">
        <button type="submit" name="viewQ" value="View Quotation" class="Vbutton" disabled>View Quotation
        </td>
        <td><button type="submit" name="requestQ" value="RequestQuotation" class="Rbutton">Request Quotation
        </td>
        <td><button type="submit" name="Cancel" value="Cancel" class="Rbutton">Cancel
        </td>
        @endforeach
       </form>
       
    
    </body>
    
</html>