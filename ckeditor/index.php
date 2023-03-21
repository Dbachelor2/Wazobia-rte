<?php 
include "config.php";

// Insert record
if(isset($_POST['submit'])){

  $title = $_POST['title']?$_POST['title']:'This is the title';
  $short_desc = $_POST['short_desc']?$_POST['short_desc']:'';
  $long_desc = $_POST['long_desc'];

  if($title != ''){

    mysqli_query($con, "INSERT INTO contents(title,short_desc,long_desc) VALUES('".$title."','".$short_desc."','".$long_desc."') ");
    header('location: index.php');
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
  <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <title>Integrate CKeditor to HTML page and save to MySQL with PHP</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <!-- CSS -->
    <style type="text/css">
    .cke_textarea_inline{
       border: 1px solid black;
    }
    </style>

    <!-- CKEditor --> 

  </head>
  <body>
    <div style="margin-top:30px; margin-left:15% width:70%; border:0.4px solid lightgrey; border-radius:5px; padding:50px 10px 50px 100px; " class="container">
    <div style="margin:0px auto; padding:10px;">

    <form method='post' action=''>
       <p style="font-weight:bold; margin-right:380px; font-size:18px" contenteditable="true">This is the title </p> 

       <textarea id='long_desc' name='long_desc' style="border:0.3px solid lightgrey" ></textarea><br>
       <input type="submit" style="margin-left:450px; background-color:green"  class="btn btn-success" name="submit" value="Post">
    </form>
  </div>
  </div>
<script src="./ckeditor.js" ></script>
<script type="text/javascript">

// Initialize CKEditor

CKEDITOR.replace('long_desc',{

  width: "500px",
  height: "200px"

}); 

</script>

  </body>
</html>