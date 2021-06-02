<html>
    <head>
        <title>Rider Upload Delivery Evidence</title>
        
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

        .button{
            background-color:#E5E5FC ;
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
    <h1>Delivery Information</h2>
        <br>
        
        <!--Rider need to upload delivery evidence-->
        <table style="border: 1px solid back;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        @foreach ($info as $row1)
                @php 
                    $temp = explode(' ',$row1->updated_at); 
                @endphp
        <tr>
        <td colspan="2"; id="ROW1">Delivery Information</td>
        <td>Quotation ID: </td>
        <td>0001</td>
        </tr>

        <tr>
        <td colspan="2"; id="ROW2"> Customer Information</td>
        <td colspan="2"; id="ROW2"> Device Information</td>
        </tr>

        <tr>
        <td>Name:</td>
        <td><input type="text" value="{{$row1->name}}"readonly></td>
        <td>Model:</td>
        <td><input type="text" value="{{$row1->Devicemodel}}"readonly></td>
        </tr>

        <tr>
        <td>H/P NO:</td>
        <td><input type="text" value="{{$row1->phone}}"readonly></td>
        <td>Color</td>
        <td><input type="text" value="{{$row1->Devicecolor}}"readonly></td>
        </tr>

        <tr>
        <td>Address:</td>
        <td><input type="text" value="{{$row1->address}}"readonly></td>
        @if($row1->trackProgress == 'Returning')
        <form action="evidence" method="post">
        @csrf
        <input type="hidden" value="{{$row1->id}}" name="Quotation_ID">
        <td colspan="2"><button type="submit" name="Upload" value="Upload" class="button">Upload
        <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
        ?>
        <button type="submit" name="Receive" value="Receive" class="button">Receive Payment
        <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
        ?></td>
        </form>
        @endif
        </tr>
        
        @endforeach
        </table>
        
        
       </form>
       
       </div>
    </body>
    
    
</html>