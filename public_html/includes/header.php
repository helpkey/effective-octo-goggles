<!DOCTYPE html>
<!--[if lt IE 9 ]><html lang="ru" class="no-js oldie"><![endif]-->
<!--[if IE 9 ]><html lang="ru" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="ru" class="no-js"><!--<![endif]-->

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php include('includes/pageTegs.php'); ?>
	
	<meta name="keywords" content="" />
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- FontAwesome -->
    <link href="/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Select2 -->
    <link href="/css/select2.css" media="screen" rel="stylesheet" type="text/css" />

	<!-- Core CSS -->
	<link href="/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="/style.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Animate.css -->
    <link href="/css/animate.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Google Charts -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script defer>google.charts.load('current', {'packages':['corechart']});</script>

	<!-- Modernizr Library -->
	<script src="/js/libs/modernizr-3.3.1.min.js"></script>
    
    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39225585 = new Ya.Metrika({ id:39225585, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39225585" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body>
<!--<body style="padding-bottom: 800px;">-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<!-- Page -->
<div id="page" class="page clearfix">
    <?php include('includes/sidebar-left.php'); ?>

    <!-- Content Wrapper -->
    <div class="content-wrapper border-left">
        <!-- Top Banners -->
        <div class="owl-carousel banners-slider">
            <?php
            
            $list = $collectionSlider->find();
            while($theSlider = $list->getNext()){
                echo '
                <div class="item">
                <div class="row">
                    <div class="col-sm-8">
                        '.$theSlider['text'].'
                    </div>

                    <div class="col-sm-4 text-right">
                        <a href="/'.$theSlider['link'].'" class="btn btn-yellow">'.$theSlider['button'].'</a>
                    </div>
                </div>
                </div>';
            }?>
        </div>
        <!--/ Top Banners -->
        
        <!-- Main Content -->
        <main class="content">  