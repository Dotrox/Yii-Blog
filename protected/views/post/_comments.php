<?php foreach($comments as $comment): ?>
<div class="comment" id="c<?php echo $comment->id; ?>">

    <?php echo CHtml::link("#{$comment->id}", $comment->getUrl($post), array(
    'class'=>'cid',
    'title'=>'Permalink to this comment',
)); ?>

    <div class="author">
        <?php echo $comment->authorLink; ?> says:
    </div>

    <div class="content">
        <?php echo nl2br(CHtml::encode($comment->content)); ?>
    </div>

    <div class="time">
        <?php if($comment->status==Comment::STATUS_PENDING): ?>
        <span class="pending">Pending approval</span> |
        <?php echo CHtml::linkButton('Approve', array(
            'submit'=>array('comment/approve','id'=>$comment->id),
        )); ?> |
        <?php endif; ?>
        <?php echo CHtml::link('Update',array('comment/update','id'=>$comment->id)); ?> |
        <?php echo CHtml::link('Delete',array('comment/delete','id'=>$comment->id),array('class'=>'delete')); ?> |
        <?php echo date('F j, Y \a\t h:i a',$comment->create_time); ?>
    </div>



</div><!-- comment -->
<?php endforeach; ?>