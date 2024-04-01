<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table
        {
            border-collapse: collapse;
            width: 100%;
            height: 300px;
            text-align: center;

        }
        th
        {
            background-color: green;
            color:white;
            font-size:20px
        }
        td
        {
            font-size: 15px
        }
    </style>
</head>
<body>
    <h1 style="background-color: pink; text-align:center">PHP- <span style="color:white">ListScore Sheet</span></h1>
    <table border="1">
        <tr>
            <th>Nº</th>
            <th>Student</th>
            <th>Att</th>
            <th>HW</th>   
            <th>Mid-Term</th>
            <th>Final</th>
            <th>Total</th>
            <th>Result</th>
            <th>Grade</th>
        </tr>
        <?php
            $student = [
                            
                           ["Vorn viva" , 10 ,12 , 20, 30] ,
                           ["Song Lida" , 7 , 10, 15 , 25] ,
                           ["Lin Tina" , 2 , 5 , 10 , 20 ],
                           ["Hong Kida" , 10 , 15, 24,45]
                          
            ];
            
            $TotalScore = 0;

            // variable i is belong to row 
            // variable j is belong to column

            for($i= 0 ; $i < count($student); $i++)
            {
                echo("<tr>");
                echo("<td>" . $i+1 ."</td>");
                for( $j= 0; $j < count($student[$i]) ; $j++ )
                {
                    echo ("<td>" . $student[$i][$j]. "</td>");
                }
                $TotalScore = 0;
               //Come back and fix this loop....
               for($k=1 ; $k<count($student[$i]) ;$k++)
                    {
                     $TotalScore += $student[$i][$k];                    
                    }
                    // -----------------------------------
                    echo("<td>" .$TotalScore."</td>");
                    
                    if($TotalScore >=60)
                    {
                       echo"<td> Pass</td>";
                    }
                    else
                    {
                       echo "<td> Fail</td>";
                    }
                    if($TotalScore >=90)
                    {
                        echo "<td style=\"background:cyan \">  A </td>";
                    }
                    else if($TotalScore >= 80)
                    {
                        echo "<td style=\"background:green ; color:white\"> B </td>";
                    }
                    else if($TotalScore >= 70)
                    {
                        echo "<td style=\"background:cyan \"> C </td>";
                    }
                    else if($TotalScore > 60)
                    {
                        echo "<td> D </td>";
                    }
                    else if($TotalScore == 60)
                    {
                        echo "<td> E </td>";
                    }
                    else
                    {
                        echo "<td style=\"background:red ; color:black\"> F </td>";
                    }   
                       
            }
           
            echo("</tr>");
            
             ?>
    </table>
</body>
</html>