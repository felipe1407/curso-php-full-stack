<?php

require "../../../bootstrap.php";

$id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);

if(isEmpty()){
    flash('message', 'preencha todos os campos');

    return redirect("edit_user&id=".$id);
}

    


$validate = [
    'name' => $_POST['name'],
    'sobrenome' => $_POST['sobrenome'],
    'email' => $_POST['email']
    
];


$atualizado = update('users', $validate, ["id", $id]);



if($atualizado){
    flash('message', 'atualizado com sucesso', 'success');

    return redirect("edit_user&id=".$id);
} else {
    flash('message', 'erro ao atualizar');

     redirect(("edit_user&id=".$id));
}
