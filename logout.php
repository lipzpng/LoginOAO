<?php
include('classes/conexao.php');
include('classes/usuarioDAO.php');

$usuario = new UsuarioDAO();

$logout = $usuario->logout();