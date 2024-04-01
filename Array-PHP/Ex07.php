<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table
        {
            
            margin: 0 auto;
            border-collapse: collapse;
            width: 100%;
            height: 500px;
            text-align: center;
        
        }
        td{
        
            padding-right: 10px;
        }
        .Total-record ,.Total-amount , .Min ,.Max
        {
            text-align:end ;
        }
    </style>
</head>
<body>
    <h1>Products System</h1>
    <table border="1">
        <tr bgcolor="green" style="color:white ; font-size:20px">
            <th>Nº</th>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Amount</th>
        </tr>
       
        <?php
            
            $produteInfo =
            [
                ["Milk" , 20 , 1.5 ],
                ["Fanta", 25 ,2.5],
                ["Coca" , 50 ,6.5],
                ["Water", 15 , 1.5],
                [ "Pepsi" , 40,3.5]
            ];
          
            $min = PHP_INT_MAX;
            $max = PHP_INT_MIN;
            $Total_Amount =0;
            $Amount = 1;
            for( $i = 0; $i < count( $produteInfo ); $i++ )
            {
                $Amount = $produteInfo[$i][1]*$produteInfo[$i][2]; 
                $Total_Amount += $Amount;
                echo("<tr>");
                echo("<td>". $i+1 ."</td>");
                 if(  $Amount < $min )
                {
                    $min = $Amount;
                }
                if ($Amount > $max )
                {
                    $max = $Amount; 
                }
               
                foreach( $produteInfo[$i] as $key)
                {
                    echo("<td>$key </td>");
                }
              
               
                echo("<td>" . $Amount . " $". "</td>");
               
               
                // $Total_Amount += $produteInfo[$i][3];
            }
            echo("</tr>");
            
        ?>
 
         <tr  class="Total-record" >
            <td bgcolor="yellow" colspan="4">
                Total Records:
            </td>
            <td style="text-align: center ; background-color: red; color:white">
                <?php
                echo ("$i");
                ?>
            </td>
        </tr>
        <tr class="Total-amount">
            <td bgcolor="cyan" colspan="4">
                Total Amount:
            </td>
            <td style="text-align:center ">
                <?php
                echo($Total_Amount);
                ?>
            </td>
        </tr>
        <tr class="Min">
            <td bgcolor="pink" colspan="4">
                Min Amount:
            </td>
            <td style="text-align:center ">
               <?php
                echo("$min" . " $");
               ?>
            </td>
        </tr>
        <tr class="Max" >
            <td  bgcolor="gray" colspan="4">
                Max Amount:
            </td>
            <td>
                <?php
                echo("$max");
                ?>
            </td>
        </tr>
         

    </table>
</body>
</html>