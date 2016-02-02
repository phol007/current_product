<!DOCTYPE html>
<html>
<head>
<title>Thaitable</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.js"></script>

<link rel="stylesheet" href="css/css1.css" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>chart created with amCharts | amCharts</title>
    <meta name="description" content="chart created using amCharts live editor" />
    <!-- amCharts javascript sources -->
    <script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
    <script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
    <!-- amCharts javascript code -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<meta charset=utf-8 />
<body>
<p id="demo">
<?php
require("connect_apiQdetail.php");
//echo $end;
?>
</p>
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title"><div id="table">คิวรถที่ <?php echo $_GET['qId']; ?></h2>
</div>

<div id="TReport2"></div>
</div> 

</body>
<script>
                  var data = <?php echo $Qdetail; ?>;
                  var i = 0;
                  var count = data.length;
                  var all ="";
                  var time="";
                  var isCan = "";
                  var sty = "";
                  var Spick=0;
                  var Scheck=0;
                  var Sbill=0;
                  var Mpick=0;
                  var Mcheck=0;
                  var Mbill=0;
                  var Cpick=0;
                  var Ccheck=0;
                  var Cbill=0;
                  var CSpick=0;
                  var CScheck=0;
                  var CSbill=0;
                  var rows=0;
                  
                  all += "<div class='table-responsive'><table>";
                  all += "<tr align='center'><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>จำนวน pickup/หน่วย</th><th>จำนวน checkOut/หน่วย</th><th>มูลค่า pickup</th><th>มูลค่า checkOut</th><th>มูลค่า billing</th><th>ผู้ออก Order</th><th>ผู้เช็คของ</th><th>สถานะสินค้า</th>";

                  while(i<count){

                    if(data[i].qId==<?php echo $_GET['qId']; ?>){
                      if(data[i].itemCancel == 0){ if(data[i].isCancel==0){isCan = "<font color='green'>สมบูรณ์</font>";} }
                    else if(data[i].itemCancel == 1){ if(data[i].isCancel==1){isCan = "<font color='red'>ยกเลิกสินค้า</font> ";}}
                     Mpick = data[i].itemAmount;
                     Mcheck = data[i].checkoutAmount;
                     Mbill = data[i].billAmount;

                     cpick = Mpick.toFixed(2);
                     Ccheck = Mcheck.toFixed(2);
                     Cbill = Mbill.toFixed(2);

                      all += "<tr align='center'><td>";
                      all += data[i].itemCode+"</td><td align='left'>"+data[i].itemName+"</td><td>"+data[i].pickQty+" "+data[i].unitCode+"</td><td>"+data[i].checkoutQty+" "+data[i].unitCode+"</td><td align='right'>"+cpick.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"</td><td align='right'>"+Ccheck.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"</td><td align='right'>"+Cbill.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"</td><td align='left'>"+data[i].pickerCode+":  "+data[i].pickerName+"</td><td align='left'>"+data[i].checkerCode+":  "+data[i].checkerName+"</td><td>"+isCan+"</td>";
                      
                      Spick+=data[i].itemAmount;
                      Scheck+=data[i].checkoutAmount;
                      Sbill+=data[i].billAmount;
                    }
                    i++;
                  }
                  var SMpick = Spick.toFixed(2);
                  var SMcheck = Scheck.toFixed(2);
                  var SMbill = Sbill.toFixed(2);

                  all +="<tr style='background:#dedee0;' align='right'><td colspan='4' align='left'><b>ยอดรวม Total</b></td><td><b>" + SMpick.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") 
                  + "</b></td><td><b>"+SMcheck.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"</b></td><td><b>"+SMbill.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")+"</b></td><td style='background:gray;' colspan='3'></td></tr>";         
                  all +="</table></div>";
                  document.getElementById("TReport2").innerHTML = all
                  
</script>
<p></p>
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</html>