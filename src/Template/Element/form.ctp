<?= $this->fetch('before_form'); ?>
<?php 
    /*
    echo $this->Html->script([
        '/js/ueditor/ueditor.config.js', 
        '/js/ueditor/ueditor.all.min.js',
        '/js/ueditor/lang/zh-cn/zh-cn.js'
        ]);
*/
?>
<div class="<?= $this->CrudView->getCssClasses(); ?>">
    <?= $this->element('action-header') ?>

    <?= $this->Form->create(${$viewVar}, ['role' => 'form', 'url' => $formUrl, 'type' => 'file', 'data-dirty-check' => $enableDirtyCheck]); ?>
    <?= $this->CrudView->redirectUrl(); ?>
    <div class="row">
        <div class="col-lg-<?= $this->exists('form.sidebar') ? '8' : '12' ?>">
            <?= $this->Form->inputs($fields, ['legend' => false]); ?>
        </div>

        <?php if ($this->exists('form.sidebar')) : ?>
            <div class="col-lg-2">
                <?= $this->fetch('form.sidebar'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-lg-<?= $this->exists('form.sidebar') ? '8' : '12' ?>">
           <div class="form-group">
                <div class="col pull-right">
                    <?php
                        echo $this->Form->button(__d('crud', 'Save'), ['class' => 'btn btn-primary', 'name' => '_save']);
                        if (empty($disableExtraButtons)) {
                            if (!in_array('save_and_continue', $extraButtonsBlacklist)) {
                                echo $this->Form->button(__d('crud', 'Save & continue editing'), ['class' => 'btn btn-success btn-save-continue', 'name' => '_edit', 'value' => true]);
                            }
                            if (!in_array('save_and_create', $extraButtonsBlacklist)) {
                                echo $this->Form->button(__d('crud', 'Save & create new'), ['class' => 'btn btn-success', 'name' => '_add', 'value' => true]);
                            }
                            if (!in_array('back', $extraButtonsBlacklist)) {
                                echo $this->Html->link(__d('crud', 'Back'), ['action' => 'index'], ['class' => 'btn btn-default', 'role' => 'button', 'value' => true]);
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end(); ?>
</div>

<?= $this->fetch('after_form'); ?>
<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    // var ue = UE.getEditor('body');

    // $(function() {
    //     $("#body").removeClass("form-control");
    // });
</script>