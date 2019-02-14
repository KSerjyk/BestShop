<?php

/* @var $this yii\web\View */
$this->title = 'Домашня сторінка';
$this->params['showDropdown'] = true;
?>

<?php if (Yii::$app->session->hasFlash('MailNotConfirmed')): ?>
    <div class="alert alert-danger">
        <?= Yii::$app->session->getFlash('MailNotConfirmed') ?>
    </div>
<?php endif; ?>
<div class="site-index">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://www.youandthemat.com/wp-content/uploads/nature-2-26-17.jpg" alt="Los Angeles">
            </div>

            <div class="item">
                <img src="http://croatia.hr/sites/default/files/styles/image_full_width/public/2017-08/02_01_slide_nature.jpg?itok=ItAHmLlp"
                     alt="Chicago">
            </div>

            <div class="item">
                <img src="https://s3-us-west-2.amazonaws.com/uw-s3-cdn/wp-content/uploads/sites/6/2017/11/04133712/waterfall.jpg"
                     alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
