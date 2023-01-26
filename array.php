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

    table{
       width: 700px;
       border-collapse: collapse;
    }
    table tr td, table tr th{
        border: solid 1px #999;
        padding: 5px;
        text-align: left;
    }
    table tr th{
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
    table tr th[data-class-name]{
      background: #999;
    }
     table tr th[data-best-score]{
      border-bottom: solid 2px #fff;
    }
    </style>
</head>
<body>
  <?php
    $class1 = array(
        array('mohamed ahmed abd mohsen', 25, 35, 40),
        array('addel mohsen mousa', 30, 20,40),
        array('mona elsaed wael',40,40,19)
    );
    $class2 = array(
        array('saed ali mokhtar', 70,48,56),
        array('khaled moner ahmed',50,67,85),
        array('shalbia mohamed ali',60,70,80)
    );
    $school = array($class1,$class2);
  ?>
  <table>
    <tr>
       <th>Student Name</th>
       <th>Arabic</th>
       <th>Math</th>
       <th>English</th>
       <th>Total</th>
       <th>Percentage</th>
       <th>Status</th>
    </tr>
    <?php
      $total = 0;
      $percentage = 0;
      $bestscore = 0;
      $student = 0;
      $cssclass = '';
      $status = '';
       for ($i = 0, $ii = count($school); $i < $ii; $i++){
        echo '<tr>
                <th data-class-name="class1" colspan="7">Class' . ($i+1) .'</th>
              </tr>';
      for ($h = 0, $hh = count($school[$i]); $h < $hh; $h++){
        $total =  $school[$i][$h][1] + $school[$i][$h][2] + $school[$i][$h][3]; 
        if($total > $bestscore) {
          $bestscore = $total;
          $student = $h;
        } 
        $percentage = ($total /250) * 100;
         $cssclass = ($total >= 100) ? 'green' : 'red';
         $status = ($total >= 100) ? 'succed' : 'failed';
        echo '<tr>
                <td>' . $school[$i][$h][0] .'</td>
                <td>' . $school[$i][$h][1] .'</td>
                <td>' . $school[$i][$h][2] .'</td>
                <td>' . $school[$i][$h][3] .'</td>
                <td>' . $total. '</td>
                <td>' . round($percentage,2) . '%</td>
                <td><span class=' . $cssclass . '>' . $status .  '</span></td>
              </tr>';
           }
           echo '<tr>
                   <th data-best-score="class1" colspan="7">best score is for '. $school[$i][$student][0] .' ( ' . $bestscore .')</th>
                 </tr>';
                 $bestscore = 0;
                 $student = 0;
       }                    
              ?>
            </table>
      </table>
    </body>
    </html>

