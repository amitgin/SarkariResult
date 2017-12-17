<?php include("/lib/header.php"); ?>
<div id="maincontainer" class="">
	<div id="" class="page_content">
		<?php
        include("/lib/connect.inc.php");
        $pageid = $_GET['id'];
        $query = mysqli_query($conn,"SELECT * FROM posts where id = $pageid");
        if($query== true){
            while($row = mysqli_fetch_array($query)){
                $id = $row['id'];
                $title = $row['title'];
                $image = $row['image'];
                $content = $row['content'];
        ?>
        <table style="width:100%">
            <tr>
                <td><h1><?php echo $title; ?></h1></td>
            </tr>
            <tr>
                <td style="text-align:justify;"><?php echo $content; ?></td>
            </tr>
        </table>
        <?php
            }
        }

        ?>
	</div>
<?php include("/lib/sidebar.php"); ?>
<?php include("/lib/socialShare.php"); ?>
<?php include("/lib/footer-upper.php"); ?>
<?php include("/lib/footer-bottom.php"); ?>
