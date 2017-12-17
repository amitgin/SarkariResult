<!--Main Content Area-->
<div id="maincontainer" class="">
    <div id="" class="home-page-content">
        <div id="" class="row">
            <div id="" class="row-cols">
                <div id="" class="row-cols-head"><a href="#" style="">Latest Job</a></div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Latest Jobs' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
            <div id="" class="row-cols">
                <div id="" class="row-cols-head">Admit Card</div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Admit Card' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
            <div id="" class="row-cols">
                <div id="" class="row-cols-head">Results</div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Results' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
        </div>
        <div id="" class="row">
            <div id="" class="row-cols">
                <div id="" class="row-cols-head">Answer Key</div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Answer Key' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
            <div id="" class="row-cols">
                <div id="" class="row-cols-head">Syllabus</div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Syllabus' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
            <div id="" class="row-cols">
                <div id="" class="row-cols-head">Admissions</div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Admissions' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
        </div>
        <div id="" class="row">
            <div id="" class="row-cols">
                <div id="" class="row-cols-head">Certificates</div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Certificates' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
            <div id="" class="row-cols">
                <div id="" class="row-cols-head">Specials</div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Specials' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
            <div id="" class="row-cols">
                <div id="" class="row-cols-head">Sarkari Yojna !</div>
                <div>
                    <ul>
                    <?php
                        include("connect.inc.php");
                        $query = mysqli_query($conn,"SELECT * FROM posts WHERE category = 'Sarkari Yojana' order by 1 desc");
                        while($row = mysqli_fetch_array($query))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                        ?>
                        <li><a target="_blank" href="pages.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                        <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="" class="more"><a href="#">more..</a></div>
            </div>
        </div>
    </div>
</div>
