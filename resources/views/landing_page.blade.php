<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JVN Tracking</title>
    <style>
        .cream {
            background: #FFFDD0;
        }
    </style>
</head>
<body class="justify-center items-center w-full scroll-smooth">
    <!--header-->
    <header class="flex flex-col fixed top-0 z-50 w-full" id="header_frame">
        <div class="flex justify-between px-4 py-2 bg-neutral-200 h-11"></div>
        <div class="flex justify-between px-4 py-2 bg-sky-600 h-11"></div>
    </header>
    <!--header ends here-->
    
    <!--content-->
    <div class="py-96"></div>
    <div class="py-96"></div>
    <div class="py-96"></div>
    <div class="py-96"></div>
    <div class="py-96"></div>
    <!--content ends here-->
</body>

<!--script-->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script>
    jQuery(document).ready(function() {
        jQuery(document).on("scroll", function() {
            if (jQuery(document).scrollTop() > 0) {
                $("#header_frame").css('opacity', '0.8');
            }
            else {
                $("#header_frame").css('opacity', '1');
            }
            
        })
    });
</script>
<!--script ends here-->
</html>