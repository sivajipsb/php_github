<!DOCTYPE >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>My First Grid</title>
 
<!-- <link rel="stylesheet" type="text/css" media="screen" href="css/ui-lightness/jquery-ui-1.7.1.custom.css" /> -->
<!-- <link rel="stylesheet" type="text/css" media="screen" href="css\jquery-ui.css" />
 
<script src="js\jquery.min.js" type="text/javascript"></script>
<script src="js\trirand\i18n\grid.locale-en.js" type="text/javascript"></script>
<script src="js\trirand\src\jquery.jqGrid.js" type="text/javascript"></script> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/css/ui.jqgrid.min.css"> -->

<link rel="stylesheet" href="C:\wamp64\www\jqgrid\css\ui.jqgrid.css">
    <link rel="stylesheet" href="C:\wamp64\www\jqgrid\css\jquery-ui.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="C:\wamp64\www\jqgrid\js\jquery.min.js"></script>
    <script src="C:\wamp64\www\jqgrid\js\trirand\jquery.jqGrid.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/jquery.jqgrid.min.js"></script>  -->
<script type="text/javascript">
    // $(function () {
    //     "use strict";
    //     $("#grid").jqGrid({
    //         colModel: [
    //             { name: "firstName" },
    //             { name: "lastName" }
    //         ],
    $(function () {
jQuery("#list4").jqGrid({
	datatype: "local",
	height: 176,
   	colNames:['id','First_Name', 'Last_Name', 'DOB','Email'],
   	colModel:[
   		{name:'id',index:'id', width:60, sorttype:"int"},
   		{name:'First_Name',index:'First_Name', width:100, sorttype:"date"},
   		{name:'Last_Name',index:'Last_Name', width:100},
   		{name:'DOB',index:'DOB', width:130, align:"right",sorttype:"float"},
   		{name:'Email',index:'email', width:190, align:"right",sorttype:"float"},		
   			
   	],
   	multiselect: true,
   	caption: "Manipulating Array Data"
});
var mydata = [
		{id:"1",First_Name:"sivaji",Last_Name:"panda",DOB:"2007-10-01",Email:"pandasivaji@gmail.com"},
        {id:"1",First_Name:"sivaji",Last_Name:"panda",DOB:"2007-10-01",Email:"pandasivaji@gmail.com"},
        {id:"1",First_Name:"sivaji",Last_Name:"panda",DOB:"2007-10-01",Email:"pandasivaji@gmail.com"},
        {id:"1",First_Name:"sivaji",Last_Name:"panda",DOB:"2007-10-01",Email:"pandasivaji@gmail.com"},
        {id:"1",First_Name:"sivaji",Last_Name:"panda",DOB:"2007-10-01",Email:"pandasivaji@gmail.com"},
        {id:"1",First_Name:"sivaji",Last_Name:"panda",DOB:"2007-10-01",Email:"pandasivaji@gmail.com"},
        {id:"1",First_Name:"sivaji",Last_Name:"panda",DOB:"2007-10-01",Email:"pandasivaji@gmail.com"},
        {id:"1",First_Name:"sivaji",Last_Name:"panda",DOB:"2007-10-01",Email:"pandasivaji@gmail.com"}
		
		];
for(var i=0;i<=mydata.length;i++)
	jQuery("#list4").jqGrid('addRowData',i+1,mydata[i]);
})
</script>
</head>
<body>
<!-- ... -->
<table id="list4"></table>
<!-- hello -->
</body>
</html>
<!-- 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/css/ui.jqgrid.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/jquery.jqgrid.min.js"></script> -->
    