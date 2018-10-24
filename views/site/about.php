<?php
//phpinfo();
//die;
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use kartik\datetime\DateTimePicker;
use derrick\HelloWorld\SayHello;


$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, developing, views,
      meta, tags']);
$this->registerMetaTag(['name' => 'description', 'content' => 'This is the description
      of this page!'], 'description');

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <p>
        <?= Html::encode("<script>alert('alert!');</script><h1>ENCODE EXAMPLE</h1>>")?>
    </p>
    <p>
        <?= HtmlPurifier::process("<script>alert('alert!');</script><h1>HtmlPurifier EXAMPLE</h1>") ?>
    </p>

    <?= $this->render("_part1")?>
    <?= $this->render("_part2")?>
    <p>
        <b>Today`s Date: </b>
        <?= $date?>
    </p>
    <p>
        <b>Email: </b>
        <?= $email?>
    </p>
    <p>
        <b>Phone: </b>
        <?= $phone?>
    </p>
    <?php
        $date = DateTimePicker::widget([
              'name' => 'dp_1',
              'type' => DateTimePicker::TYPE_INPUT,
              'value' => '20-Oct-2018 10:10',
              'pluginOptions' => [
                      'autoclose' => true,
                       'format' => 'dd-M-yyyy'
              ]


        ]);

        echo $date;


    ?>


    <code><?= __FILE__ ?></code>
</div>


