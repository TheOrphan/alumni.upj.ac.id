<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Alumnus'), ['action' => 'edit', $alumnus->id_alumni]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alumnus'), ['action' => 'delete', $alumnus->id_alumni], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnus->id_alumni)]) ?> </li>
        <li><?= $this->Html->link(__('List Alumni'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumnus'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="alumni view large-10 medium-9 columns">
    <h2><?= h($alumnus->id_alumni) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($alumnus->password) ?></p>
            <h6 class="subheader"><?= __('Nm Tmp Kerja') ?></h6>
            <p><?= h($alumnus->nm_tmp_kerja) ?></p>
            <h6 class="subheader"><?= __('Alamat Kerja') ?></h6>
            <p><?= h($alumnus->alamat_kerja) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($alumnus->role) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Alumni') ?></h6>
            <p><?= $this->Number->format($alumnus->id_alumni) ?></p>
            <h6 class="subheader"><?= __('Id Mhs') ?></h6>
            <p><?= $this->Number->format($alumnus->id_mhs) ?></p>
            <h6 class="subheader"><?= __('No Induk') ?></h6>
            <p><?= $this->Number->format($alumnus->no_induk) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Thn Lulus') ?></h6>
            <p><?= h($alumnus->thn_lulus) ?></p>
            <h6 class="subheader"><?= __('Date Create') ?></h6>
            <p><?= h($alumnus->date_create) ?></p>
        </div>
    </div>
</div>
