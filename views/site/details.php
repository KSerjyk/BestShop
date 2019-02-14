<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
/* @var $this yii\web\View */
$this->title = $product->name;
$this->params['showDropdown'] = true;
$this->params['breadcrumbs'][] = $this->title;
?>

<table class="tableSpacing">
    <tr>
        <td>
            <div class="detailImg">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                            $isActive = true;
                            $result = '';
                            foreach ($product->images as $image){
                                if($isActive){
                                    $result .= '<div class="item active">';
                                    $isActive = false;
                                }
                                else
                                    $result .= '<div class="item">';
                                $result .= '<img alt="'.$image->alt.'" title="'.$image->title.'" src="'.$image->path.'"/></div>';
                            }
                            echo $result;
                        ?>
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
        </td>
        <td width="50%" valign="top">
            <h3 align = "center"><?= $product->name ?></h3>
            <p>Наявність: <?= ($product->quantity > 0) ? 'Є в наявності':'Немає в наявності'?></p>
            <p>Ціна: <?= $product->price ?></p>
            <?php $form = ActiveForm::begin(['id' => 'details-form']); ?>

            <?= $form->field($model, 'quantity')->textInput(['type'=>'number', 'min'=>'0', 'max'=>$product->quantity]) ?>

            <div class="form-group">
                <?= Html::submitButton('Надіслати', ['class' => 'btn btn-primary', 'name' => 'comment-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </td>
    </tr>
    <tr>
        <td colspan = "2">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#description">Опис</a></li>
                <li><a data-toggle="tab" href="#charakteristik">Характеристики</a></li>
                <li><a data-toggle="tab" href="#comments">Коментарі</a></li>
            </ul>

            <div class="tab-content">
                <div id="description" class="tab-pane fade in active">
                    <p>
                        <?php
                        $descriptions = $product->descriptionProducts;
                        foreach ($descriptions as $description)
                        {
                            if($description->name == 'Опис')
                                echo $description->value;
                        }
                        ?>
                    </p>
                </div>
                <div id="charakteristik" class="tab-pane fade">
                    <table border="1" width="98%" style="margin:1%;">
                        <?php
                        $descriptions = $product->descriptionProducts;
                        foreach ($descriptions as $description) {
                            if ($description->name != 'Опис')
                                echo '<tr><td>' . $description->name . '</td><td>' . $description->value . '</td></tr>';
                        }
                        ?>
                    </table>
                </div>
                <div id="comments" class="tab-pane fade">
                    <p>
                        <?php if(!Yii::$app->user->isGuest): ?>
                            <?php $form = ActiveForm::begin(['id' => 'site-details ']); ?>
                            <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>
                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>
                            <?= Html::submitButton('Коментувати', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                            <?php ActiveForm::end(); ?>
                        <?php else: ?>
                            Щоб залишити коментар, вам потрібно <?=Html::a('увійти', '/site/login',[])?>
                        <?php endif; ?>
                    </p>
                    <table class="tableSpacing">
                        <?php
                        $comments = $product->comments;
                        foreach ($comments as $comment)
                        {
                            echo '<tr><td><div><i>'.$comment->date_created.'</i></div><div><b>'.$comment->user->login.'</b></div></td>'
                                .'<td><div>'.$comment->comment.'</div></td></tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </td>
    </tr>
</table>