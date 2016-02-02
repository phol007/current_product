<script>
  
function getDataFromDb()
{
  $.ajax({ 
        url: "connect_api.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        //var sum=0;
          if(obj != '')
          {
              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
       var i = 0;
         var all ="";

       var n8 = 0;
       var n9=0;
       var n10=0;
       var n11=0;
       var n12=0;
       var n13=0;
       var n14=0;
       var n15=0;
       var n16=0;

       var can8 = 0;
       var can9=0;
       var can10=0;
       var can11=0;
       var can12=0;
       var can13=0;
       var can14=0;
       var can15=0;
       var can16=0;

         var p8 = 0;
         var p9 = 0;
         var p10 = 0;
         var p11 = 0;
         var p12 = 0;
         var p13 = 0;
         var p14 = 0;
         var p15 = 0;
         var p16 = 0;

         var c8 = 0;
         var c9 = 0;
         var c10 = 0;
         var c11 = 0;
         var c12 = 0;
         var c13 = 0;
         var c14 = 0;
         var c15 = 0;
         var c16 = 0;

         var b8 = 0;
         var b9 = 0;
         var b10 = 0;
         var b11 = 0;
         var b12 = 0;
         var b13 = 0;
         var b14 = 0;
         var b15 = 0;
         var b16 = 0;

       var str = "";
             var hres="";
             var mres="";
             var hcount = 0;
             var min,hour,h,m,mix="";
             var ans = 0;
             var sta = "";
          $.each(obj, function(key, val) {
            sta = val["status"];
            str = val["timeCreate"];
            hres = str.substr(11);
            hour = hres.substr(0, 2);
            mres = str.substr(14);
            min = mres.substr(0, 2);
            h = Number(hour);
            m = Number(min);
            mix = h + "." + m;
            Num = Number(mix);

            if(Num >= 8.0){
              if(Num <= 9.0){
                if(val["status"] == 0){ n8 += 1; if(val["iscancel"] == 1){n8 -=1;}sta = "new";}
                else if(val["status"] == 1){ p8 += 1; if(val["iscancel"] == 1){p8 -=1;} sta = "pickup";}
                else if(val["status"] == 2){ c8 += 1; if(val["iscancel"] == 1){c8 -=1;} sta = "confirm";}
                else if(val["status"] == 3){ b8 += 1; sta = "bill";}
                if(val["iscancel"] == 1){ can8 +=1;}
              }
            }

            if(Num >= 9.1){
              if(Num <= 10.0){
                if(val["status"] == 0){ n9 += 1; if(val["iscancel"] == 1){n9 -=1;}sta = "new";}
                else if(val["status"] == 1){ p9 += 1; if(val["iscancel"] == 1){p9 -=1;} sta = "pickup";}
                else if(val["status"] == 2){ c9 += 1; if(val["iscancel"] == 1){c9 -=1;} sta = "confirm";}
                else if(val["status"] == 3){ b9 += 1; sta = "bill";}
              if(val["iscancel"] == 1){ can9 +=1;}
              }
            }

          if(Num >= 10.1){
            if(Num <= 11.0){
              if(val["status"] == 0){ n10 += 1; if(val["iscancel"] == 1){n10 -=1;}sta = "new";}
              else if(val["status"] == 1){ p10 += 1; if(val["iscancel"] == 1){p10 -=1;} sta = "pickup";}
              else if(val["status"] == 2){ c10 += 1; if(val["iscancel"] == 1){c10 -=1;} sta = "confirm";}
              else if(val["status"] == 3){ b10 += 1; sta = "bill";}
              if(val["iscancel"] == 1){ can10 +=1;}
            }
          }

          if(Num >= 11.1){
            if(Num <= 12.0){
              if(val["status"] == 0){ n11 += 1; if(val["iscancel"] == 1){n11 -=1;}sta = "new";}
              else if(val["status"] == 1){ p11 += 1; if(val["iscancel"] == 1){p11 -=1;} sta = "pickup";}
              else if(val["status"] == 2){ c11 += 1; if(val["iscancel"] == 1){c11 -=1;} sta = "confirm";}
              else if(val["status"] == 3){ b11 += 1; sta = "bill";}
              if(val["iscancel"] == 1){ can11 +=1;}
            }
          }

          if(Num >= 12.1){
            if(Num <= 13.0){
              if(val["status"] == 0){ n12 += 1; if(val["iscancel"] == 1){n12 -=1;}sta = "new";}
              else if(val["status"] == 1){ p12 += 1; if(val["iscancel"] == 1){p12 -=1;} sta = "pickup";}
              else if(val["status"] == 2){ c12 += 1; if(val["iscancel"] == 1){c12 -=1;} sta = "confirm";}
              else if(val["status"] == 3){ b12 += 1; sta = "bill";}
              if(val["iscancel"] == 1){ can12 +=1;}
            }
          }

          if(Num >= 13.1){
            if(Num <= 14.0){
              if(val["status"] == 0){ n13 += 1; if(val["iscancel"] == 1){n13 -=1;}sta = "new";}
              else if(val["status"] == 1){ p13 += 1; if(val["iscancel"] == 1){p13 -=1;} sta = "pickup";}
              else if(val["status"] == 2){ c13 += 1; if(val["iscancel"] == 1){c13 -=1;} sta = "confirm";}
              else if(val["status"] == 3){ b13 += 1; sta = "bill";}
              if(val["iscancel"] == 1){ can13 +=1;}
            }
          }

          if(Num >= 14.1){
            if(Num <= 15.0){
              if(val["status"] == 0){ n14 += 1; if(val["iscancel"] == 1){n14 -=1;}sta = "new";}
              else if(val["status"] == 1){ p14 += 1; if(val["iscancel"] == 1){p14 -=1;} sta = "pickup";}
              else if(val["status"] == 2){ c14 += 1; if(val["iscancel"] == 1){c14 -=1;} sta = "confirm";}
              else if(val["status"] == 3){ b14 += 1; sta = "bill";}
              if(val["iscancel"] == 1){ can14 +=1;}
            }
          }

          if(Num >= 15.1){
            if(Num <= 16.0){
              if(val["status"] == 0){ n15 += 1; if(val["iscancel"] == 1){n15 -=1;}sta = "new";}
              else if(val["status"] == 1){ p15 += 1; if(val["iscancel"] == 1){p15 -=1;} sta = "pickup";}
              else if(val["status"] == 2){ c15 += 1; if(val["iscancel"] == 1){c15 -=1;} sta = "confirm";}
              else if(val["status"] == 3){ b15 += 1; sta = "bill";}
              if(val["iscancel"] == 1){ can15 +=1;}
            }
          }
          if(Num >= 16.1){
            if(Num <= 17.0){
              if(val["status"] == 0){ n16 += 1; if(val["iscancel"] == 1){n16 -=1;}sta = "new";}
              else if(val["status"] == 1){ p16 += 1; if(val["iscancel"] == 1){p16 -=1;} sta = "pickup";}
              else if(val["status"] == 2){ c16 += 1; if(val["iscancel"] == 1){c16 -=1;} sta = "confirm";}
              else if(val["status"] == 3){ b16 += 1; sta = "bill";}
              if(val["iscancel"] == 1){ can16 +=1;}
            }
          }
          i++;
          });
//alert(n14 + " " +p14+" " +" "+ c14+" " + b14 + "  " +can14);
        all = "จำนวนคิวรถที่เข้ามาในบริษัททั้งหมด " + i +" คิว";
        document.getElementById("demo").innerHTML = all
       
      );
            
          }

      });

}
setInterval(getDataFromDb, 1000);   // 1000 = 1 second


