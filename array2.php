<!DOCTYPE HTML>

<html>
<head>
<title>loop</title>
 <style>
   * {
       margin: 0;
       padding: 0;
    }
    body {
        padding: 10px;
    }

    table {
       width: 600px;
       border-collapse: collapse;
    }
    table tr td, table tr th {
        border: solid 1px #999;
        padding: 5px;
        text-align: left;
    }
    table tr th {
        background: #666;
        color: #fff;
    }
    table tr:nth-child(2n){
        background: #e4e4e4;
    }
    table tr td span.green {
        color: green;
        font-weight: bold;
    }
    table tr td span.red {
        color: red;
        font-weight: bold;
    }
    table tr:hover{
        background: yellow;
    }
    </style>
</head>
<body>
    <?php
       $students = array('mohamed', 'ahmed', 'adel', 'mohsen', 'mousa' , 'ali', 'morshdy' );
       $arbabic = array(30,04,50,20,60,50,19);
       $english = array(34,20,10,20,20,48,28);
       $math = array(40,24,60,10,29,67,20);
       $scince = array(54,35,38,15,29,58,30);

    ?>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Arabic</th>
            <th>English</th>
            <th>Math</th>
            <th>scince</th>
            <th>Total</th>
            <th>persntage</th>
            <th>Satus</th>
        </tr>
        <?php
            $total = 0;
            $numberofsuccess = 0;;
            $numberoffailed = 0;
            $beststudent = 0;
            $worthstudent = 0;
            for($i = 0,$ii = count($students); $i < $ii; $i++){
                $total = ($arbabic[$i] + $english[$i] + $math[$i] + $scince[$i]);
                $cssClass = ($total > 100) ? 'green' : 'red';
                $status = ($total > 100) ? 'scucced' : 'failed';
                if($total > 100){
                    $numberofsuccess++;
                }else{
                    $numberoffailed++;
                } 
                 if($total > 100){
                    $beststudent++;
                }else{
                    $worthstudent++;
                } 
                echo"<tr>
                        <td>{$students[$i]}</td>
                        <td>{$arbabic[$i]}</td>
                        <td>{$english[$i]}</td>
                        <td>{$math[$i]}</td>
                        <td>{$scince[$i]}</td>
                        <td>" . $total . "</td>
                        <td>" . ($total / 250 * 100). "%</td>
                        <td><span class={$cssClass}>{$status}</span></td>
                     </tr>";
            }
        ?>
        <tr> 
           <th colspan="8">This class is <?php echo ($numberofsuccess >= $numberoffailed) ? 'Good' : 'Bad'; ?></th>
        </tr>
         <?php echo(max(array($total)));?>
  </table>  
</body>
</html>

