<!doctype html>
    <head>
        <title></title>
        <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/css/style-mobile.css" rel="stylesheet" type="text/css"/>
        <link href="/css/style-desktop.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../admin/js/ckeditor.js" type="text/javascript"></script>
    </head>
<body>
<!--Top Menu Bar-->
    <div id="top" class="" valign="middle">
        <div style="position: relative; overflow: hidden; color: #2e2e2e; max-width: 96%; margin: 0 auto;">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <div style="display: flex;">
                <?php
                include("/lib/connect.inc.php");
                $recent_posts = mysqli_query($conn,"SELECT * FROM posts order by 1 DESC LIMIT 0,10");
                 while($row = mysqli_fetch_array($recent_posts)){
                        $id = $row['id'];
                        $title = $row['title'];
                        $category = $row['category'];
                        $image = $row['image'];
                        $content = substr($row['content'],0,400);
                        $author = $row['author'];
                        $date = $row['date'];
                ?>
                <div style="padding-top: 3px;margin-right: 5px;"><a href="#" target="_blank" style="text-decoration:none; color:white;"><img src="/images/users/<?php echo $image; ?>" style="height: 40px; width: 40px; border-radius: 20px;"></a></div>
                <div style="padding-top: 15px;margin-right: 20px;"><a href="#" target="_blank" style="text-decoration:none; color:white;"><?php echo $title; ?></a></div>
                <?php }
                ?>
            </div>
        </marquee>
    </div>
    </div>
<!--Header Area-->
    <div id="header" class="">
        <div class="logo" vertical-align="middle"><a href="/"><img src="/images/logo.png" id="logo" alt="Sarkari Results"></a></div>
        <div class="site-info">
            <div class="site-info-title"><h1><a href="/">Sarkari Results</a></h1></div>
            <div class="site-info-discription">Sarkari Results Govt. Jobs, Results, Admit Cards, Admissions, Answer Keys, Syllabus</div>
        </div>
        <div class="ads">Advertisement</div>
    </div>
<!--Main Menu Area-->
    <div id="mainmenu" class="">
        <div id="menu" class="">
        <script>
            if(screen.width>900){
                document.write('<ul>\
                                    <li><a href="/">Home</a></li>\
                                    <li><a href="/results.php">Results</a></li>\
                                    <li><a href="/latest-jobs.php">Latest Jobs</a></li>\
                                    <li><a href="/admit-card.php">Admit Card</a></li>\
                                    <li><a href="/syllabus.php">Syllabus</a></li>\
                                    <li><a href="/admission.php">Admission</a></li>\
                                    <li><a href="/answer-key.php">Answer Key</a></li>\
                                    <li><a href="/certificates.php">Certificates</a></li>\
                                    <li><a href="/specials.php">Specials</a></li>\
                                    <li><a href="/sarkari-yojana.php">Sarkari Yojana</a></li>\
                                </ul>');
            }else{
                    jQuery(document).ready(function($){
                          $("select#top-dropdown").change(function(){
                            window.location.href = $(this).val();
                          });
                    });
                document.write('<select name="top-dropdown" id="top-dropdown">\
                                    <option>Where to?</option>\
                                    <option value="/">Home</option>\
                                    <option value="/results.php">Results</option>\
                                    <option value="/latest-jobs.php">Latest Jobs</option>\
                                    <option value="/admit-card.php">Admit Cards</option>\
                                    <option value="/syllabus.php">Syllabus</option>\
                                    <option value="/admission.php">Admissions</option>\
                                    <option value="/answer-key.php">Answer Keys</option>\
                                    <option value="/certificates.php">Certificates</option>\
                                    <option value="/specials.php">Specials</option>\
                                    <option value="/sarkari-yojana.php">UpComing !</option>\
                                </select>');
            }
        </script>
        </div>
    </div>
