<?php 
include('upload_process.php');
if($_REQUEST['command']=="command"){
	echo "happen";
	echo $_FILES["file"]["name"];
		if(is_valid_image($_FILES["file"]["name"])){
			echo $_FILES["file"]["name"];
			$rangen=generate_unique_file_name("img",$_FILES["file"]["name"]);
			upload_file("images", $_FILES["file"], $rangen);
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head>



		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<meta name="description" content="" />

		<meta name="keywords" content="" />

		

		<title>admin panel</title>

		<!-- Link shortcut icon-->

		<link rel="shortcut icon" type="image/ico" href="images/favicon2.html" /> 

		<!-- Link css-->

		<link rel="stylesheet" type="text/css" href="css/zice.style.css"/>

		<link rel="stylesheet" type="text/css" href="css/icon.css"/>

		<link rel="stylesheet" type="text/css" href="css/ui-custom.css"/>

		<link rel="stylesheet" type="text/css" href="css/timepicker.css"  />

		<link rel="stylesheet" type="text/css" href="components/colorpicker/css/colorpicker.css"  />

		<link rel="stylesheet" type="text/css" href="components/elfinder/css/elfinder.css" />

		<link rel="stylesheet" type="text/css" href="components/datatables/dataTables.css"  />

		<link rel="stylesheet" type="text/css" href="components/validationEngine/validationEngine.jquery.css" />

		 

		<link rel="stylesheet" type="text/css" href="components/jscrollpane/jscrollpane.css" media="screen" />

		<link rel="stylesheet" type="text/css" href="components/fancybox/jquery.fancybox.css" media="screen" />

		<link rel="stylesheet" type="text/css" href="components/tipsy/tipsy.css" media="all" />

		<link rel="stylesheet" type="text/css" href="components/editor/jquery.cleditor.css"  />

		<link rel="stylesheet" type="text/css" href="components/chosen/chosen.css" />

		<link rel="stylesheet" type="text/css" href="components/confirm/jquery.confirm.css" />

		<link rel="stylesheet" type="text/css" href="components/sourcerer/sourcerer.css"/>

		<link rel="stylesheet" type="text/css" href="components/fullcalendar/fullcalendar.css"/>

		<link rel="stylesheet" type="text/css" href="components/Jcrop/jquery.Jcrop.css"  />

   

		

		<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="components/flot/excanvas.min.js"></script><![endif]-->

		

		<script type="text/javascript" src="js/jquery.min.js"></script>

		<script type="text/javascript" src="components/ui/jquery.ui.min.js"></script> 

		<script type="text/javascript" src="components/ui/jquery.autotab.js"></script>

		<script type="text/javascript" src="components/ui/timepicker.js"></script>

		<script type="text/javascript" src="components/colorpicker/js/colorpicker.js"></script>

		<script type="text/javascript" src="components/checkboxes/iphone.check.js"></script>

		<script type="text/javascript" src="components/elfinder/js/elfinder.full.js"></script>

		<script type="text/javascript" src="components/datatables/dataTables.min.js"></script>

		<script type="text/javascript" src="components/scrolltop/scrolltopcontrol.js"></script>

		<script type="text/javascript" src="components/fancybox/jquery.fancybox.js"></script>

		<script type="text/javascript" src="components/jscrollpane/mousewheel.js"></script>

		<script type="text/javascript" src="components/jscrollpane/mwheelIntent.js"></script>

		<script type="text/javascript" src="components/jscrollpane/jscrollpane.min.js"></script>

		<script type="text/javascript" src="components/spinner/ui.spinner.js"></script>

		<script type="text/javascript" src="components/tipsy/jquery.tipsy.js"></script>

		<script type="text/javascript" src="components/editor/jquery.cleditor.js"></script>

		<script type="text/javascript" src="components/chosen/chosen.js"></script>

		<script type="text/javascript" src="components/confirm/jquery.confirm.js"></script>

		<script type="text/javascript" src="components/validationEngine/jquery.validationEngine.js" ></script>

		<script type="text/javascript" src="components/validationEngine/jquery.validationEngine-en.js" ></script>

		<script type="text/javascript" src="components/vticker/jquery.vticker-min.js"></script>

		<script type="text/javascript" src="components/sourcerer/sourcerer.js"></script>

		<script type="text/javascript" src="components/fullcalendar/fullcalendar.js"></script>

		<script type="text/javascript" src="components/flot/flot.js"></script>

		<script type="text/javascript" src="components/flot/flot.pie.min.js"></script>

		<script type="text/javascript" src="components/flot/flot.resize.min.js"></script>

		<script type="text/javascript" src="components/flot/graphtable.js"></script>



		<script type="text/javascript" src="components/uploadify/swfobject.js"></script>

		<script type="text/javascript" src="components/uploadify/uploadify.js"></script>		

		<script type="text/javascript" src="components/checkboxes/customInput.jquery.js"></script>

		<script type="text/javascript" src="components/effect/jquery-jrumble.js"></script>

		<script type="text/javascript" src="components/filestyle/jquery.filestyle.js" ></script>

		<script type="text/javascript" src="components/placeholder/jquery.placeholder.js" ></script>

		<script type="text/javascript" src="components/Jcrop/jquery.Jcrop.js" ></script>

		<script type="text/javascript" src="components/imgTransform/jquery.transform.js" ></script>

		<script type="text/javascript" src="components/webcam/webcam.js" ></script>

		<script type="text/javascript" src="components/rating_star/rating_star.js"></script>

		<script type="text/javascript" src="components/dualListBox/dualListBox.js"  ></script>

		<script type="text/javascript" src="components/smartWizard/jquery.smartWizard.min.js"></script>

		<script type="text/javascript" src="js/jquery.cookie.js"></script>

		<script type="text/javascript" src="js/zice.custom.js"></script>
        <script type="text/javascript" >
        		$(function(){
								$('#add').click(function(){
												
									
												alert("acha ji");
												$('<div><input name="file" type="file" /><br/></div>').appendTo('#uploadform');
									
									
									});
					
					
					
					
					});
					function sub(){
							$('#command').val("command");
							$('#uploadform').submit();
		
						}
        
        
        
        </script>		

		   

		</head>		

		<body class="dashborad">		

		<div id="alertMessage" class="error"></div> 

					   

					<?php include 'header.php'; ?><!--//  header -->

					   <div id="shadowhead"></div>

			<div id="hide_panel"> 

				  <a class="butAcc" rel="0" id="show_menu"></a>

				  <a class="butAcc" rel="1" id="hide_menu"></a>

				  <a class="butAcc" rel="0" id="show_menu_icon"></a>

				  <a class="butAcc" rel="1" id="hide_menu_icon"></a>

			</div>		   

				   

		 <?php include 'navi.php'; ?>

			

			<div id="content">

				<div class="inner">

					<div class="topcolumn">

						<div class="logo"></div>

							<ul  id="shortcut">

								<li> <a href="#" title="Back To home"> <img src="images/icon/shortcut/home.png" alt="home"/><strong>Home</strong> </a> </li>

								<li> <a href="#" title="Website Graph"> <img src="images/icon/shortcut/graph.png" alt="graph"/><strong>Graph</strong> </a> </li>

								<li> <a href="#" title="Setting" > <img src="images/icon/shortcut/setting.png" alt="setting" /><strong>Setting</strong></a> </li> 

								<li> <a href="#" title="Messages"> <img src="images/icon/shortcut/mail.png" alt="messages" /><strong>Message</strong></a><div class="notification" >10</div></li>

							</ul>

					</div>

					<div class="clear"></div>

					

					<div class="onecolumn" >

						<div class="header"> <span ><span class="ico gray home"></span> Site Interface Settings</span> </div>

						<div class="clear"></div>

						<div class="content" >

							<div class="boxtitle min">Change Slider Images</div>
                            <form id="uploadform" name="img_upload" action="interfacesettings.php" enctype="multipart/form-data">
                            		<div><input type="file" name="file"  /><br /></div>
                                    <div><input type="hidden" name="command" id="command" value=""/></div>
                                    <br />
                                    
                                   
                            </form>
                            <a class="uibutton  icon add"  id="uploadFile" onclick="sub()">upload</a>
                            <div> <a href="#" id="add" >upload More Images</a></div>	
                            
                            
                            

							

							<div class="clear"></div>

						</div>

					</div>

					<!-- // End onecolumn -->

				  <div class="clear"></div>

					<?php include 'footer.php'; ?>

				</div> <!--// End inner -->

			</div> <!--// End content --> 

</body>

</html>