<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Kontent'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="kontent form large-10 medium-9 columns">
    <?= $this->Form->create($kontent) ?>
    <fieldset>
        <legend><?= __('Add Kontent') ?></legend>
        <?php
            echo $this->Form->input('nm_pengurus');
            echo $this->Form->input('dana_bentuk');
            echo $this->Form->input('dana_prosedur');
            echo $this->Form->input('dana_manfaat');
            echo $this->Form->input('faq');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
