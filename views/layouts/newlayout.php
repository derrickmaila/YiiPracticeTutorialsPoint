<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/22
 * Time: 11:46
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);

$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset?>">
        <meta name = "viewport" content="width = device-width, initial-scale = 1">
        <?= Html::csrfMetaTags()?>
        <title>
            <?= Html::encode($this->title)?>
        </title>
        <?php $this->head()?>
    </head>

<body>
     <?php $this->beginBody() ?>
     <div class="wrap">
          <div class="container">
                <?= $content ?>
          </div>
     </div>

     <footer class="footer">
         <div class="container">
             <p class="pull-left">© Yii Produtions <?= date('Y')?> </p>
             <p class="pull-right"><?= Yii::powered()?></p>
         </div>
     </footer>

</body>

</html>
<?php $this->endPage()?>

