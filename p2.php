<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/css1.css" type="text/css" />

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Report Chat</title>
		<meta name="description" content="chart created using amCharts live editor" />
		<!-- amCharts javascript sources -->
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
		<!-- amCharts javascript code -->

		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".Q").click(function(){
        $(".P2").hide();
        $(".P1").show();        
        $(".P3").hide();
    });
    $(".Top").click(function(){
        $(".P2").show();
        $(".P1").hide();        
        $(".P3").hide();
    });
    $(".Saler").click(function(){
        $(".P3").show();
        $(".P1").hide();
        $(".P2").hide();
    });
});
</script>

	</head>
	<body>
        
<div class="navbar">
 <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle glyphicon glyphicon-th" aria-hidden="true" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
     </button>     
    <img src="images/logo.jpeg" width="150">
 </div>
 <div class="collapse navbar-collapse" id="mynavbar-content">
  <ul class="nav navbar-nav">
   <li class="Q"><a href="#">สรุปคิวรถ</a></li>
   <li class="Top"><a href="#">สรุป TOP 10 รายการ</a></li>
   <li Class="Saler"><a href="#">สรุปยอดขาย</a></li>
  </ul>
 </div>
      
 </div>
</div>

<div id="demo">
<?php
require("connect_api.php");
require("connect_apiQsmart.php");
//require("connect_apiQdetail.php");
//echo $end;
echo "</div>";

?>

<div class="container">
<div id="page2">
 <!--//////////////////// คิวรถ ////////////////////--> 
  <div class="P1" >
  <h2>สรุป Graph คิวรถประจำวัน<h2>
  <?php require("graphP2.php"); ?>
  </div>
<!-- ////////////////////////////////////////////// -->

 <!--//////////////////// TOP10 ////////////////////--> 
<div class="P2" style="display:none;">
<?php

Include("function_Top10Unit.php");
Include("function_Top10Price.php");
?>
<form class="form-inline">
 เลือกรายการ : &nbsp;&nbsp;<select name="item" onchange="return select_display(this)" class="form-control">
  
  <option value="1" >ยอดขายสินค้าตามจำนวนจาก มาก - น้อย</option>
  <option value="2" >ยอดขายสินค้าตามราคาจาก มาก - น้อย</option>
</select>
<br><br>
<script>
function select_display(item) {
   if(item.value==1){
    document.getElementById("TopPrice").style.display = "none";
    document.getElementById("TopUnit").style.display = "block";    
   }else if(item.value==2){
    document.getElementById("TopUnit").style.display = "none";
    document.getElementById("TopPrice").style.display = "block";   
   }
}
</script>

<div id="TopUnit"> 
    <div id="Top10Unit" style="width: 90%; height: 400px; background-color: #FFFFFF;" ></div>
      <div class="Table"><h2>รายละเอียดสินค้าเรียงตามจำนวน</h2>
      <?php echo "<table><tr align='center'><th>ลำดับ</th><th>ชื่อสินค้า</th><th>จำนวน</th></tr>"; 
            echo $all_tableU;
            echo "</table>";
      ?>
      </div>
</div>

<div id="TopPrice" style="display:none;">
      <div id="Top10price" style="width: 90%; height: 400px; background-color: #FFFFFF;" ></div>
      <div class="Table"><h2>รายละเอียดสินค้าเรียงตามราคา</h2>
        <?php echo "<table><tr align='center'><th>ลำดับ</th><th>ชื่อสินค้า</th><th>ราคา</th></tr>"; 
              echo $all_tableP;
              echo "</table>";
        ?>
      </div>
</div>
</div>
<!-- ////////////////////////////////////////////// --> 

<!-- ///////////////////// สรุปยอดขาย ///////////////////////// -->
<div class="P3" style="display:none;">
<p aling='center'><h2>สรุปยอดขายประจำวันที่ &nbsp;&nbsp;<?php require("dateThai.php"); echo $curdate;?> </h2></p>
<?php require("Report_Saler.php"); ?>

</div>
<!-- ////////////////////////////////////////////////////////// -->


</div>
</div>
<a href="current.php"><img src="images/Back.png"></a>
<!-- PopUp หน้าตารางย่อย -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p><div id="TReport2"></div></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	</body>

</html>