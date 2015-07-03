<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Beritum'), ['action' => 'edit', $beritum->id_berita]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Beritum'), ['action' => 'delete', $beritum->id_berita], ['confirm' => __('Are you sure you want to delete # {0}?', $beritum->id_berita)]) ?> </li>
        <li><?= $this->Html->link(__('List Berita'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Beritum'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="berita view large-10 medium-9 columns">
    <h2><?= h($beritum->id_berita) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nm Berita') ?></h6>
            <p><?= h($beritum->nm_berita) ?></p>
            <h6 class="subheader"><?= __('Lingkup') ?></h6>
            <p><?= h($beritum->lingkup) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Berita') ?></h6>
            <p><?= $this->Number->format($beritum->id_berita) ?></p>
            <h6 class="subheader"><?= __('No Induk') ?></h6>
            <p><?= $this->Number->format($beritum->no_induk) ?></p>
        </div>
    </div>
</div>
