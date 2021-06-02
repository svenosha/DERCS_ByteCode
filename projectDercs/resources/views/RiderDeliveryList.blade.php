<html>
    <head>
        <title>Rider Delivery List</title>
        
    </head>
    <style>
        table tr#ROW1 {background-color:E5E5FC;}


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
    <h1>Rider Delivery List</h2>
        <br>
        
        <!--To show customer list waiting for deliver-->
        
        <table style="border: 1px solid black;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <tr id="ROW1">
        <th>No</th>
        <th>Quotation ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
        </tr>
        @php($i=1)
        foreach ($pending as $row)
        <tr>
        <td><input type="text" value="{{$i}}" readonly></td>
        <td><input type="text" value="{{$row->Quotation_ID}}" readonly></td>
        <td><input type="text" value="{{$username}}" readonly></td>
        <td><input type="text" value="{{$Address}}" readonly></td>
        <td>
        <form action="accept" method="post">
            @csrf
            <input type="hidden" value="{{$row->id}}" name="id">
            <button class="button" type="submit">Access</button>
        </form>
        </td>
        
        </tr>
        @php ($i++)
        @endforeach
        </table>
        
        
        <br><br>
        
       </form>
       
    
    </body>
    
</html>