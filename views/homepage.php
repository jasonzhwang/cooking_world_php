<!DOCTYPE html>
<html>
<head>
    <?php include "default_head_resource.html"?>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i,800" rel="stylesheet">
    <title>Cooking World</title>
</head>
<body>
<?php include "user_nav_bar.php"?>
<?php include "logo_banner.php" ?>
<!-- carousel starts -->
<div id="homeCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php
            for($i=0;$i<5;$i++){
                if($i==0){
        ?>
                    <div class="item active">
                        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image" class="img-responsive">
                        <div class="carousel-caption">
                            <h3>Sell $</h3>
                            <p>Money Money.</p>
                        </div>
                    </div>
        <?php    }else{?>
                    <div class="item">
                        <img src="../resource/images/content/meal-ideas.jpg" alt="Image" class="img-responsive">
                        <div class="carousel-caption">
                            <h3>More Sell $</h3>
                            <p>Lorem ipsum...</p>
                        </div>
                    </div>
        <?php    }
            }
        ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#homeCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#homeCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- carousel ends -->
<div class="container">
    <div class="recipe-cards">
        <header>
            <h3 class="title-head text-left">Most Popular</h3>
        </header>
        <div class="row">
            <?php
                for($i=0;$i<8;$i++){
            ?>
                <div class="col-xs-12 col-md-3 recipe-card">
                    <img src="../resource/images/content/meal-ideas.jpg" class="img-rounded" align="middle">
                    <a href="#"><h4 class="text-left text-capitalize">a type of something</h4></a>
                    by&nbsp;<a href="#" class="username">username</a>
                    <div class="introduction">ahsdbhjasdhjasdashdvhjasxjhasbxajhsbxjhasbx</div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="recipe-cards">
        <header>
            <h3 class="title-head">Most Recent</h3>
        </header>
        <div class="row">
            <?php
            for($i=0;$i<4;$i++){
                ?>
                <div class="col-xs-12 col-md-3 recipe-card">
                    <img src="../resource/images/content/meal-ideas.jpg" class="img-rounded" align="middle">
                    <a href="#"><h4 class="text-left text-capitalize">a type of something</h4></a>
                    by&nbsp;<a href="#" class="username">username</a>
                    <div class="introduction">ahsdbhjasdhjasdashdvhjasxjhasbxajhsbxjhasbx</div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <div class="home-for-beginner">
        <header>
            <h3 class="title-head">For beginners</h3>
        </header>
        <div class="row">
            <div class="col-xs-12 col-md-6 left">
                <img src="../resource/images/content/meal-ideas.jpg" class="img-responsive img-rounded">
                <a href="#" class="recipe-name"><h3>recipe name</h3></a>
                by&nbsp;<a href="#" class="username">username</a>
                <div class="introduction">introduction thisahasdhaskjdnasuxhbjsaxuyasjkdsaguyasbjkdgasjxbasgxbahjsxvsa</div>
            </div>
            <div class="col-xs-12 col-md-6 right">
                <?php
                for($i=0;$i<4;$i++){
                    ?>
                    <div class="col-xs-6 col-md-6">
                        <div class="recipe-img">
                            <img src="../resource/images/content/meal-ideas.jpg" class="img-responsive img-rounded">
                        </div>
                        <a href="#" class="recipe-name"><h4>recipe name</h4></a>
                        by&nbsp;<a href="#" class="username">username</a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="ctb-section">
    <div class="home-contributors">
        <header>
            <h3 class="title-head">Active Contributors</h3>
        </header>
    </div>
    <!-- carousel starts -->
    <div id="contributorCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <?php
                for($i=0;$i<4;$i++){
                    if($i==0){
                ?>
                        <div class="text-center col-xs-offset-2 col-xs-4 col-md-2 col-md-offset-2">
                            <a href="#"><img src="../resource/images/content/meal-ideas.jpg" alt="Image" class="img-circle img-thumbnail"></a>
                            <a href="#">username</a>
                        </div>
            <?php   }else{?>
                        <div class="text-center col-xs-4 col-md-2">
                            <a href="#"><img src="../resource/images/content/meal-ideas.jpg" alt="Image" class="img-circle img-thumbnail"></a>
                            <a href="#">username</a>
                        </div>
            <?php
                    }
                }
            ?>
            </div>
            <div class="item">
                <?php
                for($i=0;$i<4;$i++){
                    if($i==0){
                        ?>
                        <div class="text-center col-xs-offset-2 col-xs-4 col-md-2 col-md-offset-2">
                            <a href="#"><img src="../resource/images/content/meal-ideas.jpg" alt="Image" class="img-circle img-thumbnail"></a>
                            <a href="#">username</a>
                        </div>
                    <?php   }else{?>
                        <div class="text-center col-xs-4 col-md-2">
                            <a href="#"><img src="../resource/images/content/meal-ideas.jpg" alt="Image" class="img-circle img-thumbnail"></a>
                            <a href="#">username</a>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#contributorCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-arrow-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#contributorCarousel" data-slide="next">
            <span class="glyphicon glyphicon-arrow-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><br>
<!-- carousel ends -->
<?php include "footer.php"?>
<script>
    $(function () {
        // change the height of carousel to make w/h = 3/1
        var cs_imgs = $('#homeCarousel .item img');
        var cs_img_width = $(cs_imgs[0]).width();
        for (i=0;i<cs_imgs.length;i++){
            $(cs_imgs[i]).css({'height':cs_img_width/3+'px'});
            if(cs_img_width>992){
                $(cs_imgs[i]).parent('.item').children('.carousel-caption').css({'margin-bottom':cs_img_width/9+'px'});
            }else{
                $(cs_imgs[i]).parent('.item').children('.carousel-caption').css({'margin-bottom':0+'px'});
            }
        }
        // change the height/width of all images in the recipe cards to 3/4
        var rc_imgs = $('.recipe-card img');
        for(i=0;i<rc_imgs.length;i++){
            $(rc_imgs[i]).css({'height':$(rc_imgs[i]).width()*0.75+'px'});
        }
        // change the padding of recipe-img class of third and fourth elements
        var imgs = $('.home-for-beginner .right .recipe-img');
        $(imgs[2]).css({'padding-top':'10px'});
        $(imgs[3]).css({'padding-top':'10px'});
        // change the layout of the contributors section according to the screen size
        var cw = $('#contributorCarousel .item img').width();
        $('#contributorCarousel .item img').css({'height':cw+10+'px'});
        if( cw < 962*0.45/3 ) {
            var elements = $('#contributorCarousel .item');
            for(i =0;i<elements.length;i++)
                $($(elements[i]).children()[2]).addClass('col-xs-offset-2');
        }

    });
</script>
</body>
</html>