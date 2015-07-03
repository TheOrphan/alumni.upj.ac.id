<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Kuesioner'), ['action' => 'edit', $kuesioner->id_kuesioner]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kuesioner'), ['action' => 'delete', $kuesioner->id_kuesioner], ['confirm' => __('Are you sure you want to delete # {0}?', $kuesioner->id_kuesioner)]) ?> </li>
        <li><?= $this->Html->link(__('List Kuesioner'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kuesioner'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="kuesioner view large-10 medium-9 columns">
    <h2><?= h($kuesioner->id_kuesioner) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('File') ?></h6>
            <p><?= h($kuesioner->file) ?></p>
            <h6 class="subheader"><?= __('Nama') ?></h6>
            <p><?= h($kuesioner->nama) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Kuesioner') ?></h6>
            <p><?= $this->Number->format($kuesioner->id_kuesioner) ?></p>
            <h6 class="subheader"><?= __('No Induk') ?></h6>
            <p><?= $this->Number->format($kuesioner->no_induk) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Create') ?></h6>
            <p><?= h($kuesioner->date_create) ?></p>
        </div>
    </div>
</div>
