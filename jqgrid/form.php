

<!DOCTYPE >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>My First Grid</title>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/css/ui.jqgrid.min.css"> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/jquery.jqgrid.min.js"></script> 
<!-- <link rel="stylesheet" href="C:\wamp64\www\jqgrid\css\ui.jqgrid.css">
    <link rel="stylesheet" href="C:\wamp64\www\jqgrid\css\jquery-ui.css"> -->
   
    <!-- <script src="C:\wamp64\www\jqgrid\js\jquery.min.js"></script>
    <script src="C:\wamp64\www\jqgrid\js\trirand\jquery.jqGrid.min.js"></script> -->
    
   
   
<script type="text/javascript">
    
    (function () {
        jQuery("#list3").jqGrid({
   	url:"server.php",
	datatype: "json",
	mtype: "POST",
    colNames:['id','First_Name', 'Last_Name', 'DOB','Email'],
   	colModel:[
   		{name:'id',index:'id', width:60, sorttype:"int"},
   		{name:'First_Name',index:'First_Name', width:100, sorttype:"date"},
   		{name:'Last_Name',index:'Last_Name', width:100},
   		{name:'DOB',index:'DOB', width:130, align:"right",sorttype:"float"},
   		{name:'Email',index:'email', width:190, align:"right",sorttype:"float"},		
   			
   	],
   	rowNum:20,
   	rowList:[10,20,30],
   	pager: '#pager3',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    loadonce: true,
    caption: "User Details"
});
})
</script>
</head>
<body>


<table id="list3"></table>
<div id="pager3"></div>




</body>
</html>
