<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Info Wisuda'), ['action' => 'edit', $infoWisuda->id_informasi]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Info Wisuda'), ['action' => 'delete', $infoWisuda->id_informasi], ['confirm' => __('Are you sure you want to delete # {0}?', $infoWisuda->id_informasi)]) ?> </li>
        <li><?= $this->Html->link(__('List Info Wisuda'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Info Wisuda'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="infoWisuda view large-10 medium-9 columns">
    <h2><?= h($infoWisuda->id_informasi) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Judul') ?></h6>
            <p><?= h($infoWisuda->judul) ?></p>
            <h6 class="subheader"><?= __('Kontent') ?></h6>
            <p><?= h($infoWisuda->kontent) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Informasi') ?></h6>
            <p><?= $this->Number->format($infoWisuda->id_informasi) ?></p>
            <h6 class="subheader"><?= __('No Induk') ?></h6>
            <p><?= $this->Number->format($infoWisuda->no_induk) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Create') ?></h6>
            <p><?= h($infoWisuda->date_create) ?></p>
        </div>
    </div>
</div>
