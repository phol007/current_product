<script>
//========================================== New ====================================================
function getDataNew0()
{
  $.ajax({ 
        url: "connect_api.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        if(obj==''){
          all = "<br><font size='+7' color='#ffffff'> 0 %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp; 0 คัน</font></p><br>";
              
              document.getElementById("new0").innerHTML = all
        }
          if(obj != '')
          {
              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var new0 = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["timeCreate"];
                hres = str.substr(11);
                hour = hres.substr(0, 2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);

                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){
                      if(val["status"]==0){
                        if(val["iscancel"]==0){
                          new0 +=1;
                        }
                      }
                          hcount +=1;
                      //alert(Rt2+1)
                    }
                  }
                }else{
                  if(val["status"]==0){
                    if(val["iscancel"]==0){
                      new0 +=1;
                    }
                  }
                      hcount +=1
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });
              if(hcount == 0){
                    ans = 0;
                  }else{
                    ans = Math.round(100 * (new0/hcount));
                  }
                  
              all = "<br><font size='+7' color='#ffffff'>" + ans + " %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp;" + new0 + " คัน</font></p><br>";
              
              document.getElementById("new0").innerHTML = all
          }

      });

}
//==========================================================================================================

//=========================== Pickup =========================================================================
function getDataPickup1()
{
  $.ajax({ 
        url: "connect_api.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        if(obj==''){
          all = "<br><font size='+7' color='#ffffff'> 0 %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp; 0 คัน</font></p><br>";
              
              document.getElementById("pickup1").innerHTML = all
        }
        else if(obj != '')
          {
              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var pickup1 = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["timeCreate"];
                hres = str.substr(11);
                hour = hres.substr(0, 2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);

                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){
                      if(val["status"]==1){
                        if(val["iscancel"]==0){
                          pickup1 +=1;
                        }
                      }
                          hcount +=1;
                      //alert(Rt2+1)
                    }
                  }
                }else{
                  if(val["status"]==1){
                    if(val["iscancel"]==0){
                      pickup1 +=1;
                    }                      
                  }
                  hcount +=1;
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });

              if(hcount == 0){
                    ans = 0;
                  }else{
                    ans = Math.round(100*(pickup1/hcount));
                  }
              all = "<br><font size='+7' color='#ffffff'>" + ans + " %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp;" + pickup1 + " คัน</font></p><br>";
              
              document.getElementById("pickup1").innerHTML = all
          }

      });

}
//===========================================================================================================

//=========================== Confirm =========================================================================
function getDataConfirm()
{
  $.ajax({ 
        url: "connect_api.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        if(obj==''){
          all = "<br><font size='+7' color='#ffffff'> 0 %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp; 0 คัน</font></p><br>";
              
              document.getElementById("confirm2").innerHTML = all
        }
          if(obj != '')
          {
              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var confirm2 = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["timeCreate"];
                hres = str.substr(11);
                hour = hres.substr(0, 2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);

                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){
                      if(val["status"]==2){
                        if(val["iscancel"]==0){
                          confirm2 +=1;
                        }
                      }
                          hcount +=1;
                      //alert(Rt2+1)
                    }
                  }
                }else{
                  if(val["status"]==2){
                    if(val["iscancel"]==0){
                      confirm2 +=1;
                    }
                  }
                      hcount +=1
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });
              if(hcount == 0){
                    ans = 0;
                  }else{
                    ans = Math.round(100 * (confirm2/hcount));
                  }
                  
              all = "<br><font size='+7' color='#ffffff'>" + ans + " %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp;" + confirm2 + " คัน</font></p><br>";
              
              document.getElementById("confirm2").innerHTML = all
          }

      });

}
//===========================================================================================================

//=========================== Bill =========================================================================
function getDataBill()
{
  $.ajax({ 
        url: "connect_api.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        if(obj==''){
          all = "<br><font size='+7' color='#ffffff'> 0 %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp; 0 คัน</font></p><br>";
              
              document.getElementById("bill3").innerHTML = all
        }
          if(obj != '')
          {
              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var bill3 = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["timeCreate"];
                hres = str.substr(11);
                hour = hres.substr(0, 2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);

                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){
                      if(val["status"]==3){
                        if(val["iscancel"]==0){
                          bill3 +=1;
                        }
                      }
                          hcount +=1;
                      //alert(Rt2+1)
                    }
                  }
                }else{
                  if(val["status"]==3){
                    if(val["iscancel"]==0){
                      bill3 +=1;
                    }
                  }
                      hcount +=1
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });
              if(hcount == 0){
                    ans = 0;
                  }else{
                    ans = Math.round(100 * (bill3/hcount));
                  }
              all = "<br><font size='+7' color='#ffffff'>" + ans + " %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp;" + bill3 + " คัน</font></p><br>";
              
              document.getElementById("bill3").innerHTML = all
          }

      });

}
//===========================================================================================================

