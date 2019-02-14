<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->params['showDropdown'] = false;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Домашня', 'url' => ['/']],
            ['label' => 'Про нас', 'url' => ['/site/about']],
            ['label' => 'Зворотній зв\'язок', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Увійти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Вийти (' . Yii::$app->user->identity->name . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
            Yii::$app->user->isGuest ? (
            ['label' => 'Реєстрація', 'url' => ['/user/register']]
            ) : (
            ['label' => 'Профіль', 'url' => ['/user/profile']]
            )

        ],
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?php if ($this->params['showDropdown'] === false): ?>
            <div class="dropdown dropdown-inline">
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Категорії
                    <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php
                    $level = 0;

                    function has_children($categories, $id)
                    {
                        foreach ($categories as $category) {
                            if ($category['parent_category_id'] == $id)
                                return true;
                        }
                        return false;
                    }

                    function build_menu($categories, $parent = 0)
                    {
                        global $level;
                        $result = '';
                        foreach ($categories as $category) {
                            if ($category['parent_category_id'] == $parent) {
                                if (has_children($categories, $category['id'])) {
                                    $result .= '<li class="dropdown"><a href="/site/category?categoryName=' . $category['name'] . '">' . $category['name']
                                        . '<span class="caret"></span></a><ul class="dropdown-menu dropdownhover-right">';
                                    $level++;
                                    $result .= build_menu($categories, $category['id']);
                                } else

                                    $result .= '<li><a href="/site/category?categoryName=' . $category['name'] . '">' . $category['name'] . '</a></li>';
                            }
                        }
                        if ($level > 0)
                            $result .= '</ul></li>';
                        else
                            $result .= '</ul>';
                        $level--;

                        return $result;
                    }

                    $categoriesArr = $this->context->categories;
                    echo build_menu($categoriesArr); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--        <p class="pull-left">&copy; My Company --><?//= date('Y') ?><!--</p>-->
<!---->
<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
