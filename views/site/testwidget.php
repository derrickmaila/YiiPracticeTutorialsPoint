<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/19
 * Time: 15:21
 */

//use yii\bootstrap\Progress;
use app\components\FirstWidget;
//= FirstWidget::widget()
//= Progress::widget(['percent' => 60, 'label' => 'Progress 60%'] )
?>

<?php FirstWidget::begin();?>
    First Widget in H1
<?php FirstWidget::end();?>
