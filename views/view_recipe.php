<html>
<head>
    <?php include "default_head_resource.html"?>
    <title>View Recipe</title>
</head>
<body>
<?php include "user_nav_bar.php"?>
<?php include "logo_banner.php" ?>

<div class="container-fluid">
    <div class="wrap">
        <ol class="breadcrumb">
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="#"> as</a></li>
        </ol>
        <div class="single-page">
            <div class="col-md-8 content-left single-post">
                <div class="blog-posts">
                    <h3 class="post text-center" id="title">title</h3>
                    <div class="article-time">
                        <h6 class="text-center" id="date">datetime</h6>
                        <?php
                        if(1==1) {
                            ?>
                            <button class="pull-right collect-btn btn btn-default" style="margin-bottom: 1em"><span
                                        class="glyphicon glyphicon-star"></span> Favorited
                            </button>
                            <?php
                        }else{
                            ?>
                            <button class="pull-right collect-btn btn btn-warning" style="margin-bottom: 1em"><span class="glyphicon glyphicon-star-empty"></span> Add to favorites</button>
                        <?php }
                        ?>
                    </div>
                    <div class="last-article">
                        asjkdnaskj
                        asdnjasnc
                        ascnjk
                        asf
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--related-posts-->
                <div class="row related-posts">
                    <h4>Similar Recipes</h4>
                    <?php
                        for($i=0;$i<5;$i++){?>
                            <div class="col-md-3 related-grids">
                                <h5><a href="#">asd</a></h5>
                            </div>
                    <?php }
                    ?>
                </div>
                <!--//related-posts-->
                <div class="response">
                    <h4>Recipe Comments</h4>
                    <?php
                        for($i=0;$i<5;$i++){?>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="../resource/images/content/default_avatar.png"/>
                                    </a>
                                    <h5><a href="#">username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    content
                                    <ul>
                                        <li>datetime</li>
                                        <li><a href="#">Comment</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                    <?php }
                    ?>
                </div>
                <div class="coment-form">
                    <h4>My Comment</h4>
                    <form>
                        <textarea id="commentContent" placeholder="">Please write your comment here...</textarea>
                        <input type="button" value="Comment" id="commentBtn">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <div class="col-md-4 side-bar">
        <div class="first_half">
            <div class="categories">
                <header>
                    <h3 class="side-title-head">Category</h3>
                </header>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <?php
                                for($i=0;$i<5;$i++){?>
                                    <li><a href="#">collection</a></li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <?php
                                for($i=0;$i<5;$i++){?>
                                    <li><a href="#">collection</a></li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="list_vertical">
                <section class="accordation_menu">
                    <div>
                        <input id="label-1" name="lida" type="radio" checked/>
                        <label for="label-1" id="item1"><i class="ferme"> </i>Most Popular<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                        <div class="content" id="a1">
                            <div class="scrollbar style-2">
                                <div class="force-overflow">
                                    <div class="popular-post-grids">
                                        <?php
                                        for($i=0;$i<5;$i++){?>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="#"><img src="../resource/images/content/meal-ideas.jpg"/></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="#">tilte</a>
                                                    <p>date <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>commecntcount</a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>readcount</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input id="label-2" name="lida" type="radio"/>
                        <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Most Recent<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                        <div class="content" id="a2">
                            <div class="scrollbar" id="style-2">
                                <div class="force-overflow">
                                    <div class="popular-post-grids">
                                        <?php
                                        for($i=0;$i<5;$i++){?>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="#"><img src="../resource/images/content/meal-ideas.jpg"/></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="#">title</a>
                                                    <p>${latestPassages.get(i).date}<a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>commentcount</a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>readcount</a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input id="label-3" name="lida" type="radio"/>
                        <label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i>User Comment<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                        <div class="content" id="a3">
                            <div class="scrollbar style-2">
                                <div class="force-overflow">
                                    <div class="response">
                                        <?php
                                        for($i=0;$i<5;$i++){?>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="../resource/images/content/meal-ideas.jpg"/>
                                                    </a>
                                                    <h5><a href="#">username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    content
                                                    <ul>
                                                        <li>datetime</li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="secound_half">
            <div class="popular-news">
                <header>
                    <h3 class="title-popular">More Collections</h3>
                </header>
                <div class="side-bar-articles">
                    <?php
                    for($i=0;$i<5;$i++){?>
                        <div class="side-bar-article">
                            <a href="#"><img src="../resource/images/content/meal-ideas.jpg"/></a>
                            <div class="side-bar-article-title">
                                <a href="#">title</a>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<input type="hidden" value="${param.categoryid}" id="passage-categoryid">
<input type="hidden" value="${param.passageid}" id="passage-passageid">
<!-- content-section-ends-here -->
<script>
    $(function(){
        $('.last-article p').addClass('artext');
        $('#commentBtn').click(function () {
            var content = $('#commentContent').val();
            var userid = $('#myuser').val();
            var passageid = $('#passage-passageid').val();
            var categoryid = $('#passage-categoryid').val();
            $.ajax({
                url: 'writePassageComment.html' ,
                data:{
                    content: content ,
                    userid: userid ,
                    passageid: passageid
                } ,
                success: function (result) {
                    if(result=='success'){
                        location.reload();
                    }else{
                        alert('Fail to send the comment, please try again.');
                    }
                }
            });
        });
        $('.collect-btn').click(function () {
            var userid = $('#myuser').val();
            var passageid = $('#passage-passageid').val();
            $.ajax({
                url: 'addCollection.html' ,
                data: {
                    userid: userid ,
                    passageid: passageid
                } ,
                success: function (result) {
                    if(result=='success')
                        location.reload();
                    else{
                        alert('Fail to add to your favorites, please try again.');
                    }
                } ,
                error: function () {
                    alert('Network connection error');
                }
            });
        });
    });
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
</body>
</html>
