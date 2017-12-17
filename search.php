<?php include('/lib/header.php'); ?>
<div id="maincontainer" class="">
    <table style="width:100%">
        <tr>
            <td style="text-align:left"><h1>Search Result !</h1></td>
            <td style="text-align:right">Search&nbsp;<input type="search" /></td>
        </tr>
    </table>
	<div id="" class="page_content">
<?php
include('/lib/connect.inc.php');
if(isset($_GET['submit'])){
    $search_id = $_GET['search'];
    $query = mysqli_query($conn,"SELECT * FROM posts WHERE title like '%$search_id%' or content like '%$search_id%'");
    if($query== TRUE){
        while($row = mysqli_fetch_array($query)){
            $id = $row['id'];
            $title = $row['title'];
            $image = $row['image'];
            $content = substr($row['content'],0,1000);
?>
<table width="100%">
    <tr>
        <td colspan="2" style="padding-left:5px;"><h2><?php echo $title; ?></h2></td>
    </tr>
    <tr>
        <td style="text-align:center;vertical-align: top;width: 160px;"><img src="images/users/<?php echo $image; ?>" width="150" height="150"></td>
        <td style="text-align:justify;vertical-align: top;padding-left: 15px;"><?php echo $content; ?></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:right; padding-right:15px;"><a href="pages.php?id=<?php echo $id; ?>">Read More..</a></td>
    </tr>
</table>
<?php
        }
    }else{
        echo "<h1>Sorry No Result Found.</h1>";
    }
}
?>
    </div>
<?php include("/lib/sidebar.php"); ?>
<?php include("/lib/footer-upper.php"); ?>
<?php include("/lib/footer-bottom.php"); ?>
