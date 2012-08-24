<?php require_once('../Connections/connection.php'); 
include('upload_process.php');
$query_string1="SELECT b.title,b.author,b.format from book b where status='1'";
	$query1=mysql_query($query_string1);
	if($_REQUEST['command']=="command"){
		if(is_valid_file($_FILES["file"]["name"])){
			$rangen=generate_unique_file_name("img",$_FILES["file"]["name"]);
			upload_file("media/useruploads", $_FILES["file"], $rangen);
	}
		$booktitle=$_POST['booktitle'];
	$author=$_POST['authorname'];
	$price=$_POST['bookprise'];
	$isbn=$_POST['bookisbn'];
	$ustax=$_POST['ustax'];
	$des=$_POST['editor2'];
	$fmt=get_extension($_FILES["file"]["name"]);
	echo $fmt;
	echo $filepath="media/useruploads/".$rangen;
	$query_string="insert into book(author_id,title,author,isbn,us_tax,description,price,format,file,status) values(1,'$booktitle','$author','$isbn','$ustax','$des','$price','$fmt','$filepath',1)";
	$query=mysql_query($query_string);
	if($query){
				echo $msg="Sucessfull";
	}else{
				echo $msg="fail";
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
	<script type="text/javascript" src="components/datatables/ColVis.js"></script>
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
    <script type="text/javascript">
    function sub(){
		$('#command').val("command");
		$('#add_book').submit();
		
	}
    
    </script>	

 
</head>
<body class="dashborad">
	<div id="alertMessage" class="error"></div>  
	<?php include 'header.php'; ?> <!--//  header -->
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
				  <div class="header"><span ><span class="ico  gray connect"></span>Add & Delete pdf Books</span> </div><!-- End header -->	
				  <div class="clear"></div>
				  <div class="content" >
				  
					  <div id="uploadTab">
					  <ul class="tabs" > 
						  <li ><a href="#tab2"  id="3"  >  Delete Pdf Book </a></li>			
					</ul>
					<div class="tab_container" >

						  
						  <div id="tab2" class="tab_content"> 
							  <div class="load_page">
							  <ul class="uibutton-group">
									<li><span class="tip"><a class="uibutton icon add on_load"  name="#tab1"  title="Click Add Product">Add pdf Book</a></span></li>
									<li><a class="uibutton special DeleteAll"  >Delete All</a></li>
							  </ul>
							  <form class="tableName toolbar">

							  <h3>Table Name</h3>
							  <table class="display data_table2 " id="data_table">
								<thead>
								  <tr>
									<th width="35" ><input type="checkbox" id="checkAll1"  class="checkAll"/></th>
									<th width="352" align="left">Book Name</th>
									<th width="174" >Author Name</th>
									<th width="246" >Book Format</th>
									<th width="199" >Management</th>
								  </tr>
								</thead>
								<tbody>
                                <?php $i=1; ?>
							  <?php while($row=mysql_fetch_array($query1)){?>
								  <tr>
									<td  width="35" ><input type="checkbox" name="checkbox[]" class="chkbox" id="check<?php echo $i;?>" /></td>
									<td  align="left"><?php echo $row['title'];?></td>
									<td ><?php echo $row['author'];?></td>
									<td ><?php echo $row['format'];?></td>
									<td >
									  <span class="tip" >
										  <a  title="Edit" >
											  <img src="images/icon/icon_edit.png" >
										  </a>
									  </span> 
									  <span class="tip" >
										  <a id="1" class="Delete"  name="Band ring" title="Delete"  >
											  <img src="images/icon/icon_delete.png" >
										  </a>
									  </span> 
										</td>
								  </tr>
                                  
                                  <?php $i=$i+1;}?>

								  
								</tbody>
							  </table>
							  </form>
							  </div>	
							 <div class="show_add" style=" display:none">
							  <ul class="uibutton-group" >
								<li><span class="tip"><a class="uibutton icon prev on_prev "  id="on_prev_pro" name="#tab2" onClick="jQuery('#validation_demo').validationEngine('hideAll')" title="Go Back" >demo pages</a></span></li>
							   
							  </ul>
							   <div class="onecolumn" >
						<div class="header"> <span ><span class="ico gray software24 "></span> Add pdf Book</span></div>
						<div class="clear"></div>
						<div class="content" >
						<div class="boxtitle"> <span class="ico gray upload2 "></span> Add pdf Book</div>		
						<form name="add_book" id="add_book" action="pdfbook.php" method="post" enctype="multipart/form-data"> 
						   <div class="section">

								  <label> Book Title <small>Text custom</small></label>   

								  <div> <input type="text" name="booktitle" class=" medium" /><span class="f_help">Text custom help</span></div>

								  

							 </div>

							 <div class="section">

								  <label> Author Name <small>Text custom</small></label>   

								  <div> <input type="text" name="authorname"  class=" medium" /><span class="f_help">Text custom help</span></div>

								  

							 </div>

							 <div class="section">

								  <label> Price<small>Text custom</small></label>   

								  <div> <input type="text" name="bookprise" class=" medium" /><span class="f_help">Text custom help</span></div>

								  

							 </div>
                             
						   <div class="section">

								  <label> Book Isbn <small>Text custom</small></label>   

								  <div> <input type="text" name="bookisbn" class=" medium" /><span class="f_help">Text custom help</span></div>

								  

							 </div>
                             
						   <div class="section">

								  <label> US-Tax Id<small>Text custom</small></label>   

								  <div> <input type="text" name="ustax" class=" medium" /><span class="f_help">Text custom help</span></div>

								  

							 </div>

						<div > <textarea name="editor2" id="editor2"  class="editor" cols="" rows=""></textarea></div><br />
                        <div><input type="hidden" name="command" id="command" value=""/></div>
						<div>
							  <div class="demo-box">
							  <div style="border:#fafafa 20px solid;">
								<div id="custom-queue" class="custom-queue"></div>
							  </div>
							  </div>
							  <div id="uploadButton">
									<div id="uploadify"></div>
							  </div>
							  <div id="uploadButtondisable"></div>
							  <div class="upload-group">
				  				<div  class="grid1">

         							<div>
										<input type="file" name="file"/>
									</div>

      							 </div>
				  <!--<a href="javascript:$('#uploadify').uploadifyClearQueue();" class="uibutton disable" id="upload_c">clear file</a>	-->
								  <a class="uibutton  icon add"  id="uploadFile" onclick="sub()">upload</a>			
								  <span id="status-message"></span>
							  </div>
						</div>
						</form>
						</div>
						</div>
				 
							 </div>	
						  </div><!--tab2-->
						  
				  </div>
				  </div><!--/END TAB/-->
				  <div class="clear"/></div>				  
				  </div>
				  </div>

										   

					<div class="clear"></div>
					<?php include 'footer.php'; ?>
				</div> <!--// End inner -->
			</div> <!--// End content --> 
</body>
</html>
