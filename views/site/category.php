<?php

/* @var $this yii\web\View */
$this->params['notInContainer'] = true;
$this->title = $categoryName->name;
$this->params['breadcrumbs'][] = $this->title;
//echo '<pre>';
//print_r($categoryName->image->path);
//echo '</pre>';
$this->params['showDropdown'] = true;
?>
<table>
    <?php
    $row = 0;
    $result = '';
    $result .= '<tr><td style="margin: 0px;" valign="top" ><h3><a href="/site/category?categoryName=' . $categoryName['name'] . '">' . $categoryName->name . '</a></h3>'
        . '<ul style="list-style:none;">';
    foreach ($subCategories as $subCategory) {
        $result .= '<li><a href="/site/category?categoryName=' . $subCategory['name'] . '">' . $subCategory->name . '</a></li>';
    }
    $result .= '</ul></td>';
    $result .= '<td align="center"><img class="imagLogo" alt="' . $categoryName->image->alt . '" title="' . $categoryName->image->title . '" src="' . $categoryName->image->path . '"/></td>';
    $col = 0;
    foreach ($products as $product) {
        if($col > 3){
            $col = 0;
            $row++;
            $result .= '</tr>';
        }
        if($row == 0 && $col == 2){
            $col = 0;
            $row++;
            $result .= '</tr>';
        }
       /* else if($row == 1 && $col == 3){
            $col = 0;
            $row++;
            $result .= '</tr>';
        }*/
        if ($row == 0 && $col < 2) {
            $result .= '<td class="qwe tabb"><div class="border"><div class="wrap"><div class="product-wrap">'
                . '<a href=""><img  alt="' . $product->titleImg->alt . '" title="' . $product->titleImg->title . '" src="' . $product->titleImg->path . '" class="imag"></a>'
                . '</div><div class="loop-action"><a href="/site/details?productId=' . $product->id . '" class="add-to-cart">Переглянути</a>'
                . '<a href="" class="loop-add-to-cart">В корзину</a></div></div>'
                . '<div class="product-info"><h3 class="product-title">' . $product->name . '</h3>'
                . '<div class="price">' . $product->price . '</div></div></div></td>';
        }
       /* else if ($row == 1 && $col < 3) {
            $result .= '<td class="qwe tabb"><div class="border"><div class="wrap"><div class="product-wrap">'
                . '<a href=""><img  alt="' . $product->titleImg->alt . '" title="' . $product->titleImg->title . '" src="' . $product->titleImg->path . '" class="imag"></a>'
                . '</div><div class="loop-action"><a href="/site/details?productId=' . $product->id . '" class="add-to-cart">Переглянути</a>'
                . '<a href="" class="loop-add-to-cart">В корзину</a></div></div>'
                . '<div class="product-info"><h3 class="product-title">' . $product->name . '</h3>'
                . '<div class="price">' . $product->price . '</div></div></div></td>';
        }*/
        else {
            $result .= '<td class="qwe tabb"><div class="border"><div class="wrap"><div class="product-wrap">'
                . '<a href=""><img  alt="' . $product->titleImg->alt . '" title="' . $product->titleImg->title . '" src="' . $product->titleImg->path . '" class="imag"></a>'
                . '</div><div class="loop-action"><a href="/site/details?productId=' . $product->id . '" class="add-to-cart">Переглянути</a>'
                . '<a href="" class="loop-add-to-cart">В корзину</a></div></div>'
                . '<div class="product-info"><h3 class="product-title">' . $product->name . '</h3>'
                . '<div class="price">' . $product->price . '</div></div></div></td>';
        }
        $col++;
    }
    echo $result;
    ?>

</table>