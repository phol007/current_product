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
$all_tableP="";
$SumPrice=0;
foreach ($out_w as $row) {
	$result[$row['itemName']]['itemName'] = $row['itemName'];
	@$result[$row['itemName']]['billAmount'] += $row['billAmount'];
}
	$result = array_values($result);
    if(empty($result)){
    	echo "<h1> ไม่มีข้อมูล </h1>";
    }else{

	    $sort = array();
	    foreach ($result as $k => $v) {
		$sort['itemName'][$k] = $v['itemName'];
		$sort['billAmount'][$k] = $v['billAmount'];
	    }
	    if(empty($sort['billAmount'])){echo "fail";}

	 	array_multisort($sort['billAmount'],SORT_DESC,$sort['itemName'],SORT_ASC,$result);

	 	$cnt=count($result);
	 	$s=1;
	 	if($cnt>10){
	 		for($i=0;$i<10;$i++){

	 		$all_prouct.="{'category': '".$sort['itemName'][$i]."','column-1': ".$sort['billAmount'][$i]." },";	
	 		if($i<10){
	 		$all_tableP.="<tr style='background:#f9fd91;'><td align='center'>".$s."</td><td>".$sort['itemName'][$i]."</td><td align='right'>".number_format($sort['billAmount'][$i],2)."</td></tr>";
	 		}else{
	 		$all_tableP.="<tr><td align='center'>".$s."</td><td>".$sort['itemName'][$i]."</td><td align='right'>".number_format($sort['billAmount'][$i],2)."</td></tr>";
	 		}
	 		$SumPrice+=$sort['billAmount'][$i];
	 		$s++;
	 		}
	 		$all_tableP.="<tr style='background:#e2e2df;'><td align='right' colspan='2'><b>Total</b></td><td align='right'><b>". number_format( $SumPrice , 0 )."</b></td></tr>";
	 	}else{
	 		for($i=0;$i<$cnt;$i++){

	 		$all_prouct.="{'category': '".$sort['itemName'][$i]."','column-1': ".$sort['billAmount'][$i]." },";
	 		if($i<10){
	 		$all_tableP.="<tr style='background:#f9fd91;'><td align='center'>".$s."</td><td>".$sort['itemName'][$i]."</td><td align='right'>".number_format($sort['billAmount'][$i],2)."</td></tr>";
	 		}else{
	 		$all_tableP.="<tr><td align='center'>".$s."</td><td>".$sort['itemName'][$i]."</td><td align='right'>".number_format($sort['billAmount'][$i],2)."</td></tr>";
	 		}
	 		$SumPrice+=$sort['billAmount'][$i];
	 		$s++;
	 		}
	 		$all_tableP.="<tr style='background:#e2e2df;'><td align='right' colspan='2'><b>Total</b></td><td align='right'><b>". number_format( $SumPrice , 0 )."</b></td></tr>";
	 	}
    }

?>
<!-- amCharts javascript code -->
    <script type="text/javascript">  	
			AmCharts.makeChart("Top10price",
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
							"balloonText": "[[title]] คือ [[category]] มีจำนวน [[value]] บาท",
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
							"title": "ราคา/บาท"
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
							"text": "สินค้า TOP 10 ตามราคา"
						}
					],
					"dataProvider": [
						<?php echo $all_prouct; ?>
					]
				}
			);
		</script>