# yii2-repeater

Repeater like http://briandetering.net/repeater

##How to use

install using composer:
`composer require kv4nt/yii2repeater`

put this code in your form:
```
<?php echo Repeater::widget([
        'modelView' => '@app/modules/admin/views/***/repeater_view_file',
        'appendAction' => \yii\helpers\Url::to(['add-item-action']),
        'removeAction' => \yii\helpers\Url::to(['remove-item-action']),
        'form' => $form,
        'models' => $models, //The existing related model | example: $model->items
    ]) ?>
```
in your desired controller ypu have to put tis code:
```
public function actions()
    {
        return [
            'add-item-action' => [
                'class' => 'kv4nt\yii2repeater\actions\AppendAction',
                'model' => 'app\models\Item',
                'contentPath' => '@app/modules/admin/views/***/repeater_view_file', //related to current controller
            ],
            'remove-item-action' => [
                'class' => 'kv4nt\yii2repeater\actions\DeleteAction',
                'model' => 'app\models\Item',
            ]
        ];
    }
```
And this is an example of the repeater_view_file.php reminded above:
```
<div class="repeater-content">
    <div class="form-group">
        <?= Html::label('Some label', Html::getInputId($model, "[$id]title")) ?>
        <?= Html::activeTextInput($model, "[$id]title", ['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= Html::label('Other label', Html::getInputId($model, "[$id]other_attribute")) ?>
        <?= Html::activeTextInput($model, "[$id]other_attribute", ['class' => 'form-control']) ?>
    </div>
</div>
```