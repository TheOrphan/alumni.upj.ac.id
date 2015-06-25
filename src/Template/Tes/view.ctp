<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Te'), ['action' => 'edit', $te->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Te'), ['action' => 'delete', $te->id], ['confirm' => __('Are you sure you want to delete # {0}?', $te->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Te'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tes view large-10 medium-9 columns">
    <h2><?= h($te->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Tes') ?></h6>
            <p><?= h($te->tes) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($te->id) ?></p>
        </div>
    </div>
</div>
