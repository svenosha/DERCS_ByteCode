<html>
    <head>
        <title>Rider Upload Pickup Evidence</title>
        
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
    <h1>Pickup Information</h2>
        <br>
        
        <!--Rider need to upload pickup evidence-->
        <form action="" method="POST">
        <table style="border: 1px solid back;
            border-collapse: collapse;padding: 7px;
        vertical-align: top;text-align: left;">
        <tr>
        <td colspan="2"; id="ROW1">Pickup Information</td>
        <td>Quotation ID: </td>
        <td>0001</td>
        </tr>

        <tr>
        <td colspan="2"; id="ROW2"> Customer Information</td>
        <td colspan="2"; id="ROW2"> Device Information</td>
        </tr>

        <tr>
        <td>Name:</td>
        <td>Teoh Jia En</td>
        <td>Model:</td>
        <td>Asus VivoBookS</td>
        </tr>

        <tr>
        <td>H/P NO:</td>
        <td>012344567</td>
        <td>Color</td>
        <td>Grey</td>
        </tr>

        <tr>
        <td>Address:</td>
        <td>12, Lorong Sentosa</td>
        <td colspan="2"><button type="submit" name="Upload" value="Upload" class="button">Upload</td>
        </tr>
        
        
        </table>
        
        
       </form>
       
       </div>
    </body>
    
    
</html>