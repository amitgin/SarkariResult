<?php include("../lib/header.php") ?>
<script src="../tinymce/js/tinymce/tinymce.min.js"></script>
<div id="maincontainer" class="">
    <form class="form" action="" id="contact" method='POST' enctype="multipart/form-data" onsubmit="return validateform()">
	<input type="hidden" name="action" value="signUpDone" />
    <table align="center" border="10" style="width:100%;">
        <tr><td colspan="2"><h1>Insert New Post Here.</h1></td></tr>
        <tr><td>Title</td><td><input type="text" name="title" style="width:100%;"></td></tr>
        <tr><td>Author</td><td><input type="text" name="author" style="width:100%;"></td></tr>
        <tr>
            <td>Category</td>
            <td>
                <input type="checkbox" name="category" value="Latest Jobs">Latest Jobs
                <input type="checkbox" name="category" value="Admit Card">Admit Card
                <input type="checkbox" name="category" value="Results">Results
                <input type="checkbox" name="category" value="Answer Key">Answer Key
                <input type="checkbox" name="category" value="Syllabus">Syllabus
                <input type="checkbox" name="category" value="Admissions">Admissions
                <input type="checkbox" name="category" value="Certificates">Certificates
                <input type="checkbox" name="category" value="Specials">Specials
                <input type="checkbox" name="category" value="Sarkari Yojana">Sarkari Yojana
            </td>
        </tr>
        <tr><td>Image</td><td><input type="file" name="image" style="width:100%;"></td></tr>
        <tr>
            <td>Content</td>
            <td>
                <textarea type="text" id="content" name="content" style="width:98%;"></textarea>
                <script>
                    tinymce.init({
                        selector: '#content',
                        height: 250,
                        theme: 'modern',
                        plugins: [
                            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                            'searchreplace wordcount visualblocks visualchars code fullscreen',
                            'insertdatetime media nonbreaking save table contextmenu directionality',
                            'emoticons template paste textcolor colorpicker textpattern imagetools'
                        ],
                        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                        toolbar2: 'print preview media | forecolor backcolor emoticons',
                        image_advtab: true
                    });
                </script>
            </td></tr>
        <tr><td colspan="2" style="text-align:center;"><input type="submit" value="submit"></td></tr>
    </table>
    </form>
</div>
<?php include("../lib/footer-bottom.php") ?>
<?php
    include("../lib/connect.inc.php");
    if(isset($_POST['action'])){
        $post_title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $content = $_POST['content'];
        $date = date('y.m.d');
        $image_name = $_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];
        $image_tmp = $_FILES['image']['tmp_name'];

        if($post_title=='' or $author=='' or $category=='' or $content=='')
        {
            echo("<script>alert('Fill All The firelds')</script>");
            exit();
        }else{
            if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/gif")
        {
            if($image_size<=100000)
            {
                move_uploaded_file($image_tmp,"../images/users/$image_name");
            }
            else
            {
                echo("<script>alert('Larger Image, Only 100 kb file size is valid.')</script>");
            }
        }
        else
        {
            echo("<script>alert('Invalid file type.')</script>");
        }
            $query = "INSERT INTO posts (title,author,image,category,content,date) VALUES ('$post_title','$author','$image_name','$category','$content','$date')";
            if(mysqli_query($conn,$query))
            {
                echo "<h1>Post Submitted</h1>";
            }
            else
            {
                echo "<h1>Post not Submitted</h1>";
            }
        }
    }
?>
