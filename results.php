<?php include("/lib/header.php"); ?>
<div id="maincontainer" class="">
    <table style="width:100%">
        <tr>
            <td style="text-align:left"><h1>Results !</h1></td>
            <td style="text-align:right">
                <form action="search.php" method="get">
                    <input type="search" name="search" placeholder="Search This Site" />
                    <input type="submit" name="submit" value="Search" />
                </form>
            </td>
        </tr>
    </table>
	<div id="" class="page_content">
		<ul>
        <?php
            include("/lib/connect.inc.php");
            $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Results' order by 1 desc");
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
