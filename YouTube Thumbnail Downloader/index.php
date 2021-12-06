<?php
// if(isset($_POST['downloaded'])){
//     $img=$_POST['mass'];
//     $ch=curl_init($img)
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER,1)
//     $download= curl_exec($ch)
//     header()
// }
echo "Hello all"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Thumbnail Downloader</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
       <div class="header">Thumbnail Downloader</div>
       <div class="inputnam-field">
        <span class="title">Enter the YouTube URL</span>
        <div class="inp">
        <input type="text" class="inputt" required placeholder="Enter a valid url">
        <input type="hidden" name="mass" class="hidden-input">
       </div>
        <div class="bottom"></div>
       </div>
       <div class="submit">
           <img class="example" src="https://i.ytimg.com/vi/cEmlaDsK7GQ/maxresdefault.jpg" alt="">
        <i class="fa fa-download icon"></i>
         <span class="paste">Paste the URL to preview</span>
       </div>
       <button class="btn-sub" name="downloaded" type="submit">Download Thumbnail</button>
   </form> 
   <script src="script.js">
   </script>
</body>
</html>