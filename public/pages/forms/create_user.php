<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message', 'preencha todos os campos');

    return redirect("create_user");
}

    


$validate = [
    'name' => $_POST['name'],
    'sobrenome' => $_POST['sobrenome'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT) 
];


$cadastrado = create('users', $validate);



if($cadastrado){
    flash('message', 'cadastrado com sucesso', 'success');

    return redirect('create_user');
} else {
    flash('message', 'erro ao cadastrar');

    return redirect('create_user');
}
