<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
        if(!Yii::app()->user->isGuest)
        {
            $this->widget('UserMenu');
        }
		/*$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();*/

        $this->widget('TagCloud', array(
            'maxTags'=>Yii::app()->params['tagCloudCount'],
        ));

        $this->widget('RecentComments', array(
            'maxComments'=>Yii::app()->params['recentCommentCount'],
            'title'=>RecentComments::modTitle(),
        ));
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>