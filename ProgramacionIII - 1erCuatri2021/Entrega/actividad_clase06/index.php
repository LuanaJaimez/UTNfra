<?php

$opcion = isset($_POST["opcion"]) ? $_POST["opcion"] : NULL;
$correo = isset($_POST['correo']) ? $_POST["correo"] : null;
$clave = isset($_POST['clave']) ? $_POST["clave"] : null;

$host = 'localhost';
$user = 'id16719145_lj';
$pass = 'HnkmpBiz@h5nEkNp';
$base = 'id16719145_usuarios_test';

switch ($opcion)
{
    case 'login':

        //LOGIN-> RECIVE EL CORREO Y CLAVE DEL USUARIO.
        
        try
        {
            $pdo = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $user, $pass);
            $login = $pdo->prepare('SELECT nombre, perfiles.descripcion FROM usuarios
                                                        INNER JOIN perfiles ON perfiles.id = usuarios.id
                                                        WHERE correo = :correo AND clave = :clave');

            $login->bindValue(':correo', $correo, PDO::PARAM_STR);
            $login->bindValue(':clave', $clave, PDO::PARAM_STR);
            $login->execute();
            $usuario = $login->fetch(PDO::FETCH_ASSOC);

            if(!$login->rowCount())
            {
                echo "Credenciales incorrectas.";
            }
            else
            {
                echo $usuario['nombre'] . ' ' . $usuario['descripcion'];
            }
        }
        catch (PDOException $e)
        {
            print "Error: " . $e->getMessage();
            die();
        }
    
    break;

    case 'mostrar':

        // MOSTRAR-> MUESTRA TODOS LOS DATOS DE LA TABLA.

        try
        {
            $pdo = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $user, $pass);
            $mostrar = $pdo->prepare('SELECT * FROM usuarios INNER JOIN perfiles ON perfiles.id = usuarios.perfil');
            $mostrar->execute();

            if(!$mostrar->rowCount())
            {
                echo "No hay informacion para mostrar.";
            }
            else
            {
                while($user = $mostrar->fetch(PDO::FETCH_OBJ))
                {
                    echo("ID: " . $user->id . " | Correo: " . $user->correo . " | Clave: " . $user->clave . " | Nombre: " . $user->nombre . " | Perfil: " . $user->perfil . " | Descripcion: " . $user->descripcion) . "\n";
                }
            }
        }
        catch(PDOException $e)
        {
            print "Error: " . $e->getMessage();
            die();
        }
    
    break;

    case 'alta':

        // ALTA-> RECIBE UN JSON (OBJ_JSON) CON TODOS LOS NUEVOS DATOS.

        try
        {
            $obj = json_decode($_POST['obj_json']);
            $pdo = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $user, $pass);
            $alta = $pdo->prepare('INSERT INTO usuarios (id, correo, clave, nombre, perfil) VALUES (NULL, :correo, :clave, :nombre, :perfil)');
            $alta->bindValue(':correo', $obj->correo, PDO::PARAM_STR);
            $alta->bindValue(':clave', $obj->clave, PDO::PARAM_STR);
            $alta->bindValue(':nombre', $obj->nombre, PDO::PARAM_STR);
            $alta->bindValue(':perfil', $obj->perfil, PDO::PARAM_INT);
            $alta->execute();

            if(!$alta->rowCount())
            {
                echo "No hay informacion para mostrar.";
            }
            else
            {
                echo "Usuario agregado.";
            }
        }
        catch(PDOException $e)
        {
            print "Error: " . $e->getMessage();
            die();
        }

    break;

    case 'baja':

        # BAJA-> RECIBE EL ID DEL REGISTRO A SER BORRADO.

        try
        {
            $pdo = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $user, $pass);
            $delete = $pdo->prepare('DELETE FROM usuarios WHERE usuarios.id = :id');
            $delete->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
            $delete->execute();

            if(!$delete->rowCount())
            {
               echo "Error al borrar.";
            }
            else
            {
                echo "Registro borrado.";
            }
        }
        catch(PDOException $e)
        {
            print "Error: " . $e->getMessage();
            die();
        }

    break;

    case 'modificacion':

        # MODIFICACION-> RECIBE UN ID Y UN JSON (OBJ_JSON).
        # ID: REGISTRO A SER MODIFICADO
        # JSON: DATOS NUEVOS DE ESE REGISTRO.

        $obj = json_decode($_POST['obj_json']);
        $id_usuario = $_POST['id'];

        try
        {
            $pdo = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $user, $pass);
            $update = $pdo->prepare('UPDATE usuarios SET correo = :correo, clave = :clave, nombre = :nombre, perfil = :perfil WHERE usuarios.id = :id');
            $update->bindValue(':correo', $obj->correo, PDO::PARAM_STR);
            $update->bindValue(':clave', $obj->clave, PDO::PARAM_STR);
            $update->bindValue(':nombre', $obj->nombre, PDO::PARAM_STR);
            $update->bindValue(':perfil', $obj->perfil, PDO::PARAM_INT);
            $update->bindValue(':id', $id_usuario, PDO::PARAM_INT);
            $update->execute();

            if(!$update->rowCount())
            {
                echo "Error al actualizar los datos.";
            }
            else
            {
                echo "Usuario actualizado.";
            }
        }
        catch(PDOException $e)
        {
            print "Error: " . $e->getMessage();
            die();
        }

    break;

    default:
        echo "Actividad de la clase 06";
}


?>