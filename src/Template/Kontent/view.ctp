<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Kontent'), ['action' => 'edit', $kontent->id_kontent]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kontent'), ['action' => 'delete', $kontent->id_kontent], ['confirm' => __('Are you sure you want to delete # {0}?', $kontent->id_kontent)]) ?> </li>
        <li><?= $this->Html->link(__('List Kontent'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kontent'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="kontent view large-10 medium-9 columns">
    <h2><?= h($kontent->id_kontent) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nm Pengurus') ?></h6>
            <p><?= h($kontent->nm_pengurus) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Kontent') ?></h6>
            <p><?= $this->Number->format($kontent->id_kontent) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Dana Bentuk') ?></h6>
            <?= $this->Text->autoParagraph(h($kontent->dana_bentuk)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Dana Prosedur') ?></h6>
            <?= $this->Text->autoParagraph(h($kontent->dana_prosedur)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Dana Manfaat') ?></h6>
            <?= $this->Text->autoParagraph(h($kontent->dana_manfaat)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Faq') ?></h6>
            <?= $this->Text->autoParagraph(h($kontent->faq)) ?>
        </div>
    </div>
</div>
