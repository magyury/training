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
<h2>My page2</h2>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array('id'=>'divDialog',
    'options'=>array( 'title'=>'Dialog Title', 'autoOpen'=>false, 'modal'=>true, 'width'=>600)));
?>
    <div class="divForForm"></div>
<?php
$this->endWidget(); 
?>