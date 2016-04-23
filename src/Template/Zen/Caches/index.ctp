<div class="panel panel-default">
    <div class="panel-heading">
        <span class="panel-title"><?= $breadcrumb[1]['label'];?></span>
        <span class="panel-title-right">
            <button class="btn btn-default btn-xs back" type="submit"><?= __('Back')?></button>
        </span>
    </div>
    <div class="panel-body dashboard-section">
        <?= $this->Form->create() ?>
        <a class="btn btn-default um-btn" href="/usermgmt/user-settings">All Settings</a>
        <a class="btn btn-default um-btn" href="/usermgmt/user-settings/cakelog">Cake Logs</a>
        <?= $this->Form->button(__('Cleanup Cache'), ['class' => 'btn btn-default um-btn']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<!-- isAjax -->