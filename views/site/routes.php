<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/25
 * Time: 11:54
 */

use yii\helpers\Url;
?>

<h4>
    <b>Url::to(['post/index']):</b>
    <?php
    // creates a URL to a route: /index.php?r = post/index
    echo Url::to(['post/index']);
    ?>
</h4>

<h4>
    <b>Url::to(['post/view', 'id' => 100]):</b>
    <?php
    // creates a URL to a route with parameters: /index.php?r = post/view&id=100
    echo Url::to(['post/view', 'id' => 100]);
    ?>
</h4>

<h4>
    <b>Url::to(['post/view', 'id' => 100, '#' => 'content']):</b>
    <?php
    // creates an anchored URL: /index.php?r = post/view&id=100#content
    echo Url::to(['post/view', 'id' => 100, '#' => 'content']);
    ?>
</h4>

<h4>
    <b>Url::to(['post/index'], true):</b>
    <?php
    // creates an absolute URL: http://www.example.com/index.php?r=post/index
    echo Url::to(['post/index'], true);
    ?>
</h4>


<h4>
    <b>Url::to(['post/index'], 'https'):</b>
    <?php
    // creates an absolute URL using the https scheme: https://www.example.com/index.php?r=post/index
    echo Url::to(['post/index'], 'https');
    ?>
</h4>

<h4>
    <b>Url::home():</b>
    <?php
    // home page URL: /index.php?r=site/index
    echo Url::home();
    ?>
</h4>

<h4>
    <b>Url::base():</b>
    <?php
    // the base URL, useful if the application is deployed in a sub-folder of the Web root
    echo Url::base();
    ?>
</h4>

<h4>
    <b>Url::canonical():</b>
    <?php
    // the canonical URL of the currently requested URL
    // see https://en.wikipedia.org/wiki/Canonical_link_element
    echo Url::canonical();
    ?>
</h4>

<h4>
    <b>Url::previous():</b>
    <?php
    // remember the currently requested URL and retrieve it back in later requests
    Url::remember();
    echo Url::previous();
    ?>
</h4>

