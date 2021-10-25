<h1>Create an account</h1>
<?php $form = \app\core\form\Form::begin('', "post") ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model, 'firstname') ?>
    </div>
    <div class="col">
        <?php echo $form->field($model, 'lastname') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end() ?>

<!-- prettier code -->
<!-- 
<div class="form-group">
    <label>First name</label>
    <input type="text" name="firstname" class="form-control">
</div>
<div class="form-group">
    <label>Last Name</label>
    <input type="text" name="lastname" class="form-control">
</div>
<div class="form-group">
    <label">Email</label>
        <textarea name="email" class="form-control"></textarea>
</div>
<div class="form-group">
    <label">password</label>
        <input type="password" name="password" class="form-control">
</div>
<div class="form-group">
    <label">confirm password</label>
        <input type="password" name="confirmPassword" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form> -->