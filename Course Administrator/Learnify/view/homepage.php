<!Doctype html>
<html lang = "en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Home Page</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous">
</script>
</head>
<body>
    <div class="gallery">
        <img class="gallery_pic" src="assets/images/img-1.jpg" alt=""/>
        <button class="btn" ><a href="index.php">Get Started</button></div>
             
        
<script>
    let images_array=['assets/images/img-1.jpg',
    'assets/images/img-2.jpg',
    'assets/images/img-3.jpg',
    'assets/images/img-4.jpg'
    ];
    let pic =$(".gallery_pic");
    let i=0;
    setInterval(function()
{
    i=(i+1)%images_array.length
    $(document).ready(function()
    {
        pic.fadeOut(1000,()=>{
            pic.attr("src",images_array[i]);
            pic.fadeIn(1000);
        });
     });
   
    }, 3000);
    
</script>
</body>
</html>