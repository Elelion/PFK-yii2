<?php

use yii\helpers\Html;

?>
<div class="row services-category">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="general__title">
            <?= $alert->error_title; ?>
        </h1>
    </div>

    <div class="clearfix"></div>
    <div class="col-lg-12"><?= $alert->error_caption; ?></div>
    <br>
    <br>
    <div class="clearfix"></div>
    <div class="col-lg-12"><?= $alert->error_description; ?></div>
</div>
