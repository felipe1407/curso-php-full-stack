<?php



$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('users', 'id', $id);
    
if ($deletado) {
    flash('message', 'Usuário delatado com sucesso');
    return redirectToHome();
}

flash('message', 'Erro ao deletar');
redirectToHome();