//=========================== Cancel =========================================================================
function getDataCancel()
{
  $.ajax({ 
        url: "connect_api.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        if(obj==''){
          all = "<br><font size='+7' color='#ffffff'> 0 %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp; 0 คัน</font></p><br>";
              
              document.getElementById("cancel").innerHTML = all
        }
          if(obj != '')
          {
              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var cancel = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["timeCreate"];
                hres = str.substr(11);
                hour = hres.substr(0, 2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);

                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){

                        if(val["iscancel"]!=0){
                          cancel +=1;                          
                        }
                        hcount +=1;
                      //alert(Rt2+1)
                    }
                  }
                }else{

                    if(val["iscancel"]!=0){
                      cancel +=1;                      
                    }
                    hcount +=1
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });
              if(hcount == 0){
                    ans = 0;
                  }else{
                    ans = Math.round(100 * (cancel/hcount));
                  }
                  
              all = "<br><font size='+7' color='#ffffff'>" + ans + " %</font></p>"
                  + "<br><p><font size='+1' color='#000000'>จำนวน&nbsp;" + cancel + " คัน</font></p><br>";
              
              document.getElementById("cancel").innerHTML = all
          }

      });

}
//===========================================================================================================

//========================================= Sale ==================================================================
function getDataSale()
{
  $.ajax({ 
        url: "connect_apiQdetail.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) {   
        var obj = jQuery.parseJSON(result); 
        if(obj==''){
          var SumSale=0;
          var all='';
           var Cnum = SumSale.toFixed(2);
         //alert(Cnum)
         Csum = Cnum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

              all = "<font color='#ffffff'><h2>" + Csum
               all += "</font> บาท</h2>";
              
              document.getElementById("Sale").innerHTML = all
        }
        if(obj != '')
          {

              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var SumSale = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              var Csum = 0;
              var hour2 = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["createDate"];
                hour = str.substring(11, 21);
                hour2 = hour.substring(0,2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour2);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);
                //alert(Num)
                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){
                      if(val["isCancel"] == 0){
                        if(val["itemCancel"] == 0){
                          SumSale += val['billAmount'];     
                        }           
                      //alert(Rt2+1)
                      }
                    }
                  }
                }else{

                    if(val["isCancel"] == 0){
                        if(val["itemCancel"]== 0){
                          SumSale += val['billAmount'];     
                        }           
                      //alert(Rt2+1)
                      }
                  
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });
         var Cnum = SumSale.toFixed(2);
         //alert(Cnum)
         Csum = Cnum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

              all = "<font color='#ffffff'><h2>" + Csum
               all += "</font> บาท</h2>";
              
              document.getElementById("Sale").innerHTML = all
          }

      });

}
//===========================================================================================================

//=========================== CAR =========================================================================
function getDataCartotal()
{
  $.ajax({ 
        url: "connect_api.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) { 
        var obj = jQuery.parseJSON(result);
        if(obj==''){
          
          var all='';
          all = "<a href='#'><p align='right'><font size='+2'>จำนวนรถที่เข้ามาในบริษัท (100%)&nbsp;&nbsp;" + 0 + "&nbsp;&nbsp;คัน</font></p></a>"
              
              document.getElementById("NumCar").innerHTML = all
        }
          if(obj != '')
          {
              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              $.each(obj, function(key, val) {

                  i +=1;
                  //========================================================
              });
              all = "<a href='#'><p align='right'><font size='+2'>จำนวนรถที่เข้ามาในบริษัท (100%)&nbsp;&nbsp;" + i + "&nbsp;&nbsp;คัน</font></p></a>"
              
              document.getElementById("NumCar").innerHTML = all
          }

      });

}
//===========================================================================================================

//========================================= pickAmount ==================================================================
function getDataPickupAmount()
{
  $.ajax({ 
        url: "connect_apiQdetail.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) {   
        var obj = jQuery.parseJSON(result); 
        if(obj==''){
          var all='';
          var Sumpick=0;
          var Cnum = Sumpick.toFixed(2);
         //alert(Cnum)
         Csum = Cnum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

              all = "<font color='#ffffff'><h2>" + Csum
               all += "</font> บาท</h2>";
              
              document.getElementById("pickAmount").innerHTML = all
        }
        if(obj != '')
          {

              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var Sumpick = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              var Csum = 0;
              var hour2 = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["createDate"];
                hour = str.substring(11, 21);
                hour2 = hour.substring(0,2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour2);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);
                //alert(Num)
                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){
                      
                          Sumpick += val['itemAmount'];     
                      
                    }
                  }
                }else{

                          Sumpick += val['itemAmount'];     
                      
                  
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });
         var Cnum = Sumpick.toFixed(2);
         //alert(Cnum)
         Csum = Cnum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

              all = "<font color='#ffffff'><h2>" + Csum
               all += "</font> บาท</h2>";
              
              document.getElementById("pickAmount").innerHTML = all
          }

      });

}
//===========================================================================================================

