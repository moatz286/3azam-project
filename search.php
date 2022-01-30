<?php

$servername = "localhost";
$dbname= "clabsmvp_clabs";
$username = "clabsmvp_jim";
$password = "uZzGL(h;Uf17";
$id = $_GET['id'];
// $eno = "";
$name = "";
$passport = "";
// $excenter = "";
// $exdate = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM results WHERE id = $id ");
  $stmt->execute();
  foreach($stmt as $row){
      $name = $row['name'];
    //   $eno = $row['eno'];
      $passport = $row['passport'];
    //   $excenter = $row['excenter'];
    //   $exdate = $row['exdate'];
  }
//   echo $name;
  // set the resulting array to associative
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   $name = $result["name"];
//   echo $result;
//   foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//     echo $v;
//   }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
// echo  $_GET['id'];

?> 



<!DOCTYPE html>
<!-- saved from url=(0039)https://clabresults.mohp.gov.eg/general -->
<html lang="ar" dir="{{&#39;dir&#39;|translate}}" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="./generalEn_files/bootstrap.min.css" rel="stylesheet">
    <link href="./generalEn_files/style.css" rel="stylesheet">
    <link href="./generalEn_files/busy.css" rel="stylesheet">
    <!-- <link href="./generalEn_files/font-awesome.min.css" rel="stylesheet"> -->
    <link href="./generalEn_files/css" rel="stylesheet">
    <!-- <link href="./generalEn_files/font-awesome.css" rel="stylesheet"> -->
    <link href="./generalEn_files/style(1).css" rel="stylesheet">
    <script>
        window.onload = ()=> {
            const queryString = window.location.search;
           const urlParams = new URLSearchParams(queryString);
           let id = urlParams.get('id');
           var report =  document.getElementById('report');
           
                // $("#report").click(window.open("/report.php?id=" + id));
               report.addEventListener('click',()=> {
                    window.open("/report.php?id=" + id);
                } );
        }
    </script>
    
