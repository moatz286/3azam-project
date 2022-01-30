<?php
$servername = "localhost";
$dbname= "clabsmvp_clabs";
$username = "clabsmvp_jim";
$password = "uZzGL(h;Uf17";
$id = $_GET['id'];
$eno = "";
$name = "";
$passport = "";
$excenter = "";
$exdate = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM results WHERE id = $id ");
  $stmt->execute();
  foreach($stmt as $row){
      $name = $row['name'];
      $eno = $row['eno'];
      $passport = $row['passport'];
      $excenter = $row['excenter'];
      $exdate = $row['exdate'];
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
// echo "</table>";
?> 

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Clabs</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">-->
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
      <style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
</style>
    <style>
    /*.watermarked::before {*/
    /*position: fixed;*/
    /*top: 16%;*/
    /*left: -75%;*/

    /*display: block;*/
    /*width: 0%;*/
    /*height: 300%;*/

    /* transform: rotate(-45deg); */
    /*content: attr(data-watermark);*/

    /*font-size: 20px;*/
    /*opacity: 0.15;*/
    /*line-height: 4em;*/
    /*letter-spacing: 2px;*/
    /*word-spacing: 4px;*/
    /*color: blue;*/
    /*z-index:-1;*/
    
    /*}*/
         #qrcode {
            position: absolute;
            margin-left: 360px;
            margin-top: 310px;
        }
    
        body {margin-top: 0px;margin-left: 0px;}
        
        #page_1 {position:relative; overflow: hidden;margin: 0px 0px 0px 5px;padding: 0px;border: none;width: 811px;height: 1056px;}
        #page_1 #id1_1 {border:none;margin: 85px 0px 0px 6px;padding: 0px;border:none;width: 805px;overflow: hidden;}
        #page_1 #id1_2 {border:none;margin: 329px 0px 0px 5px;padding: 0px;border:none;width: 797px;overflow: hidden;}
        #page_1 #id1_2 #id1_2_1 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 332px;overflow: hidden;}
        #page_1 #id1_2 #id1_2_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 465px;overflow: hidden;}
        
        #page_1 #p1dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:807px;height:1056px;}
        #page_1 #p1dimg1 #p1img1 {width:807px;height:1056px;}
        
        
        
        
        .dclr {clear:both;float:none;height:1px;margin:0px;padding:0px;overflow:hidden;}
        
        .ft0{font: 15px 'Arial';color: #000080;line-height: 17px;}
        .ft1{font: 15px 'Arial';color: #800000;line-height: 17px;}
        .ft2{font: 13px 'Arial';color: #000080;line-height: 16px;}
        .ft3{font: 13px 'Arial';color: #800000;line-height: 16px;}
        .ft4{font: 16px 'Arial';color: #000080;line-height: 21px;}
        .ft5{font: 1px 'Arial';line-height: 1px;}
        .ft6{font: 17px 'Arial';color: #000080;line-height: 19px;}
        .ft7{font: 1px 'Arial';line-height: 15px;}
        .ft8{font: 16px 'Arial';color: #000080;line-height: 18px;}
        .ft9{font: 1px 'Arial';line-height: 11px;}
        .ft10{font: 1px 'Arial';line-height: 10px;}
        .ft11{font: 1px 'Arial';line-height: 5px;}
        .ft12{font: 1px 'Arial';line-height: 13px;}
        .ft13{font: 1px 'Arial';line-height: 12px;}
        .ft14{font: 1px 'Arial';line-height: 9px;}
        .ft15{font: 1px 'Arial';line-height: 8px;}
        .ft16{font: 15px 'Arial';color: #000080;line-height: 18px;}
        
        .p0{text-align: center;padding-right: 329px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p1{text-align: center;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p2{text-align: center;padding-right: 328px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p3{text-align: center;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p4{text-align: left;padding-left: 298px;padding-right: 318px;margin-top: 2px;margin-bottom: 0px;text-indent: 49px;}
        .p5{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p6{text-align: right;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p7{text-align: left;padding-left: 95px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p8{text-align: left;padding-left: 32px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p9{text-align: center;padding-right: 36px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p10{text-align: right;padding-right: 31px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p11{text-align: left;padding-left: 40px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p12{text-align: left;padding-left: 16px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p13{text-align: left;padding-left: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p14{text-align: center;padding-right: 34px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p15{text-align: left;padding-left: 81px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p16{text-align: left;padding-left: 12px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p17{text-align: right;padding-right: 14px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p18{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p19{text-align: left;padding-left: 65px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p20{text-align: left;padding-left: 37px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p21{text-align: left;padding-left: 60px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
        .p22{text-align: left;padding-left: 76px;margin-top: 111px;margin-bottom: 0px;}
        .p23{text-align: left;margin-top: 0px;margin-bottom: 0px;}
        .p24{text-align: left;padding-left: 137px;padding-right: 4px;margin-top: 0px;margin-bottom: 0px;text-indent: -3px;}
        .p25{text-align: right;margin-top: 0px;margin-bottom: 0px;}
        
        .td0{padding: 0px;margin: 0px;width: 596px;vertical-align: bottom;}
        .td1{padding: 0px;margin: 0px;width: 196px;vertical-align: bottom;}
        .td2{padding: 0px;margin: 0px;width: 402px;vertical-align: bottom;}
        .td3{padding: 0px;margin: 0px;width: 374px;vertical-align: bottom;}
        .td4{border-left: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 105px;vertical-align: bottom;}
        .td5{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
        .td6{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 293px;vertical-align: bottom;}
        .td7{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 69px;vertical-align: bottom;}
        .td8{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 50px;vertical-align: bottom;}
        .td9{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
        .td10{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 42px;vertical-align: bottom;}
        .td11{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 125px;vertical-align: bottom;}
        .td12{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 105px;vertical-align: bottom;}
        .td13{padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
        .td14{padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;}
        .td15{padding: 0px;margin: 0px;width: 118px;vertical-align: bottom;}
        .td16{padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;}
        .td17{padding: 0px;margin: 0px;width: 69px;vertical-align: bottom;}
        .td18{padding: 0px;margin: 0px;width: 50px;vertical-align: bottom;}
        .td19{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
        .td20{padding: 0px;margin: 0px;width: 42px;vertical-align: bottom;}
        .td21{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 125px;vertical-align: bottom;}
        .td22{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 105px;vertical-align: bottom;}
        .td23{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
        .td24{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;}
        .td25{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 118px;vertical-align: bottom;}
        .td26{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;}
        .td27{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 69px;vertical-align: bottom;}
        .td28{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 50px;vertical-align: bottom;}
        .td29{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
        .td30{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 42px;vertical-align: bottom;}
        .td31{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 125px;vertical-align: bottom;}
        .td32{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 145px;vertical-align: bottom;}
        .td33{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 134px;vertical-align: bottom;}
        .td34{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;}
        .td35{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;}
        .td36{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 134px;vertical-align: bottom;}
        .td37{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 109px;vertical-align: bottom;}
        .td38{padding: 0px;margin: 0px;width: 277px;vertical-align: bottom;}
        .td39{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 167px;vertical-align: bottom;}
        .td40{padding: 0px;margin: 0px;width: 106px;vertical-align: bottom;}
        .td41{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 158px;vertical-align: bottom;}
        .td42{padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
        .td43{padding: 0px;margin: 0px;width: 126px;vertical-align: bottom;}
        .td44{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 119px;vertical-align: bottom;}
        .td45{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 103px;vertical-align: bottom;}
        .td46{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 105px;vertical-align: bottom;}
        .td47{border-right: #e0e0e0 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;background: #e0e0e0;}
        .td48{border-right: #e0e0e0 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 134px;vertical-align: bottom;background: #e0e0e0;}
        .td49{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 158px;vertical-align: bottom;background: #e0e0e0;}
        .td50{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 119px;vertical-align: bottom;background: #e0e0e0;}
        .td51{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 102px;vertical-align: bottom;background: #e0e0e0;}
        .td52{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 252px;vertical-align: bottom;}
        .td53{padding: 0px;margin: 0px;width: 119px;vertical-align: bottom;}
        .td54{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
        .td55{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 117px;vertical-align: bottom;}
        .td56{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
        .td57{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 41px;vertical-align: bottom;}
        
        .tr0{height: 23px;}
        .tr1{height: 18px;}
        .tr2{height: 25px;}
        .tr3{height: 30px;}
        .tr4{height: 22px;}
        .tr5{height: 15px;}
        .tr6{height: 29px;}
        .tr7{height: 21px;}
        .tr8{height: 11px;}
        .tr9{height: 10px;}
        .tr10{height: 5px;}
        .tr11{height: 24px;}
        .tr12{height: 20px;}
        .tr13{height: 36px;}
        .tr14{height: 35px;}
        .tr15{height: 13px;}
        .tr16{height: 12px;}
        .tr17{height: 9px;}
        .tr18{height: 8px;}
        
        .t0{width: 792px;font: 13px 'Arial';color: #000080;}
        .t1{width: 776px;margin-left: 11px;margin-top: 10px;font: 15px 'Arial';color: #000080;}
        .t2{width: 787px;margin-left: 3px;font: 15px 'Arial';color: #000080;}
    
    </style>
    <script defer>
        window.onload = () => {
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
    //         console.log(queryString);
            const id = urlParams.get('id');
            // console.log(id);
    //         const name = urlParams.get('name');
    //         const exdate = urlParams.get('exdate');
    //         const passport = urlParams.get('passport');
            
    //         // document.getElementById('name').innerHTML = name;
    //         document.getElementById('eNo').innerHTML = eNo;
    //         document.getElementById('exdate').innerHTML = exdate;
    //         document.getElementById('passport').innerHTML = passport;
    //         // console.log(c);
    //     //     function parse_query_string(query) {
    //     //     var vars = query.split("&");
    //     //     var query_string = {};
    //     //     for (var i = 0; i < vars.length; i++) {
    //     //       var pair = vars[i].split("=");
    //     //       var key = decodeURIComponent(pair[0]);
    //     //       var value = decodeURIComponent(pair[1]);
    //     //     // If first entry with this name
    //     //     if (typeof query_string[key] === "undefined") {
    //     //     query_string[key] = decodeURIComponent(value);
    //     // // If second entry with this name
    //     //     } else if (typeof query_string[key] === "string") {
    //     //     var arr = [query_string[key], decodeURIComponent(value)];
    //     //     query_string[key] = arr;
    //     // // If third or later entry with this name
    //     // } else {
    //     //     query_string[key].push(decodeURIComponent(value));
    //     //     }
        
    //     //     return query_string;
    //     // }
    //     // var query = window.location.search.substring(1);
    //     // var qs = parse_query_string(query);
    //     // console.log(parsed_qs.c);

    //         // document.getElementById('here').innerHTML = c;
    //         // params = url.split('?')[1].split('&'),
    //         // url = {}, tmp;
    //         // for (var i = 0, l = params.length; i < l; i++) {
    //         // tmp = params[i].split('=');
    //         // data[tmp[0]] = tmp[1];
    //     // }
    //     // console.log(data)
    //     // document.getElementById('here').innerHTML = data.name;
            
    //         // fetch("http://localhost:8080/getresult/:id?id="+id).then(
    //         //     function(response) {
    //         //     return response.json();
    //         // }).then(function(data) {
    //         //     console.log(data);
    //         // }
            // );
            const qrcode = new QRCode(document.getElementById('qrcode'), {
            text: "clabs-mvp.com/search.php?id=" + id,
            width: 90,
            height: 90,
            colorDark : '#000',
            colorLight : '#fff',
            correctLevel : QRCode.CorrectLevel.H
            });
            
        }
        
//           () => {
//     var url = document.location.href,
//         params = url.split('?')[1].split('&'),
//         data = {}, tmp;
//      for (var i = 0, l = params.length; i < l; i++) {
//          tmp = params[i].split('=');
//          data[tmp[0]] = tmp[1];
//         }
//         document.getElementById('here').innerHTML = data.name;
// }
    </script>
</head>
<body >
    
    <DIV id="page_1">
        <DIV id="p1dimg1">
       <img src="images/watermarkk.png" alt="" id="p1img1"></DIV>
        
        
        <DIV class="dclr"></DIV>
        <DIV id="id1_1">
        <TABLE cellpadding=0 cellspacing=0 class="t0">
        <TR>
            <TD class="tr0 td0"><P class="p0 ft0">الادارة المركزية للصحة و فروعها</P></TD>
            <TD class="tr0 td1"><P class="p1 ft1">وزارة الصحة و الاسكان</P></TD>
        </TR>
        <TR>
            <TD class="tr1 td0"><P class="p2 ft2">Central Public Health Laboratories&Branches</P></TD>
            <TD class="tr1 td1"><P class="p3 ft3">Ministry of Health and Population</P></TD>
        </TR>
        </TABLE>
        <P class="p4 ft4">شهادة تحليل مسافر Passenger Test Certificate</P>
        <TABLE cellpadding=0 cellspacing=0 class="t1">
        <TR>
            <TD class="tr2 td2"><P class="p5 ft0">E.NO.</P></TD>
            <TD class="tr2 td3"><P class="p5 ft5">&nbsp;</P></TD>
        </TR>
        <TR>
            <TD class="tr0 td2"><P class="p5 ft0">Date Of Birth</P></TD>
            <TD class="tr0 td3"><P class="p6 ft0"> <?php echo $eno; ?> </P></TD>
        </TR>
        </TABLE>
        <TABLE cellpadding=0 cellspacing=0 class="t2">
        <TR>
            <TD class="tr3 td4"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr3 td5"><P class="p5 ft5">&nbsp;</P></TD>
            <TD colspan=3 class="tr3 td6"><P class="p7 ft6"> <?php echo $name; ?> </P></TD>
            <TD class="tr3 td7"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr3 td8"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr3 td9"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr3 td10"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr3 td11"><P class="p8 ft0">الاسـم</P></TD>
        </TR>
        <TR>
            <TD class="tr4 td12"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td13"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td14"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td15"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td16"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td17"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td18"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td19"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td20"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td21"><P class="p9 ft0">Full Name</P></TD>
        </TR>
        <TR>
            <TD class="tr5 td22"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td23"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td24"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td25"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td26"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td27"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td28"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td29"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td30"><P class="p5 ft7">&nbsp;</P></TD>
            <TD class="tr5 td31"><P class="p5 ft7">&nbsp;</P></TD>
        </TR>
        <TR>
            <TD colspan=2 rowspan=2 class="tr6 td32"><P class="p10 ft8"><?php echo $passport; ?></P></TD>
            <TD class="tr1 td33"><P class="p11 ft0">جواز السفر</P></TD>
            <TD class="tr1 td15"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr1 td16"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr1 td17"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr1 td18"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr1 td19"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr1 td20"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr1 td21"><P class="p12 ft0">الرقم القومى</P></TD>
        </TR>
        <TR>
            <TD rowspan=2 class="tr7 td33"><P class="p13 ft0">Passport Number</P></TD>
            <TD class="tr8 td15"><P class="p5 ft9">&nbsp;</P></TD>
            <TD class="tr8 td16"><P class="p5 ft9">&nbsp;</P></TD>
            <TD class="tr8 td17"><P class="p5 ft9">&nbsp;</P></TD>
            <TD class="tr8 td18"><P class="p5 ft9">&nbsp;</P></TD>
            <TD class="tr8 td19"><P class="p5 ft9">&nbsp;</P></TD>
            <TD class="tr8 td20"><P class="p5 ft9">&nbsp;</P></TD>
            <TD rowspan=2 class="tr7 td21"><P class="p14 ft0">ID Number</P></TD>
        </TR>
        <TR>
            <TD class="tr9 td12"><P class="p5 ft10">&nbsp;</P></TD>
            <TD class="tr9 td34"><P class="p5 ft10">&nbsp;</P></TD>
            <TD class="tr9 td15"><P class="p5 ft10">&nbsp;</P></TD>
            <TD class="tr9 td16"><P class="p5 ft10">&nbsp;</P></TD>
            <TD class="tr9 td17"><P class="p5 ft10">&nbsp;</P></TD>
            <TD class="tr9 td18"><P class="p5 ft10">&nbsp;</P></TD>
            <TD class="tr9 td19"><P class="p5 ft10">&nbsp;</P></TD>
            <TD class="tr9 td20"><P class="p5 ft10">&nbsp;</P></TD>
        </TR>
        <TR>
            <TD class="tr10 td22"><P class="p5 ft11">&nbsp;</P></TD>
            <TD class="tr10 td35"><P class="p5 ft11">&nbsp;</P></TD>
            <TD class="tr10 td36"><P class="p5 ft11">&nbsp;</P></TD>
            <TD class="tr10 td25"><P class="p5 ft11">&nbsp;</P></TD>
            <TD colspan=2 class="tr10 td37"><P class="p5 ft11">&nbsp;</P></TD>
            <TD class="tr10 td28"><P class="p5 ft11">&nbsp;</P></TD>
            <TD class="tr10 td29"><P class="p5 ft11">&nbsp;</P></TD>
            <TD class="tr10 td30"><P class="p5 ft11">&nbsp;</P></TD>
            <TD class="tr10 td31"><P class="p5 ft11">&nbsp;</P></TD>
        </TR>
        <TR>
            <TD colspan=2 class="tr11 td32"><P class="p10 ft8">
            <?php echo $exdate; ?>    </P></TD>
            <TD class="tr11 td33"><P class="p8 ft0">تاريخ الفحص</P></TD>
            <TD colspan=4 class="tr11 td38"><P class="p15 ft0">CPHL - الأدارة المركزية للمعامل</P></TD>
            <TD class="tr11 td19"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr11 td20"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr11 td21"><P class="p16 ft0">مركز الفحص</P></TD>
        </TR>
        <TR>
            <TD class="tr12 td22"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td35"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td36"><P class="p17 ft0">Examination Date</P></TD>
            <TD class="tr12 td25"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td26"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td27"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td28"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td29"><P class="p5 ft5">&nbsp;</P></TD>
            <TD colspan=2 class="tr12 td39"><P class="p12 ft0">Examination Center</P></TD>
        </TR>
        <TR>
            <TD class="tr13 td40"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr13 td13"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr13 td14"><P class="p5 ft5">&nbsp;</P></TD>
            <TD colspan=2 class="tr14 td41"><P class="p13 ft0">Examination Result</P></TD>
            <TD class="tr14 td27"><P class="p5 ft8">نتيجة الفحص</P></TD>
            <TD class="tr13 td18"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr13 td42"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr13 td20"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr13 td43"><P class="p5 ft5">&nbsp;</P></TD>
        </TR>
        <TR>
            <TD class="tr15 td40"><P class="p5 ft12">&nbsp;</P></TD>
            <TD class="tr16 td23"><P class="p5 ft13">&nbsp;</P></TD>
            <TD class="tr16 td24"><P class="p5 ft13">&nbsp;</P></TD>
            <TD class="tr16 td25"><P class="p5 ft13">&nbsp;</P></TD>
            <TD class="tr16 td26"><P class="p5 ft13">&nbsp;</P></TD>
            <TD colspan=2 class="tr16 td44"><P class="p5 ft13">&nbsp;</P></TD>
            <TD colspan=2 class="tr16 td45"><P class="p5 ft13">&nbsp;</P></TD>
            <TD class="tr15 td43"><P class="p5 ft12">&nbsp;</P></TD>
        </TR>
        <TR>
            <TD class="tr0 td46"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td47"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr4 td48"><P class="p17 ft0">Test</P></TD>
            <TD colspan=2 class="tr4 td49"><P class="p18 ft0">الفحص</P></TD>
            <TD colspan=2 class="tr4 td50"><P class="p19 ft0">Result</P></TD>
            <TD colspan=2 class="tr4 td51"><P class="p5 ft0"> النتيجة</P></TD>
            <TD class="tr0 td43"><P class="p5 ft5">&nbsp;</P></TD>
        </TR>
        <TR>
            <TD class="tr12 td46"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td13"><P class="p5 ft5">&nbsp;</P></TD>
            <TD colspan=2 class="tr12 td52"><P class="p20 ft0"></P></TD>
            <TD class="tr12 td16"><P class="p5 ft5">&nbsp;</P></TD>
            <TD colspan=2 class="tr12 td53"><P class="p21 ft0">Negative</P></TD>
            <TD class="tr12 td42"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td54"><P class="p5 ft5">&nbsp;</P></TD>
            <TD class="tr12 td43"><P class="p5 ft5">&nbsp;</P></TD>
        </TR>
        <TR>
            <TD class="tr17 td46"><P class="p5 ft14">&nbsp;</P></TD>
            <TD class="tr18 td23"><P class="p5 ft15">&nbsp;</P></TD>
            <TD class="tr18 td24"><P class="p5 ft15">&nbsp;</P></TD>
            <TD class="tr18 td55"><P class="p5 ft15">&nbsp;</P></TD>
            <TD class="tr18 td26"><P class="p5 ft15">&nbsp;</P></TD>
            <TD class="tr18 td27"><P class="p5 ft15">&nbsp;</P></TD>
            <TD class="tr18 td28"><P class="p5 ft15">&nbsp;</P></TD>
            <TD class="tr18 td56"><P class="p5 ft15">&nbsp;</P></TD>
            <TD class="tr18 td57"><P class="p5 ft15">&nbsp;</P></TD>
            <TD class="tr17 td43"><P class="p5 ft14">&nbsp;</P></TD>
        </TR>
        </TABLE>
        <P class="p22 ft8">Signature ,</P>
        </DIV>
        <div id="qrcode"></div>
        <DIV id="id1_2">
            <DIV id="id1_2_1">
            <P class="p23 ft2">Please review the travel requirements of each country in terms of infection status , as a positive analysis may be a reason for preventing you from traveling according to regulations of some countries .</P>
            
            </DIV>
            <!--<div id="id_2_2">-->
                
            <!--</div>-->
            <DIV id="id1_2_2">
            <P class="p24 ft16" style="text-align:right;font: 14px 'Arial';">     
            برجاء مراجعة متطلبات السفر الخاصة بكل دولة من حيث وضع الاصابة حيث قد تكون سببا فى منعك من السفر طبقا لتعليمات  ان ايجابية التحليل بعض الدول
            </P>
            
            <P class="p24 ft16" style="text-align:right"> 
            
            </P>
            <!-- <P class="p25 ft0">.حيثقد تكون سببا فى منعك من السفر طبقا لتعليمات</P> -->
            </DIV>
            </DIV>
            </DIV>
    <!--<div class="watermarked" data-watermark="Egypt مصر"></div>-->
    
   <!-- <div class="container-fluid">-->

   <!-- <div class="row">-->
        
   <!--      <div class="col" style="text-align: center;">-->
   <!--           <img src="images/logo.jpg" width="80px" alt="log">-->
   <!--         <p style="color: red;">-->
   <!--             وزارة الصحة و الاسكان-->
   <!--             <br>-->
   <!--              Minstiry of Health and Puplation-->
   <!--         </p>-->
        
   <!--      </div>-->
    
   <!--     <div class="col" style="text-align: center;">-->
   <!--         <img src="images/Coat_of_arms_of_Egypt_(Official).png" width="60px" alt="logo2">-->
   <!--          <p >-->
   <!--             جمهورية مصر العربية-->
   <!--              <br>-->
   <!--              Republic of Egypt-->
   <!--         </p>-->
        
   <!--     </div>-->
   <!--     <div class="col" style="text-align: center;" >-->
   <!--         <img src="images/index.png" width="80px" alt="" >-->
             
   <!--         <p style="color: blue;">-->
   <!--             الادارة المركزية للمعامل-->
   <!--             <br>-->
   <!--             Central Public Health Laboratories-->
   <!--         </p>-->
   <!--     </div>-->
   <!-- </div>-->
    
   <!-- </div>-->
   <!-- <hr style="border: 2px solid blue; margin-top: -18px;">-->
   <!-- <div class="row text-center" style=" margin-top: -18px;">-->
   <!--     <div class="col" style="color: blue;">-->
   <!--         شهادة تحليل مسافر-->
   <!--         <br>-->
   <!--         <b>Passanger Test Certifcate</b> <hr style="border: 2px solid blue; margin-top: 0;">-->
   <!--     </div>-->
   <!-- </div>-->
   <!-- <div class="row justify-content-between" style="color: blue;">-->
   <!--     <div class="col-1">-->
   <!--         <p id="eNo"><?php echo $eno; ?></p>&nbsp;&nbsp;-->
   <!--     </div>-->
   <!--     <div class="col">-->
   <!--         <p>E.NO</p>-->
   <!--         <p>-->
   <!--             Date of Birth-->
   <!--         </p>-->
   <!--     </div>-->
   <!-- </div>-->
   <!-- <table class="table table-bordered " style="border-color: black;" >-->
   <!--     <tbody style="color: blue; ">-->
   <!--         <tr >-->
   <!--             <td>الاسم <br> Full name</td>-->
   <!--             <td colspan="3" id="name"><?php echo $name; ?> </td>-->
   <!--         </tr>-->
   <!--         <tr>-->
   <!--             <td>الرقم القومي <br> ID Number</td>-->
   <!--             <td></td>-->
   <!--             <td>جواز السفر <br> Passport Number</td>-->
   <!--             <td id="passport"><?php echo $passport; ?></td>-->
   <!--         </tr>-->
   <!--         <tr>-->
   <!--             <td>مركز الفحص <br> Examination Center</td>-->
   <!--             <td><?php echo $excenter; ?></d>-->
   <!--             <td>تاريخ الفحص <br> Examination Date</td>-->
   <!--             <td id="exdate"><?php echo $exdate; ?></td>-->
   <!--         </tr>-->
   <!--     </tbody>-->
   <!-- </table>-->
   <!-- <h4 style="color: blue;">-->
   <!--     <center><u>نتيجة الفحص Examination Result</u></center>-->
   <!-- </h4>-->
   <!-- <div class="row justify-content-center" >-->
   <!--     <div class="col-4">-->
   <!--         <table class="table table-bordered" style="color: blue;">-->
   <!--             <tr>-->
   <!--                 <td class="table-secondary">النتيجة Result</td>-->
   <!--                 <td class="table-secondary">الفحص Test</td>-->
   <!--             </tr>-->
   <!--             <tr>-->
   <!--                 <td>Negative</td>-->
   <!--                 <td>RT-PCR Covid-19</td>-->
   <!--             </tr>-->
   <!--         </table>-->
   <!--     </div>-->
   <!-- </div>-->
   <!-- <br><br>-->
   <!-- <h4 style="color: blue; ">,Signature</h4> -->
   <!-- <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
   <!-- <div class="container-fluid " style="color: blue;">-->
   <!--     <div class="row justify-content-between">-->
   <!--         <div class="col " style="border: 2px solid black;">-->
   <!--             <p style="text-align: right;">برجاء مراجعة متطلبات السفر الخاصة بكل دولة من حيث وضع الاصابة حيث ان ايجابية التحليل (Positive) قد تكون سبباً في منعك من السفر طبقاً لتعليمات بعض الدول.</p>-->
   <!--         </div>-->
   <!--         <div class="col-2">-->
   <!--             <div id="qrcode"></div>-->
   <!--         </div>-->
   <!--         <div class="col " style="border: 2px solid black;">-->
   <!--             <p>-->
   <!--                 Please review the travel requrements of each country in terms of infection status. as a Positive analysis may be a reason for preventing you from traveling according to regulations of some countries.-->
   <!--             </p>-->
   <!--         </div>-->
   <!--     </div>-->
        

   <!--<footer>-->
   <!-- <hr style="border: 3px solid red; margin-top: 5px;">-->
   <!-- <center>-->
   <!--     <p style="color: blue;">www.clabs-mvp.com/home</p>-->
   <!-- </center>-->
   <!-- <hr style="border: 2px solid; margin-top: 0;">-->
   <!-- </div>-->
   <!--</footer>-->
</body>
</html>

<script>
    window.print();
</script>