<?php
/* @var $this \yii\web\View */
/* @var $form \yii\widgets\ActiveForm */
?>

<div class="repeater-item" data-id="<?= $id ?>">
    <div class="row">

        <?php
        if (isset($contentPath))
        {
            $content = $this->render($contentPath, ['model' => $model, 'id' => $id]);
        }
        ?>
        <?= $content ?>
        <div class="col-xs-1">
            <a class="remove btn btn-danger" href="javascript:;" title="Удалить">X</a>
        </div>
    </div>
</div>
