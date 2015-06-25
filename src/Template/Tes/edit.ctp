<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $te->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $te->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tes'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="tes form large-10 medium-9 columns">
    <?= $this->Form->create($te) ?>
    <fieldset>
        <legend><?= __('Edit Te') ?></legend>
        <?php
            echo $this->Form->input('tes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