//========================================= CheckOutAmount ==================================================================
function getDataCheckOutAmount()
{
  $.ajax({ 
        url: "connect_apiQdetail.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) {   
        var obj = jQuery.parseJSON(result); 
        if(obj==''){
          var all='';
          var Sumcheck=0;
          var Cnum = Sumcheck.toFixed(2);
         //alert(Cnum)
         Csum = Cnum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

              all = "<font color='#ffffff'><h2>" + Csum
               all += "</font> บาท</h2>";
              document.getElementById("checkoutAmount").innerHTML = all
        }
        if(obj != '')
          {

              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var Sumcheck = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              var Csum = 0;
              var hour2 = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["createDate"];
                hour = str.substring(11, 21);
                hour2 = hour.substring(0,2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour2);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);
                //alert(Num)
                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){
                      
                          Sumcheck += val['checkoutAmount'];     
                       
                    }
                  }
                }else{

                          Sumcheck += val['checkoutAmount'];     
                        
                  
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });
         var Cnum = Sumcheck.toFixed(2);
         //alert(Cnum)
         Csum = Cnum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

              all = "<font color='#ffffff'><h2>" + Csum
               all += "</font> บาท</h2>";
              document.getElementById("checkoutAmount").innerHTML = all
          }

      });

}
//===========================================================================================================

//========================================= itemCancel ==================================================================
function getDataItemCancel()
{
  $.ajax({ 
        url: "connect_apiQdetail.php" ,
        type: "POST",
        data: ''
      })
      .success(function(result) {   
        var obj = jQuery.parseJSON(result); 
        if(obj==''){
          var all='';
          var SumitemC=0;
          var Cnum = SumitemC.toFixed(2);
         //alert(Cnum)
         Csum = Cnum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

              all = "<font color='#ffffff'><h2>" + Csum
               all += "</font> บาท</h2>";
              document.getElementById("itemCancel").innerHTML = all
        }
        if(obj != '')
          {

              //$("#myTable tbody tr:not(:first-child)").remove();
              //$("#myBody").empty();
              var i=0;
              var all ="";
              var SumitemC = 0;
              var Num= 0;
              var str = "";
              var hres="";
              var mres="";
              var hcount = 0;
              var min,hour,h,m,mix="";
              var ans = 0;
              var sec = 0;
              var Rt2 = 0;
              var Csum = 0;
              var hour2 = 0;
              var SumPi = 0;
              var SumCh = 0;
              var Sumbil = 0;
              $.each(obj, function(key, val) {
                //================= check Time =============================
                str = val["createDate"];
                hour = str.substring(11, 21);
                hour2 = hour.substring(0,2);
                mres = str.substr(14);
                min = mres.substr(0, 2);
                h = Number(hour2);
                m = Number(min);
                mix = h + "." + m;
                Num = Number(mix);
                //alert(Num)
                Rt = <?php echo $_GET['time']; ?>;
//                alert(mix)
                //==========================================================
                //====== Loop ==============================================
                if(Rt != 0){
                  if(Num >= Rt){
                    sec = Rt%2; if(sec == 0){Rt2 = Rt;}else{Rt2 = Rt-0.1;}
                    if(Num <= (Rt2+1)){
                      if(val["isCancel"] == 0){
                      SumCh += val["checkoutAmount"];
                      SumPi += val["itemAmount"];
                        
                    }
                      Sumbil += val["billAmount"];
                    }
                  }
                }else{
                  if(val["isCancel"] == 0){
                      SumCh += val['checkoutAmount'];
                      SumPi += val["itemAmount"];
                      
                    }
                      Sumbil += val["billAmount"];
                }
                  //==================End code=============================
                  i +=1;
                  //========================================================
              });
          if(Sumch == Sumbil){SumitemC = SumPi-Sumbil;}else{SumitemC = SumCh-Sumbil;}
          //alert(SumCh + "  " + Sumbil)
         var Cnum = SumitemC.toFixed(2);
         //alert(Cnum)
         Csum = Cnum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

              all = "<font color='#ffffff'><h2>" + Csum
               all += "</font> บาท</h2>";
              document.getElementById("itemCancel").innerHTML = all
          }

      });

}
//===========================================================================================================

//========= SHOW AND SlELECT REFRESH PAGE AUOT =======================////
setInterval(getDataNew0, 1000);   // 1000 = 1 second
setInterval(getDataPickup1, 1000);   // 1000 = 1 second
setInterval(getDataConfirm, 1000); //1000 = 1 second
setInterval(getDataBill, 1000); //1000 = 1 second
setInterval(getDataCancel, 1000); //1000 = 1 second
setInterval(getDataCartotal, 1000); //1000 = 1 second
setInterval(getDataSale, 1000); //1000 = 1 second
setInterval(getDataPickupAmount, 1000);
setInterval(getDataCheckOutAmount, 1000);
setInterval(getDataItemCancel, 1000);
///======================================================================
</script>