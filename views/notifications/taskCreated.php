<?php $this->beginContent('application.modules_core.notification.views.notificationLayout', array('notification' => $notification)); ?>
<?php echo Yii::t('TasksModule.views_notifications_taskCreated', '{userName} created a new task {task}.', array(
    '{userName}' => '<strong>' . $creator->displayName . '</strong>',
    '{task}' => '<strong>' . $targetObject->getContentTitle() . '</strong>'
)); ?>
<?php $this->endContent(); ?>






