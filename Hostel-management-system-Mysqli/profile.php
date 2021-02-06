<?php
session_start();
//dbms connectivity
require('config.php');

if($_SESSION['user']=="")
{
	header('location:index.php');
}

?>
<html>
<head>
<title>SAKEC HOSTEL</title>
<link rel="stylesheet" type="text/css" href="engine/css/slideshow.css" media="screen" />
	<style type="text/css">.slideshow a#vlb{display:none}</style>
	<script type="text/javascript" src="engine/js/mootools.js"></script>
	<script type="text/javascript" src="engine/js/visualslideshow.js"></script>
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    
    <style type="text/css" media="screen">
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}
#horizontalmenu li
{
float:left;
 position:relative;
 padding-right:89;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
margin-left:20px;
}
#horizontalmenu li ul
 {
display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<table width="1050px" align="center"  border="1">
  <tbody>
    <tr>
      <th height="39" colspan="2" style="background-color:#4E4E4E"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF">SAKEC HOSTEL</a></font></b><marquee direction="left" height="100%">
			Welcome to SAKEC HOSTEL</marquee></div></th>
    </tr>
    <tr>
      <th height="317" colspan="2">
     
      <div id="wowslider-container1">                 
	<div class="ws_images"><ul>
<li><img src="data1/images/bb1.jpg" alt="Welcome Image" title="Welcome Image" id="wows1_0"/></li>
<li><img src="data1/images/bb2.jpg" alt="Hostel" title="Our well organized Hostel" id="wows1_1"/></li>
<li><img src="data1/images/bb3.jpg" alt="Best Overall Experience" title="Best Overall Experience" id="wows1_2"/></li>

</ul></div>


</div></div>
<span class="wsl"></span>
	<a href="#" class="ws_frame"></a>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
    <!--slider end-->
    
      </th>
    </tr>
    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div><a href="index.php" style="text-decoration:none ; color:#010101" id="horizontalmenu li"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME</b></a>
        <a href="profile.php?option=about" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT</b></a>
        <a href="profile.php?option=mfees" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MESS FEES</b></a>
        <a href="profile.php?option=rfees" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROOM FEES</b></a>
  <a href="logout.php" style="text-decoration:none;margin-left:150px;"><input type="submit" value="Logout" name="logout"></a></td>
    </tr>
    <tr>
      <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	$q1= "select regid from users where username= '".$_SESSION['user']."' ";
	$cq1 = mysqli_query($con,$q1);
	$ret = mysqli_num_rows($cq1);
	$row = mysqli_fetch_assoc($cq1);
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
    <html>
	
	<h1><center>Welcome <?php echo $_SESSION['user']; ?></center></h1>
<ul>
	<li><p><left> <font size="+1">Hello! Your Registration code is <?php echo "<u>" .$row["regid"] ."</u>"; ?> </left></font></p></li>
	<li><p><left> <font size="+1">You can now submit your original documents attached with two photos to the office. </left></font></p></li>
	<li><p><left> <font size="+1">If already submitted, room number and other details will be shortly mailed on your registered email-id.</left></font></p></li>
	<li><p><left> <font size="+1">For any query, mail the details to <a href="">info-hostel@sakec.ac.in</left></a></font></p></li>
	<center><img src="images/i1.jpg" alt="NO RAGGING" width="460" height="345"></center>
	<li><p><left><font size="+1">If you see any ragging, immediately inform to the authorities or to the police. <font size="+1"></left></font></p></li>
	
</ul>
    </html>
	<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'regs':
		include('registration.php');
		break;
		case 'login':
		include('login.php');
		break;
        case 'about':
		include('about.php');
		break;
		case 'contact':
		include('contact.php');
		break;
		case 'gallery':
		include('gallery.php');
		break;
		case 'course':
		include ('course.php');
		break;
		case 'mfees':
		include('mfees.php');
		break;
		case 'rfees':
		include('rfees.php');
		break;
		
	}}

	?>
	
      
      </td>
      <td width="343" style="background-color:#468EFF">
      <center><font size="+2"><b style="color:#191B7E"><div style="background-color:#969BFB">College Updates</div><br></b></font></center>
      	<marquee direction="up" height="100%" onMouseOver="this.stop();" onMouseOut="this.start();">
			<center><a href="" style="text-decoration:none"><font size="+1"><b>Campus Drive</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>News</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Sports Fest</b></font></a></center><br>
         
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Admission 2019-20</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Placement List</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Weekend Events</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Notice Board</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Summer Vacation</b></font></a></center><br>
   
            <center><a href="index.php?option=course" style="text-decoration:none"><font size="+1"><b>Courses Offered</b></font></a></center><br>
            <center><a href="index.php?option=gallery" style="text-decoration:none"><font size="+1"><b>Gallery</b></font></a></center><br>
		</marquee>
      </td>
    </tr>
   
  </tbody>
</table>
</html>