<?php

echo "<p style='display:none;'>";
require("connect_apiQdetail.php");
echo "</p>";
?>





<?php
$out_w=json_decode($Qdetail,true);



$result = array();
$cnt=0;
$all_prouct="";
$sum=0;
foreach ($out_w as $row) {
  $result[$row['qId']]['qId'] = $row['qId'];
  $result[$row['qId']]['carLicence'] = $row['carLicence'];
  $result[$row['qId']]['carBrand'] = $row['carBrand'];
  $result[$row['qId']]['invoiceNo'] = $row['invoiceNo'];
  @$result[$row['qId']]['pick'] = $row['pickerCode']." : ".$row['pickerName'];
  @$result[$row['qId']]['check'] = $row['checkerCode']." : ".$row['checkerName'];
  @$result[$row['qId']]['itemName'] .= $row['itemName']."<br>";
  @$result[$row['qId']]['billAmount'] .= number_format($row['billAmount'],2)."<br>";
}
  $result = array_values($result);
    if(empty($result)){
      $all_prouct = "<tr><td colspan='5'><h1> ไม่มีข้อมูล </h1><td></tr>";
    }else{
      $sort = array();
      foreach ($result as $k => $v) {
      $sort['qId'][$k] = $v['qId'];
      $sort['carLicence'][$k] = $v['carLicence'];
      $sort['carBrand'][$k] = $v['carBrand'];
      $sort['invoiceNo'][$k] = $v['invoiceNo'];
      $sort['pick'][$k]=$v['pick'];
      $sort['check'][$k]=$v['check'];
      $sort['itemName'][$k] = $v['itemName'];

      $sort['billAmount'][$k] = $v['billAmount']; 
      }
    }
    //array_multisort($sort['qId'],SORT_ASC,$result);

    $cnt=count($result);
$all_prouct.="<div class='Table' style='width:100%;'><table border='1' width='100%'><tr><th>ลำดับ</th><th>ทะเบียน</th><th>ยี่ห้อ</th><th>เลขที่บิล</th><th>รายการ</th><th>ผู้จัด</th><th>ผู้ตรวจเช็ค</th><th>ราคา</th></tr>";
    for($i=0;$i<$cnt;$i++){
      if(empty($sort['invoiceNo'][$i])){$sort['invoiceNo'][$i]="-";}
      $all_prouct.="<tr valign='top'><td>".$sort['qId'][$i]."</td><td>".$sort['carLicence'][$i]."</td><td>";
      $all_prouct.=$sort['carBrand'][$i]."</td><td align='right'>".$sort['invoiceNo'][$i]."</td><td>".$sort['itemName'][$i]."</td><td>".$sort['pick'][$i]."</td><td>".$sort['check'][$i]."</td><td align='right'>".$sort['billAmount'][$i]."</td></tr>";  
      

    }

    echo $all_prouct;
    //echo $sum;
?>
<tr><td colspan="7" align="right">total</td><td align="right"><div id="total"></div></td></tr></table>
<script>

                  var data = <?php echo $Qdetail; ?>;
                  var i = 0;
                  var count = data.length;
                  var all ="";
                  var Mbil=0;
                  var Mbill=0;
                  
                  while(i<count){
                   
                    Mbil+=data[i].billAmount;           
                    i++;
                  }
                  Mbill=Mbil.toFixed(2);
                  
                  all =Mbill.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                   //alert(all)   
                  document.getElementById("total").innerHTML = all
</script>
