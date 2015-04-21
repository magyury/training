<script type="text/javascript">
$('#document').ready(function(){
    $('.openDlg').live('click', function(){
        var dialogId = $(this).attr('class').replace('openDlg ', "");
        $.ajax({
            'type': 'POST',
            'url' : $(this).attr('href'),
            success: function (data) {
                $('#'+dialogId+' div.divForForm').html(data);
                $( '#'+dialogId ).dialog( 'open' );
            },
            dataType: 'html'
        });
        return false; // prevent normal submit
    })
});
</script>

<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - My page';
?>

<h2>My page</h2>

<?php echo CHtml::link('MyDialog', Yii::app()->createUrl('dialog/page2'), array('class' => 'openDlg divDialog')); ?>
