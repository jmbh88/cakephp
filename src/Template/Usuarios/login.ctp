<!--<div class="users form">-->
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create(null,['class' => 'form-signin']) ?>
    <fieldset>
        <legend>Ingreso al sistema</legend>
        <?= $this->Form->input('username', ['label' => 'Usuario','class' => 'form-control']) ?>
        <?= $this->Form->input('password', ['label' => 'Clave','class' => 'form-control']) ?>
    </fieldset>
    <?= $this->Form->button('Ingresar',['class' => 'btn btn-lg btn-primary btn-block']); ?>
    <?= $this->Form->end() ?>
<!--</div>-->

