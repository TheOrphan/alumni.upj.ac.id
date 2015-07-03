<div class="large-12 platform checks">
<!--   Login Form -->  
  <fieldset>
    <p> <b> Login Here </b> </p>
    <?php
    //            echo $this->Form->input(['options' => $users]);
    echo $this->Form->input('nim');
    echo $this->Form->input('Password');
    ?>
    <?= $this->Form->button(__('Login')) ?>   
  </fieldset>
</div>

