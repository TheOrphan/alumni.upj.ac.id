<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Wisuda'), ['action' => 'edit', $wisuda->id_wisuda]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wisuda'), ['action' => 'delete', $wisuda->id_wisuda], ['confirm' => __('Are you sure you want to delete # {0}?', $wisuda->id_wisuda)]) ?> </li>
        <li><?= $this->Html->link(__('List Wisuda'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wisuda'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="wisuda view large-10 medium-9 columns">
    <h2><?= h($wisuda->id_wisuda) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($wisuda->status) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Wisuda') ?></h6>
            <p><?= $this->Number->format($wisuda->id_wisuda) ?></p>
            <h6 class="subheader"><?= __('No Induk') ?></h6>
            <p><?= $this->Number->format($wisuda->no_induk) ?></p>
            <h6 class="subheader"><?= __('No Reg') ?></h6>
            <p><?= $this->Number->format($wisuda->no_reg) ?></p>
            <h6 class="subheader"><?= __('Biaya') ?></h6>
            <p><?= $this->Number->format($wisuda->biaya) ?></p>
            <h6 class="subheader"><?= __('Tagihan') ?></h6>
            <p><?= $this->Number->format($wisuda->tagihan) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Create') ?></h6>
            <p><?= h($wisuda->date_create) ?></p>
        </div>
    </div>
</div>
