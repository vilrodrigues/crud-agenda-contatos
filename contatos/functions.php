<?php

require_once('../config.php');
require_once(DBAPI);

$contatos = null;
$contato = null;

function index() 
{
	global $contatos;
	$contatos = find_all('contatos');
}

function add() 
{
    if (!empty($_POST['contato'])) {
    
        $contato = $_POST['contato'];
        
        save('contatos', $contato);

        header('location: index.php');
    }
}

function view($id = null) 
{
    global $contato;
    $contato = find('contatos', $id);
}

function delete($id = null)
{
    global $contato;
    $contato = remove('contatos', $id);
  
    header('location: index.php');
}