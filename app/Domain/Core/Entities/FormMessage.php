<?php
/**
 * Created by PhpStorm.
 * User: Bruna
 * Date: 02/12/2019
 * Time: 16:17
 */
namespace App\Domain\Core\Entities;

class FormMessage
{
    const CREATE_SUCCESS = 'Cadastro realizado com sucesso.';
    const CREATE_ERROR   = 'Ocorreu um erro no cadastro.';

    const EDIT_SUCCESS   = 'Alteração realizada com sucesso.';
    const EDIT_ERROR     = 'Ocorreu um erro ao alterar.';

    const DELETE_SUCCESS = 'Exclusão realizada com sucesso.';
    const DELETE_ERROR   = 'Ocorreu um erro ao excluir.';
}