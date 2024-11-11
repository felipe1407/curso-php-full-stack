<?=get('message'); ?>

<form action="/pages/forms/create_user.php" method="POST" role="form">

<div class="form-group">
    <label for="">Nome</label>
    <input type="name" class="form-control" name="name" placeholder="Digite seu Nome">


</div>

<div class="form-group">
    <label for="">Sobrenome</label>
    <input type="name" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome">


</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Digite seu Email">


</div>



<div class="form-group">
    <label for="">password</label>
    <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
</div>
<br>
<button type="submit" class="btn btn-primary">Cadastrar</button>



</form>