<?php

/** @var $model \App\Models\LoginForm */

use Phpmvc\Core\Form\Form;

?>

<h1>Login</h1>

<?php $form = Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <button class="btn btn-success">Submit</button>
<?php Form::end() ?>