AmCharts.makeChart("chartdiv",
        {
          "type": "serial",
          "categoryField": "category",
          "startDuration": 1,
          "categoryAxis": {
            "gridPosition": "start"
          },
          "type": "serial",
          "categoryField": "category",
          "colors": [
            "#13A000",
            "#FFA800",
            "#fcff00",
            "#003cff",
            "#ff0000",
            "#CD0D74",
            "#CC0000",
            "#00CC00",
            "#0000CC",
            "#DDDDDD",
            "#999999",
            "#333333",
            "#990000"
          ],
          "trendLines": [],
          "graphs": [
            {
              "balloonText": "[[title]] of [[category]]:[[value]]",
              "fillAlphas": 1,
              "id": "AmGraph-1",
              "title": "รถเข้า",
              "type": "column",
              "valueField": "column-1"
            },
            {
              "balloonText": "[[title]] of [[category]]:[[value]]",
              "fillAlphas": 1,
              "id": "AmGraph-2",
              "title": "ขนของ",
              "type": "column",
              "valueField": "column-2"
            },
            {
              "balloonText": "[[title]] of [[category]]:[[value]]",
              "fillAlphas": 1,
              "id": "AmGraph-3",
              "title": "ตรวจเช็ค",
              "type": "column",
              "valueField": "column-3"
            },
            {
              "balloonText": "[[title]] of [[category]]:[[value]]",
              "fillAlphas": 1,
              "id": "AmGraph-4",
              "title": "ออกบิล",
              "type": "column",
              "valueField": "column-4"
            },
            {
              "balloonText": "[[title]] of [[category]]:[[value]]",
              "fillAlphas": 1,
              "id": "AmGraph-5",
              "title": "ยกเลิกสินค้า",
              "type": "column",
              "valueField": "column-5"
            }
          ],
          "guides": [],
          "valueAxes": [
            {
              "id": "ValueAxis-1",
              "title": "จำนวน/คัน"
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
              "text": all
            }
          ],
          "dataProvider": [
            {
              "category": "08:00 - 09:00",
              "column-1": n8,            
              "column-2": p8,
              "column-3": c8,
              "column-4": b8,
              "column-5": can8
            },
            {
              "category": "09:01 - 10:00",
              "column-1": n9,            
              "column-2": p9,
              "column-3": c9,
              "column-4": b9,
              "column-5": can9
            },
            {
              "category": "10:01 - 11:00",
              "column-1": n10,            
              "column-2": p10,
              "column-3": c10,
              "column-4": b10,
              "column-5": can10
            },
            {
              "category": "11:01 - 12:00",
              "column-1": n11,            
              "column-2": p11,
              "column-3": c11,
              "column-4": b11,
              "column-5": can11
            },
            {
              "category": "12:01 - 13:00",
              "column-1": n12,            
              "column-2": p12,
              "column-3": c12,
              "column-4": b12,
              "column-5": can12
            },
            {
              "category": "13:01 - 14:00",
              "column-1": n13,            
              "column-2": p13,
              "column-3": c13,
              "column-4": b13,
              "column-5": can13
            },
            {
              "category": "14:01 - 15:00",
              "column-1": n14,            
              "column-2": p14,
              "column-3": c14,
              "column-4": b14,
              "column-5": can14
            },
            {
              "category": "15:01 - 16:00",
              "column-1": n15,            
              "column-2": p15,
              "column-3": c15,
              "column-4": b15,
              "column-5": can15
            },
            {
              "category": "16:01 - 17:00",
              "column-1": n16,            
              "column-2": p16,
              "column-3": c16,
              "column-4": b16,
              "column-5": can16
            }
          ]
        }
</script>