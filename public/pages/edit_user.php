<?=get('message'); ?>

<?php
    
  $user = find('users', 'id', $_GET['id']);

?>

<form action="/pages/forms/update_user.php" method="POST" role="form">

<div class="form-group">
    <label for="">Nome</label>
    <input type="name" class="form-control" name="name" placeholder="Digite seu Nome" value="<?=$user->name?>">

    
</div>
    <input type="hidden" name="id" value="<?=$user->id?>">

<div class="form-group">
    <label for="">Sobrenome</label>
    <input type="name" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome" value="<?=$user->sobrenome?>">


</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Digite seu Email" value="<?=$user->email?>">


</div>




<br>
<button type="submit" class="btn btn-primary">Atualizar</button>



</form>