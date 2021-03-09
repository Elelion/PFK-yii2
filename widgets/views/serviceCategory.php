<?php
/** @var TYPE_NAME $srvCategory */

use yii\helpers\Url;
?>

<?php foreach ($srvCategory as $category): ?>
    <li>
        <a href="<?= Url::to(['home/services', 'id' => $category->id]) ?>"
           class=""><?= $category->title; ?></a>
    </li>
<?php endforeach; ?>