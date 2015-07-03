<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Iluniprodi'), ['action' => 'edit', $iluniprodi->id_prodi]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Iluniprodi'), ['action' => 'delete', $iluniprodi->id_prodi], ['confirm' => __('Are you sure you want to delete # {0}?', $iluniprodi->id_prodi)]) ?> </li>
        <li><?= $this->Html->link(__('List Iluniprodi'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iluniprodi'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="iluniprodi view large-10 medium-9 columns">
    <h2><?= h($iluniprodi->id_prodi) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nm Prodi') ?></h6>
            <p><?= h($iluniprodi->nm_prodi) ?></p>
            <h6 class="subheader"><?= __('Nm Ketua') ?></h6>
            <p><?= h($iluniprodi->nm_ketua) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($iluniprodi->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Prodi') ?></h6>
            <p><?= $this->Number->format($iluniprodi->id_prodi) ?></p>
            <h6 class="subheader"><?= __('Tlpn') ?></h6>
            <p><?= $this->Number->format($iluniprodi->tlpn) ?></p>
        </div>
    </div>
</div>
