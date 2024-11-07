<h2>Contato</h2>

<?=get('message')
?>

<form action="/pages/forms/contato.php" method="POST" role="form">

<div class="form-group">
    <label for="">Nome</label>
    <input type="name" class="form-control" name="name" placeholder="Digite seu Nome">


</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Digite seu Email">


</div>

<div class="form-group">
    <label for="">Assunto</label>
    <input type="text" class="form-control" name="subject" placeholder="">


</div>

<div class="form-group">
    <label for="">mensagem</label>
    <textarea name="message" cols="20" rows="10" class="form-control"></textarea>
</div>
<br>
<button type="submit" class="btn btn-primary">Enviar</button>



</form>