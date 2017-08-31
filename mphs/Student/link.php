    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<link rel="shortcut icon" href="../images/portalLogo.png">
	<style>
	/* Box styles */
	.myBox {
		border: none;
		padding: 5px;
		font: 24px/36px sans-serif;
		width: 200px;
		height: 200px;
		overflow: scroll;
	}

	/* Scrollbar styles */
	::-webkit-scrollbar {
		width: 12px;
		height: 12px;
	}

	::-webkit-scrollbar-track {
		box-shadow: inset 0 0 10px olivedrab;
		border-radius: 10px;
	}

	::-webkit-scrollbar-thumb {
		border-radius: 10px;
		background: gray; 
		box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
	}

	::-webkit-scrollbar-thumb:hover {
		background: #1c1c1c;
	}
    .user-section {
        font-size:22px;
        background-color:rgb(83, 163, 163);
    }
	.postname {
		border-left: 2px solid;
		border-right: 2px solid;
		border-top: 2px solid;
		border-bottom: 1px solid;
    	border-top-left-radius: 5px;
    	border-top-right-radius: 5px;
		background-color: #ecf0f1;
	}
	.posttxt {
		border-left: 2px solid;
		border-right: 2px solid;
		border-top: 1px solid;
		border-bottom: 2px solid;
    	border-bottom-left-radius: 5px;
    	border-bottom-right-radius: 5px;
		background-color: #ecf0f1;
	}
	.post {
		width: 635px;
		border-style: ridge groove outset;
		border-radius: 10px;
    	background-color: #bdc3c7;
    	border-color: #999;
    }
    .settings {
    	width: 710px;
		border: 1px solid;
		border-radius: 10px;
	    background-color: #7f8c8d;
	    border-color: #999;
    }
   	.user-section {
    	font-size:22px;
    	background-color:rgb(83, 163, 163);
	}
	.sidepost {
        right: 0;
        margin-right: 50px;
		position: absolute;
	}
	.sidepost2 {
        right: 0;
		position: absolute;
		margin-top: 125px;
        margin-right: 50px;
	}
	.sidepost3 {
		right: 0;
		position: absolute;
		margin-top: 230px;
        margin-right: 50px;
	}
	div.sp1-1 {
		width: 280px;
		border: 4px;
		border-style: groove ridge outset;
		border-radius: 5px;
    	background-color: #89C4F4;
    	border-color: #999;
    }
    .sp1-2 {
		border-left: 2px solid;
		border-right: 2px solid;
		border-top: 2px solid;
		border-bottom: 1px solid;
    	border-top-left-radius: 5px;
    	border-top-right-radius: 5px;
		background-color: #ecf0f1;
	}
	.sp1-3 {
		border-left: 2px solid;
		border-right: 2px solid;
		border-top: 1px solid;
		border-bottom: 2px solid;
    	border-bottom-left-radius: 5px;
    	border-bottom-right-radius: 5px;
		background-color: #ecf0f1;
	}
	.gototop {
		position: fixed;
        right: 0;
		bottom: 0;
		margin: 15px;
		padding: 15px;
		background: #3498db;
		border-radius: 50px;
	}
	.gototop i{
		line-height: 0.5em;
		color: #fff;
	}
	.gototop i:hover {
		color: #000;
	}
    .txtpost {
        overflow:hidden;
        font-size:14px;
        border-radius:30px;
        resize: none;
        padding: 12px;
        height: 45px;
        width: 638px;
        outline: none;
        border: 2px solid #22A7F0;
    }
    .txtpost::-webkit-input-placeholder {
        color: #22A7F0;
    }
    .txtfeedback{
        overflow:hidden;
        height: 100px;
        font-size:14px;
        width: 238px;
        resize: none;
        outline: none;
    }
	.sendpost {
        border-color: #22A7F0;
        border-radius: 50px;
        border-style: groove ridge outset;
        background-color: #59ABE3;
    }
    .sendpost:hover {
        border-color: #22A7F0;
        border-radius: 50px;
        border-style: groove ridge outset;
        background-color: #89C4F4;
    }
    .txtpost:focus::-webkit-input-placeholder {
        color: #999;
    }
    .msgs tr, .msgs th, .msgs td {
        padding: 5px;
        border: 1px solid;
        text-align: center;
    }
    .left
    {
        text-align:left;
    }
    .messages_table td
    {
        border-top:2px solid #aaaaaa;
        vertical-align:top;
    }
    table
    {
        border-spacing:0px;
        background:#ffffff;
        border-radius:10px;
        padding:0px;
        width:95%;
        margin:5px auto 5px auto;
    }
    .author
    {
        width:150px;
        border-right:2px solid #aaaaaa;
        text-align: center;
    }
    .center
    {
        text-align:center;
    }
    .content
    {
        width:65%;
        border-radius:20px;
        margin:auto;
        padding:20px;
        margin-top:20px;
        text-align: center;
    }
    .message
    {
        border-radius:20px;
        padding:20px;
        margin:auto;
        width:500px;
        color:#ffffff;
        text-align:center;
        font-weight:bold;
        margin-top:20px;
    }
    .date
    {
        font-style:italic;
        text-align:right;
        font-size:0.9em;
        margin-right:10px;
    }
	</style>
	<!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
	
	<!-- Page-Level Plugin Scripts-->
    <script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/scripts/dashboard-demo.js"></script>
	
	<!-- Table -->
	<script type="text/javascript" src="../assets/datatables.min.js"></script>
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
    function myFocus(o){
        if(o.value.length<1)
        {
            $("#sendpost").show();
            $(o).animate({'height':'90px'},200);
        }
        else
        {
            $("#sendpost").show();
            o.style.height = "92px";
            o.style.height = (2+o.scrollHeight)+"px";
        }
    }
    function myBlur(o){
        if(o.value.length<1)
        {
            $("#sendpost").hide();
            $(o).animate({'height':'45px'},200);
        }
        else
        {
            $("#sendpost").show();
            o.style.height = "92px";
            o.style.height = (2+o.scrollHeight)+"px";
        }
    }
    function textAreaAdjust(o) {
        o.style.height = "92px";
        o.style.height = (2+o.scrollHeight)+"px";
    }
    function textFeedbackAdjust(o) {
        o.style.height = "100px";
        o.style.height = (2+o.scrollHeight)+"px";
    }
    function onLoadPage(){
        $("#sendpost").hide();
    }
    function doCheck(){
        var allFilled = true;
        $('textarea#txtpost').each(function(){
            if($(this).val() == ''){
                allFilled = false;
                return false;
            }
        });
        $('input[type=submit]').prop('disabled', !allFilled);
		}

		$(document).ready(function(){
			$("textarea#txtpost").keyup(doCheck).focusout(doCheck);
		});
    </script>