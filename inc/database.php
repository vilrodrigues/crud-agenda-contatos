<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() 
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    return $conn;
}

function close_database($conn) 
{
    mysqli_close($conn);
}

function find($table, $id = null) 
{
	$database = open_database();
	$found = null;

    if ($id) {
        $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
        $result = $database->query($sql);
        $found = $result->fetch_assoc();
    } else {
        $sql = "SELECT * FROM " . $table;
        $result = $database->query($sql);
        $found = $result->fetch_all(MYSQLI_ASSOC);
    }
	
	close_database($database);
	return $found;
}

function find_all($table) 
{
    return find($table);
}

function save($table, $data) 
{
    $database = open_database();
  
    $columns = null;
    $values = null;
  
    foreach ($data as $key => $value) {
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }
  
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');
    
    $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
  
    $database->query($sql);
    
    close_database($database);
}

function edit() 
{
    if (isset($_GET['id'])) {
  
        $id = $_GET['id'];
  
        if (isset($_POST['contato'])) {
            $contato = $_POST['contato'];
    
            update('contatos', $id, $contato);
            header('location: index.php');

        } else {
            global $contato;
            $contato = find('contatos', $id);
        } 

    } else {
        header('location: index.php');
    }
}

function update($table, $id, $data) 
{
    $database = open_database();
  
    $items = null;
  
    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }
  
    $items = rtrim($items, ',');
  
    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id=" . $id . ";";
  
    $database->query($sql);

    close_database($database);
}

function remove($table, $id) 
{
    $database = open_database();
      
    $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
    $result = $database->query($sql);

    close_database($database);
}