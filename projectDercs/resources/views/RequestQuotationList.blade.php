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
        <form action="viewCustQuote" method="post">
        <table style="border: 1px solid black;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <thead>
        <th>Quotation ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Date Request</th>
        <th></th>
        @php ($i = 1)

        @foreach ($info as $row1)
        <tr>
        <td><input type="text" value="{{$row1->Quotation_ID}}"readonly></td>
        <td><input type="text" value="{{$row1->name}}"readonly></td>
        <td><input type="text" value="{{$row1->phone}}"readonly></td>
        <td><input type="text" value="{{$row1->DateRequest}}"readonly></td>
    
        
        
        @csrf
        <input type="hidden" value="{{$row1->id}}" name="id">
        <td><button type="submit" name="View Details" value="ViewDeatils" class="Rbutton">View Deatils</td>
        
        </tr>
        @php ($i++)
        @endforeach
        </table>
        
        
        <br><br>
        
       </form>
       
    
    </body>
    
</html>