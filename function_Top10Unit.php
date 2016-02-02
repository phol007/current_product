<!-- amCharts javascript sources -->
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
<?php
echo "<p style='display:none;'>";
require("connect_apiQdetail.php");
echo "</p>";
$out_w=json_decode($Qdetail,true);

$result = array();
$all_prouct="";
$all_tableU="";
$SumQty=0;
foreach ($out_w as $row) {
	$result[$row['itemName']]['itemName'] = $row['itemName'];
	@$result[$row['itemName']]['checkoutQty'] += $row['checkoutQty'];
}
	$result = array_values($result);
    if(empty($result)){
    	echo "<h1> ไม่มีข้อมูล </h1>";
    }else{

	    $sort = array();
	    foreach ($result as $k => $v) {
		$sort['itemName'][$k] = $v['itemName'];
		$sort['checkoutQty'][$k] = $v['checkoutQty'];
	    }
	    if(empty($sort['checkoutQty'])){echo "fail";}

	 	array_multisort($sort['checkoutQty'],SORT_DESC,$sort['itemName'],SORT_ASC,$result);

	 	$cnt=count($result);
	 	$s=1;
	 	if($cnt>10){
	 		for($i=0;$i<10;$i++){

	 		$all_prouct.="{'category': '".$sort['itemName'][$i]."','column-1': ".$sort['checkoutQty'][$i]." },";	
	 		if($i<10){
	 		$all_tableU.="<tr style='background:#f9fd91;'><td align='center'>".$s."</td><td>".$sort['itemName'][$i]."</td><td align='center'>".$sort['checkoutQty'][$i]."</td></tr>";
	 		}else{
	 		$all_tableU.="<tr><td align='center'>".$s."</td><td>".$sort['itemName'][$i]."</td><td align='center'>".$sort['checkoutQty'][$i]."</td></tr>";
	 		}
	 		$SumQty+=$sort['checkoutQty'][$i];
	 		$s++;
	 		}
	 		$all_tableU.="<tr style='background:#e2e2df;'><td align='right' colspan='2'><b>Total</b></td><td align='center'><b>". number_format( $SumQty , 0 )."</b></td></tr>";
	 	}else{
	 		for($i=0;$i<$cnt;$i++){

	 		$all_prouct.="{'category': '".$sort['itemName'][$i]."','column-1': ".$sort['checkoutQty'][$i]." },";	
	 		if($i<10){
	 		$all_tableU.="<tr style='background:#f9fd91;'><td align='center'>".$s."</td><td>".$sort['itemName'][$i]."</td><td align='center'>".$sort['checkoutQty'][$i]."</td></tr>";
	 		}else{
	 		$all_tableU.="<tr><td align='center'>".$s."</td><td>".$sort['itemName'][$i]."</td><td align='center'>".$sort['checkoutQty'][$i]."</td></tr>";
	 		}
	 		$SumQty+=$sort['checkoutQty'][$i];
	 		$s++;
	 		}
	 		$all_tableU.="<tr style='background:#e2e2df;'><td align='right' colspan='2'><b>Total</b></td><td align='center'><b>". number_format( $SumQty , 0 )."</b></td></tr>";
	 	}
    }

?>
<!-- amCharts javascript code -->
    <script type="text/javascript">  	
			AmCharts.makeChart("Top10Unit",
				{
					"type": "serial",
					"categoryField": "category",
					"rotate": true,
					"startDuration": 1,
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonText": "[[title]] คือ [[category]] มีจำนวน [[value]] หน่วย",
							"fillAlphas": 1,
							"id": "AmGraph-1",
							"title": "สินค้า Top 10",
							"type": "column",
							"valueField": "column-1"
						},
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"title": "จำนวน/หน่วย"
						}
					],
					"allLabels": [],
					"balloon": {},
					"legend": {
						"enabled": true,
						"useGraphSettings": true
					},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "สินค้า TOP 10 ตามจำนวน"
						}
					],
					"dataProvider": [
						<?php echo $all_prouct; ?>
					]
				}
			);
		</script>