<style type="text/css">
:root #header + #content > #left > #rlblock_left
{ display: none !important; }</style><style>.input-group[class*="col-"][_ngcontent-c0] {
        padding-right: 15px;
        padding-left: 15px;
    }</style><style>.spanarFix[_ngcoyntent-c0] {
        border: 1px solid #ccc !important;
        border-bottom-right-radius: 0 !important;
        border-top-RIGHT-radius: 0 !important;
        border-right: 0 !important;
    }</style><style>.mydp .headertodaybtn,.mydp .selection,.mydp .weekdaytitle{overflow:hidden;white-space:nowrap}.mydp{line-height:1.1;display:inline-block;position:relative}.mydp *{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;font-family:Arial,Helvetica,sans-serif;padding:0;margin:0}.mydp,.mydp .headertodaybtn,.mydp .selection,.mydp .selectiongroup,.mydp .selector{border-radius:4px}.mydp .header{border-radius:4px 4px 0 0}.mydp .caltable,.mydp .monthtable,.mydp .yeartable{border-radius:0 0 4px 4px}.mydp .caltable tbody tr:nth-child(6) td:first-child,.mydp .monthtable tbody tr:nth-child(4) td:first-child,.mydp .yeartable tbody tr:nth-child(7) td:first-child{border-bottom-left-radius:4px}.mydp .caltable tbody tr:nth-child(6) td:last-child,.mydp .monthtable tbody tr:nth-child(4) td:last-child,.mydp .yeartable tbody tr:nth-child(7) td:last-child{border-bottom-right-radius:4px}.mydp .btnpicker{border-radius:0 4px 4px 0}.mydp .btnleftborderradius{border-top-left-radius:4px;border-bottom-left-radius:4px}.mydp .selector{margin-top:2px;margin-left:-1px;position:absolute;width:252px;padding:0;border:1px solid #CCC;z-index:100;animation:selectorfadein .1s}.mydp .selector:focus{border:1px solid #ADD8E6;outline:0}@keyframes selectorfadein{from{opacity:0}to{opacity:1}}.mydp .selectorarrow{background:#FAFAFA;margin-top:12px;padding:0}.mydp .selectorarrow:after,.mydp .selectorarrow:before{bottom:100%;border:solid transparent;content:" ";height:0;width:0;position:absolute}.mydp .selectorarrow:after{border-color:rgba(250,250,250,0);border-bottom-color:#FAFAFA;border-width:10px;margin-left:-10px}.mydp .selectorarrow:before{border-color:rgba(204,204,204,0);border-bottom-color:#CCC;border-width:11px;margin-left:-11px}.mydp .selectorarrow:focus:before{border-bottom-color:#ADD8E6}.mydp .selectorarrowleft:after,.mydp .selectorarrowleft:before{left:24px}.mydp .selectorarrowright:after,.mydp .selectorarrowright:before{left:224px}.mydp .alignselectorright{right:-1px}.mydp .selectiongroup{position:relative;display:table;border:none;border-spacing:0;background-color:#FFF}.mydp .selection{width:100%;outline:0;background-color:#FFF;display:table-cell;position:absolute;text-overflow:ellipsis;padding-left:6px;border:none;color:#555}.mydp .invaliddate{background-color:#F1DEDE}.mydp ::-ms-clear{display:none}.mydp .headerbtncell,.mydp .selbtngroup{display:table-cell;vertical-align:middle}.mydp .selbtngroup{position:relative;white-space:nowrap;width:1%;font-size:0}.mydp .btnclear,.mydp .btndecrease,.mydp .btnincrease,.mydp .btnpicker{height:100%;width:26px;border:none;padding:0;outline:0;font:inherit;-moz-user-select:none}.mydp .btnleftborder{border-left:1px solid #CCC}.mydp .btnclearenabled,.mydp .btndecreaseenabled,.mydp .btnincreaseenabled,.mydp .btnpickerenabled,.mydp .headerbtnenabled,.mydp .headertodaybtnenabled,.mydp .yearchangebtnenabled{cursor:pointer}.mydp .btncleardisabled,.mydp .btndecreasedisabled,.mydp .btnincreasedisabled,.mydp .btnpickerdisabled,.mydp .headerbtndisabled,.mydp .headertodaybtndisabled,.mydp .selectiondisabled,.mydp .yearchangebtndisabled{cursor:not-allowed;opacity:.65}.mydp .selectiondisabled{background-color:#EEE}.mydp .btnclear,.mydp .btndecrease,.mydp .btnincrease,.mydp .btnpicker,.mydp .headertodaybtn{background:#FFF}.mydp .header{width:100%;height:30px;background-color:#FAFAFA}.mydp .header td{vertical-align:middle;border:none;line-height:0}.mydp .header td:nth-child(1){padding-left:4px}.mydp .header td:nth-child(2){text-align:center}.mydp .header td:nth-child(3){padding-right:4px}.mydp .caltable,.mydp .monthtable,.mydp .yeartable{table-layout:fixed;width:100%;background-color:#FFF;font-size:14px}.mydp .caltable,.mydp .daycell,.mydp .monthcell,.mydp .monthtable,.mydp .weekdaytitle,.mydp .yearcell,.mydp .yeartable{border-collapse:collapse;color:#036;line-height:1.1}.mydp .daycell,.mydp .monthcell,.mydp .weekdaytitle,.mydp .yearcell{padding:4px;text-align:center}.mydp .weekdaytitle{background-color:#DDD;font-size:11px;font-weight:400;vertical-align:middle;max-width:36px}.mydp .weekdaytitleweeknbr{width:20px;border-right:1px solid #BBB}.mydp .daycell{height:30px}.mydp .monthcell{background-color:#FAFAFA;height:50px;width:33.3333%}.mydp .yearcell{background-color:#FAFAFA;height:30px;width:20%}.mydp .daycell .datevalue{background-color:inherit;vertical-align:middle}.mydp .daycell .datevalue span{vertical-align:middle}.mydp .daycellweeknbr{font-size:10px;border-right:1px solid #CCC;cursor:default;color:#000}.mydp .inlinedp{position:relative;margin-top:-1px}.mydp .nextmonth,.mydp .prevmonth{color:#CCC}.mydp .disabled{cursor:default!important;color:#CCC!important;background:#FBEFEF!important}.mydp .highlight{color:#C30000}.mydp .dimday{opacity:.5}.mydp .currmonth{background-color:#F6F6F6;font-weight:400}.mydp .markdate{position:absolute;width:4px;height:4px;border-radius:4px}.mydp .currday{text-decoration:underline}.mydp .selectedday .datevalue,.mydp .selectedmonth .monthvalue,.mydp .selectedyear .yearvalue{border:1px solid #004198;background-color:#8EBFFF!important;border-radius:2px}.mydp .selectedmonth .monthvalue{padding:6px}.mydp .selectedyear .yearvalue{padding:2px}.mydp .headerbtncell{background-color:#FAFAFA}.mydp .yearchangebtncell{text-align:center;height:25px;background-color:#FAFAFA}.mydp .headerbtn,.mydp .headerlabelbtn,.mydp .yearchangebtn{background:#FAFAFA;border:none;height:22px}.mydp .headerbtn{width:16px}.mydp .headerlabelbtn{font-size:14px;outline:0;cursor:default}.mydp,.mydp .headertodaybtn{border:1px solid #CCC}.mydp .btnclear,.mydp .btndecrease,.mydp .btnincrease,.mydp .btnpicker,.mydp .headerbtn,.mydp .headermonthtxt,.mydp .headertodaybtn,.mydp .headeryeartxt,.mydp .yearchangebtn{color:#000}.mydp .headertodaybtn{padding:0 4px;font-size:11px;height:22px;min-width:60px;max-width:84px}.mydp button::-moz-focus-inner{border:0}.mydp .headermonthtxt,.mydp .headeryeartxt{text-align:center;display:table-cell;vertical-align:middle;font-size:14px;height:26px;width:40px;max-width:40px;overflow:hidden;white-space:nowrap}.mydp .btnclear:focus,.mydp .btndecrease:focus,.mydp .btnincrease:focus,.mydp .btnpicker:focus,.mydp .headertodaybtn:focus{background:#ADD8E6}.mydp .headerbtn:focus,.mydp .monthlabel:focus,.mydp .yearchangebtn:focus,.mydp .yearlabel:focus{color:#ADD8E6;outline:0}.mydp .daycell:focus,.mydp .monthcell:focus,.mydp .yearcell:focus{outline:#CCC solid 1px}.mydp .icon-mydpcalendar,.mydp .icon-mydpremove{font-size:16px}.mydp .icon-mydpdown,.mydp .icon-mydpleft,.mydp .icon-mydpright,.mydp .icon-mydpup{color:#222;font-size:20px}.mydp .btndecrease .icon-mydpleft,.mydp .btnincrease .icon-mydpright{font-size:16px}.mydp .icon-mydptoday{color:#222;font-size:11px}.mydp table{display:table;border-spacing:0}.mydp table td{padding:0}.mydp table,.mydp td,.mydp th{border:none}.mydp .btnclearenabled:hover,.mydp .btndecreaseenabled:hover,.mydp .btnincreaseenabled:hover,.mydp .btnpickerenabled:hover,.mydp .headertodaybtnenabled:hover{background-color:#E6E6E6}.mydp .tablesingleday:hover,.mydp .tablesinglemonth:hover,.mydp .tablesingleyear:hover{background-color:#DDD}.mydp .daycell,.mydp .inputnoteditable,.mydp .monthcell,.mydp .monthlabel,.mydp .yearcell,.mydp .yearlabel{cursor:pointer}.mydp .headerbtnenabled:hover,.mydp .monthlabel:hover,.mydp .yearchangebtnenabled:hover,.mydp .yearlabel:hover{color:#777}@font-face{font-family:mydatepicker;src:url(data:application/octet-stream;base64,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) format('truetype');font-weight:400;font-style:normal}.mydp .mydpicon{font-family:mydatepicker;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.mydp .icon-mydpright:before{content:"\e800"}.mydp .icon-mydpleft:before{content:"\e801"}.mydp .icon-mydptoday:before{content:"\e802"}.mydp .icon-mydpcalendar:before{content:"\e803"}.mydp .icon-mydpup:before{content:"\e804"}.mydp .icon-mydpdown:before{content:"\e805"}.mydp .icon-mydpremove:before{content:"\e806"}</style></head>
<body>

    
<div>
    <user-app ng-version="4.3.6">
                <div>
                    <div>
                        <router-outlet></router-outlet><ng-component _nghost-c0="">

<div _ngcontent-c0="" class="inbody-bg">

</div>

<head _ngcontent-c0="">
    
    <title _ngcontent-c0=""></title>
</head>


<link _ngcontent-c0="" href="./generalEn_files/style.css" rel="stylesheet">
<link _ngcontent-c0="" href="./generalEn_files/ui-grid.min.css" rel="stylesheet">
<link _ngcontent-c0="" href="./generalEn_files/bootstrap-datetimepicker.min.css" rel="stylesheet">
<!--bindings={
  "ng-reflect-ng-if": "false"
}-->




 
<header _ngcontent-c0="" class="inner-head" id="header">
    <div _ngcontent-c0="" class="container">
        <div _ngcontent-c0="" class="row">
            <div _ngcontent-c0="" class="col-md-12">
                <div _ngcontent-c0="" class="home-button">
                    <a _ngcontent-c0="" class="home-button" href="home.php?lang=en "role="button">Home</a>
                    <i _ngcontent-c0="" aria-hidden="true" class="fa fa-home" style="margin-right:5px; font-size:18px;color:#ce000c;margin-top: 4px;"></i>
                </div>
                <div _ngcontent-c0="" class="language-button">
                    <i _ngcontent-c0="" aria-hidden="true" class="fa fa-globe" style="margin-right:5px; font-size:18px;color:#ce000c;margin-top: 4px;"></i>

                    <!--bindings={
  "ng-reflect-ng-if": "true"
}--><a _ngcontent-c0="" class="language-button" href="#" role="button">اللغة العربية</a>
                    <!--bindings={
  "ng-reflect-ng-if": "false"
}-->
                </div>


                <div _ngcontent-c0="" class="logos">
                    <img _ngcontent-c0="" src="./generalEn_files/logo.png">
                    <span _ngcontent-c0="">
                        Ministry of Health
                    </span>
                </div>

            </div>
        </div>
    </div>
</header>


<div _ngcontent-c0="" class="spacer"></div>


<div _ngcontent-c0="" class="col-md-10  offset-lg-1 offset-md-1  contr  ">
   
        <div _ngcontent-c0="" class="callbacks_container" id="top">
           
             


                        

                      
                  
                        
                     
                        <general-header _ngcontent-c0="" ng-reflect--field-name-label="PatientName" ng-reflect--field-id-label="PassportNo" ng-reflect--field-name=<?php echo $name ?> ng-reflect--field-id="P05112198"><div>   
        <div class="user-info" id="DataId" dir="ltr">
            <div class="col-md-6 col-xs-6 marginMenu autosized">
                <span class="label label-primary"><b>Passport No. :</b> <?php echo $passport; ?></span>
            </div>

            <div class="col-md-6 col-xs-6 marginMenu autosized">
                <span class="label label-primary">
                    <b>Patient Name :</b>   <?php echo $name; ?>  </span>
            </div>
        </div>    
</div></general-header>
                        
                        <div _ngcontent-c0="" class="search-panal">
                            <h2 _ngcontent-c0="">Search</h2>
                            <div _ngcontent-c0="" ng-reflect-ng-switch="VisaBloodTest">
                                
                                <!--bindings={
  "ng-reflect-ng-switch-case": "CustomCustom"
}-->
                                <!--bindings={
  "ng-reflect-ng-switch-case": "WaterSampleArea"
}-->
                                <!--bindings={
  "ng-reflect-ng-switch-case": "WaterSampleHealthOffice"
}-->
                                
                                <!--bindings={
  "ng-reflect-ng-switch-case": "FoodHealthHealthOffice"
}-->
                                <!--bindings={
  "ng-reflect-ng-switch-case": "Narcotic"
}-->
                                <!--bindings={
  "ng-reflect-ng-switch-case": "ClinicPatient"
}-->
                                <!--bindings={
  "ng-reflect-ng-switch-case": "CustomFeesSamples"
}-->

                                <!--bindings={
  "ng-reflect-ng-switch-case": "VisaBloodTest"
}--><general-search-visa _ngcontent-c0=""><div class="col-md-12 col-xs-12 marginMenu">


    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="VisitDateFrom">Visit Date From</label>
       
        <div class="col-sm-9">
                                                    <input  type="text" onfocus="(this.type='date')"
                                                    class="form-control fontt" name="from"
                                                    
                                                    placeholder=" Visit Date From ">
                                                    </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="VisitDateTo">Visit Date To</label>
        <div class="col-sm-9">

<input  type="text" onfocus="(this.type='date')"
class="form-control fontt" name="to" 

placeholder="Visit Date To ">

</div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="RefNoFromFrom">Embassy</label>
        <div class="col-sm-9">
            <input class="form-control" value=""    for="AccessionNum" type="text" placeholder="Embassy ">

        </div>
    </div>

    



</div></general-search-visa>

                                <!--bindings={
  "ng-reflect-ng-switch-case": "ClinicArea"
}-->

                                <!--bindings={
  "ng-reflect-ng-switch-case": "FoodHealthArea"
}-->

                                <!--bindings={
  "ng-reflect-ng-switch-case": "ClinicHealthOffice"
}-->
                            </div>

                           <div _ngcontent-c0="" class="sep"></div>
                            <div _ngcontent-c0="" class="col-sm-4 offset-lg-8 search-btn" dir="ltr">
                                <div _ngcontent-c0="" class="col-sm-5"></div>
                                <button _ngcontent-c0="" class="btn btn-primary btn-block" id="LoadRecordsButton" type="button">Search</button>
                                <button _ngcontent-c0="" class="btn btn-primary " id="ClearButton" style="visibility:hidden" type="button">Clear</button>
                            </div>
                        </div>


              


             
            
                        <div _ngcontent-c0="" ng-reflect-ng-switch="VisaBloodTest">
                            
                            <!--bindings={
  "ng-reflect-ng-switch-case": "CustomCustom"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "WaterSampleArea"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "FoodHealthHealthOffice"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "ClinicHealthOffice"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "WaterSampleHealthOffice"
}-->


                            
                            <!--bindings={
  "ng-reflect-ng-switch-case": "VisaBloodTest"
}--><general-table-visablood _ngcontent-c0="" ng-reflect-data="[object Object]">
    
    <div class="panel panel-default">
        
        <table class="table table-striped" ng-reflect-input-data="[object Object]" ng-reflect-rows-on-page="10">
            <thead>
                <tr style="background-color:#000;color:white;">
                    <th style="width: 33%;text-align: center;">
                        <mfdefaultsorter by="Visitdate" ng-reflect-sort-by="Visitdate">
        <a class="text-nowrap" style="cursor: pointer">
            Visit Date
            <!--bindings={
  "ng-reflect-ng-if": "false"
}-->
            <!--bindings={
  "ng-reflect-ng-if": "false"
}-->
        </a></mfdefaultsorter>
                    </th>

                   
                   
                    <th style="width: 33%;text-align: center;">
                        <mfdefaultsorter by="ReportName" ng-reflect-sort-by="ReportName">
         <p><span id="report"  style="cursor:pointer; font-size: 16px; color:white;">Report</span></p>
            <!--bindings={
  "ng-reflect-ng-if": "false"
}-->
            <!--bindings={
  "ng-reflect-ng-if": "false"
}-->
        </mfdefaultsorter>
                    </th>

                </tr>
            </thead>
            <tbody>
                                                                                                      <tr>
                                                       <td style="width: 33%;text-align: center;"></td>



                                                       <td style="width: 33%;text-align: center;">

                                                        
                                                                   <i  style="color: blue;" aria-hidden="true"
                                                                       class="fa fa-file-pdf-o"></i>
                                                               <!-- <a
                                                                   href="https://clabresults.mohp.gov.eg/Result/DownloadReport?uriPath=4&amp;fileName=5359265__0_0_5000705089668_06102021195116.pdf">
                                                                   <i aria-hidden="true"
                                                                       class="fa fa-file-pdf-o"></i></a> -->

                                                           </div>
                                                       </td>

                                                   </tr>
                                                                                                  </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <mfbootstrappaginator ng-reflect-rows-on-page-set="5,10,15">
    <mfpaginator>
        <!--bindings={
  "ng-reflect-ng-if": "false"
}-->
        <!--bindings={
  "ng-reflect-ng-if": "false"
}-->
    </mfpaginator>
    </mfbootstrappaginator>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    
</general-table-visablood>
                            <!--bindings={
  "ng-reflect-ng-switch-case": "Narcotic"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "ClinicPatient"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "Directorate"
}-->

                            <!--bindings={
  "ng-reflect-ng-switch-case": "ClinicVisit"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "ResultVisit"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "CustomFeesSamples"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "ClinicArea"
}-->
                            <!--bindings={
  "ng-reflect-ng-switch-case": "FoodHealthArea"
}-->


                        </div>


        </div>
  

   
    
</div>





</ng-component>
                    </div>
                 </div>
                </user-app>
</div>
    <script src="./generalEn_files/modernizr-2.8.3.js.download"></script>
    <script src="./generalEn_files/modernizr-custom.js.download"></script>
    <script src="./generalEn_files/jquery-1.9.1.min.js.download"></script>
    <script src="./generalEn_files/bootstrap.min.js.download"></script>
    <script src="./generalEn_files/respond.js.download"></script>
<!-- 
    <script src="./generalEn_files/shim.min.js.download"></script>
    <script src="./generalEn_files/zone.min.js.download"></script>
    <script src="./generalEn_files/system.src.js.download"></script> -->

    <!-- <script src="./generalEn_files/systemjs.config.js.download"></script> -->

    <script>
        var CurrentLanguage = "ar";

    </script>
    <script>
        // System.import('app').catch(function (err) { console.error(err); });
    </script>
    <footer class="footer">
        <div class="footer" style="position:fixed">
            <p>
                <script>
                    var date = new Date();
                    var currentYear = date.getFullYear();
                    document.write(currentYear);
                </script>2021 © Central Public Health Laboratories All Rights Reserved<br>
                Developed and Designed By <a target="_blank" href="http://nt-me.com/">National Technology.</a><br>

            </p>
        </div>
    </footer>




</body></html>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Clabs</title>-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">-->
<!--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->

<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- <link href="/path/to/print.css" media="print" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
<!--/*    <style>*/-->
        
<!--/*    input,*/-->
<!--/*    input::-moz-input-placeholder {*/-->
<!--/*    font-size: 40px;*/-->
<!--/*    line-height: 3;*/-->
<!--/*}*/-->
<!--/*    </style>*/-->
<!--    <script>-->
<!--        window.onload = () => {-->
<!--            const queryString = window.location.search;-->
<!--            const urlParams = new URLSearchParams(queryString);-->
<!--            let id = urlParams.get('id');-->
                $("#repor").click(window.open("/report.php?id=" + id));
        //     // const passport = urlParams.get('passport');
        //     // document.getElementById('name').innerHTML = name;
        //     // document.getElementById('passport').innerHTML = passport;
            
            
           
        // // }
        //  $(document).ready(function(){
        //     const mypath = "/show.php?id=" + id;
        //     function closePrint () {
        //         document.body.removeChild(this.__container__);
        //     }
    
        //     function setPrint () {
        //         this.contentWindow.__container__ = this;
        //         this.contentWindow.onbeforeunload = closePrint;
        //         this.contentWindow.onafterprint = closePrint;
        //         this.contentWindow.focus(); // Required for IE
        //         this.contentWindow.print();
        //     }
    
        //     function printPage (sURL) {
        //         var oHideFrame = document.createElement("iframe");
        //         oHideFrame.onload = setPrint;
        //         oHideFrame.style.position = "fixed";
        //         oHideFrame.style.right = "0";
        //         oHideFrame.style.bottom = "0";
        //         oHideFrame.style.width = "0";
        //         oHideFrame.style.height = "0";
        //         oHideFrame.style.border = "0";
        //         oHideFrame.src = sURL;
        //         document.body.appendChild(oHideFrame);
        //     }

<!--            console.log(id);-->
<!--            var report = document.getElementById("report");-->
<!--            report = addEventListener("click", ()=> {-->
<!--                window.open("/report.php?id=" + id);-->
<!--            })-->
            // $("#repor").click(window.open("/report.php?id=" + id));
            
<!--        }-->
<!--    </script>-->
<!--</head>-->
<!--<body>-->
<!--    <div class="container-fluid col-md-12" >-->
        
                    
<!--                    <div class="row justify-content-between">-->
<!--                        <div></div>-->
<!--                      <p class="text-dark " style="margin-left:30px; margin-top:15px; font-size:35px; ">Ministry of health</p>-->
<!--                      <div class="row" style="font-size:42px;">-->
<!--                    <a class=" nav-link text-danger" href="home.html"><i class="fa fa-globe" aria-hidden="true"></i> اللغة العربية</a>-->
<!--                    <a class=" nav-link text-danger" href="home.html"><i class="fa fa-fw fa-home" ></i>Home</a>-->
<!--                        </div>-->
<!--                    </div>-->
            
        
             
    
<!--        <hr style=" border: 2px red solid;;">  -->
        
            <!-- <div class="mb-3"> -->
<!--            <br><br>-->
<!--                <div class="container-fluid col-lg-12   " style="background-color: gainsboro;-->
<!--            color: black;">-->
<!--                <div class="row ">-->
<!--                    <div class="col mycol">-->
<!--                        <img src="images/index.png"  style="width: 150px; margin-top: -150px;" alt="">-->
<!--                        <br>-->
<!--                        <div class="row" style="font-size:32px">-->
<!--                            <p-->
<!--                            >Passport No : </p>-->
<!--                            <p id="passport"><?php echo $passport; ?></p>-->
<!--                        </div>-->
<!--                        <br>-->
<!--                    </div>-->
<!--                </div>-->
            <!-- </div> -->
<!--        </div>-->
<!--        <div class="row" style="font-size:32px">-->
<!--            <p class="text-dark"> &nbsp; Patient Name:</p>-->
<!--            <p id="name"><?php echo $name; ?></p>-->
<!--        </div>-->
<!--        <br><br>-->
<!--        <div class="card text-dark shadow " >-->
<!--            <h1 style="color: rgb(36, 36, 107); font-weight: bold;">-->
<!--                Search-->
<!--                <hr style="border: 2px solid; color: rgb(36, 36, 107);">-->
<!--            </h1>-->
<!--            <div class="card-body" style="height: 400px;">-->
<!--                <form action="">-->
<!--                    <div class="row justify-content: space-between;" style="font-size:32px">-->
<!--                        <div class="col-4 mb-1">-->
<!--                            <label style="font-size:32px" for="formGroupExampleInput2" class="form-label">Visit Date From</label>-->
<!--                            <input onfocus="(this.type='date')" class="form-control" id="formGroupExampleInput2" placeholder="Visit Date From" >                        </div>-->
<!--                            <div class="col-2"></div>-->
<!--                        <div class="col-4 mb-3">-->
<!--                            <label for="formGroupExampleInput2" class="form-label"> Vist Date To </label>-->
<!--                            <input onfocus="(this.type='date')" class="form-control" id="formGroupExampleInput2" placeholder="Vist Date To" >                        </div>-->
<!--                      </div>-->
<!--                      <br><br>-->
<!--                      <div class="row" style="font-size:32px">-->
<!--                        <div class="col-4    mb-2">-->
<!--                          <label class="form-lable" for="">Embassy</label>-->
<!--                          <input type="text" class="form-control" placeholder="Embassy" aria-label="Embassy">-->
<!--                          <br>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      <br>-->
<!--                    </form>-->
<!--                </div>-->
                
<!--            </div>-->
<!--            <br>-->
<!--            <div class="row" style="justify-content: center; font-size:62px">-->
                        
<!--                            <button style="width: 700px; height:100px;" type="submit" class="btn- btn-danger ">-->
<!--                                <p>Search</p>-->
<!--                            </button>-->
<!--                      </div>-->
<!--            <br><br><br>-->
<!--            <div class="container-fluid bg-dark mb-3" style="width:800px; height:100px;">-->
<!--                <div class="row  text-center" >-->
<!--                    <div class="col">-->
<!--                        <button class="btn btn-dark" type="submit"> <p style="font-size:48px"> Visit Date</p></button>-->
<!--                    </div>-->
<!--                    <div class="col">-->
<!--                        <p><span id="report"  style="cursor:pointer; font-size: 52px; color:white;">Report</span></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div  class="row justify-content-end" style="font-size:52px">-->
<!--                <div class="col-3">-->
<!--                    <i class="fa fa-file-pdf-o" style="color: blue;"></i>-->
<!--                </div>-->
<!--            </div>-->
<!--</body> -->
<!--</html>-->