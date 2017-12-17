<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Responsive vertical menu navigation</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>Brand</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
                <a href="/admin/">
				<i class="fa fa-tachometer"></i>
				<span>Brand</span>
                </a>
			</div>
			<nav>
				<ul>
					<li class="active">
						<a href="index.php?analytics=analytics">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Analytics</span>
						</a>
					</li>
					<li class="">
						<a href="index.php?view=view">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>All Post</span>
						</a>
					</li>
                    <li>
						<a href="new-post.php">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>New Post</span>
						</a>
					</li>
                    <li>
						<a href="index.php?users=users">
							<span><i class="fa fa-user"></i></span>
							<span>Users</span>
						</a>
					</li>
					<li>
						<a href="#">

							<span><i class="fa fa-envelope"></i></span>
							<span>Messages</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Payments</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div id="" class="">
                <?php
                include("../lib/connect.inc.php");
                $i = 1;
                if(isset($_GET['view'])){
                    ?>
                <table width="100%" align="center" border="1px">
                    <tr>
                        <td align="center" colspan="9" bgcolor="#FF9900"><h2>View All Posts</h2></td>
                    </tr>
                    <tr>
                        <th>S.N.</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM posts order by 1 DESC");
                    while($row = mysqli_fetch_array($query)){
                        $id = $row['id'];
                        $title = $row['title'];
                        $category = $row['category'];
                        $image = $row['image'];
                        $content = substr($row['content'],0,400);
                        $author = $row['author'];
                        $date = $row['date'];
                        ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $title; ?></td>
                        <td><?php echo $category; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $author; ?></td>
                        <td><center><img src="../images/users/<?php echo $image;?>" width="50" height="50" /></center></td>
                        <td><?php echo $content; ?></td>
                        <td><a href="edit.php?edit=<?php echo $id; ?>">Edit</a></td>
                        <td><a href="delete.php">Delete</a></td>
                    </tr>
                <?php }
                }
                ?>
                    </table>
                </div>
            <div id="" class="">
                <?php
                include("../lib/connect.inc.php");
                $i = 1;
                if(isset($_GET['users'])){
                    echo "<h1>Amit Gautam</h1>";
                }
                ?>
            </div>
            <div id="" class="">
                <?php
                include("../lib/connect.inc.php");
                $i = 1;
                if(isset($_GET['analytics'])){
                ?>
                <div class="title">
                    Analytics
</div>
                <div class="main">
				<div class="widget">
					<div class="title">Number of views</div>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title">Number of likes</div>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title">Number of comments</div>
					<div class="chart"></div>
				</div>
                </div>
                <?php
                }
                ?>
            </div>
		</div>
	</body>
</html>
