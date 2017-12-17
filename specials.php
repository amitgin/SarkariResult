<?php include("/lib/header.php"); ?>
<div id="maincontainer" class="">
    <table style="width:100%">
        <tr>
            <td style="text-align:left"><h1>Specials !</h1></td>
            <td style="text-align:right">Search&nbsp;<input type="search" /></td>
        </tr>
    </table>
	<div id="" class="page_content">
		<ul>
        <?php
            include("/lib/connect.inc.php");
            $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Specials' order by 1 desc");
            while($row = mysqli_fetch_array($query))
            {
                $title = $row['title'];
            ?>
            <li><?php echo $title; ?></li>
            <?php
            }
        ?>
        </ul>
	</div>

<?php include("/lib/sidebar.php"); ?>
<?php include("/lib/footer-upper.php"); ?>
<?php include("/lib/footer-bottom.php"); ?>
