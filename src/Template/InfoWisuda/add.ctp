<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Info Wisuda'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="infoWisuda form large-10 medium-9 columns">
    <?= $this->Form->create($infoWisuda) ?>
    <fieldset>
        <legend><?= __('Add Info Wisuda') ?></legend>
        <?php
            echo $this->Form->input('no_induk');
            echo $this->Form->input('judul');
            echo $this->Form->input('date_create');
            echo $this->Form->input('kontent');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
