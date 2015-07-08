<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Wisuda'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="wisuda form large-10 medium-9 columns">
    <?= $this->Form->create($wisuda) ?>
    <fieldset>
        <legend><?= __('Add Wisuda') ?></legend>
        <?php
            echo $this->Form->input('no_induk');
            echo $this->Form->input('no_reg');
            echo $this->Form->input('biaya');
            echo $this->Form->input('tagihan');
            echo $this->Form->input('status');
            echo $this->Form->input('date_create');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
