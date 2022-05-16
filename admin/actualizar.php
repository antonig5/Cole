<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
	
	$busca=$_GET["idUser"];


try{
$base=new PDO("mysql:host=localhost;dbname=colegio", "root", "");//pdo es la clase
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//muestra el tipo de error
$base->exec("set character set utf8");
//echo "Conexión exitosa";
$sql="SELECT  * from usuarios  where idUser=:co";//consulta con marcador, el marcador es :codigo

$resultado=$base->prepare($sql);//el objeto $base llama al metodo prepare que recibe por parametro la instrucción sql, el metodo prepare devuelve un objeto de tipo PDO que se almacena en la variable resultado
$resultado->execute(array(":co"=>$busca));
	if($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		
		?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Document</title>
        </head>
        <body>
        <form action="form.php" method="get" class="form-label">

		
<table class="table table-dark table-striped">
    <tr align="center"  class="table-dark"><td align=""><h5>ID<input type="text" readonly name="documento" value="<?php echo $registro['idUser']?>"></td></h5></tr>
    <tr align="center"  class="table-dark"><td align=""><h5>Nombre<input type="text"  name="nombre" value="<?php echo $registro['nombre']?>"></td></h5></tr>
    <tr align="center"  class="table-dark"><td align=""><h5>Apellido<input type="text"  name="ape" value="<?php echo $registro['apellido']?>"></td></h5></tr>
    


    <tr><td colspan="2" align="center"><input type="submit" name="edita" id="ingresa" value="Guardar" class="btn btn-primary">
    

        

</table>
</form>
        </body>
        </html>
        
		
<?php
	}else{
		echo "No existe cliente con cédula $busca";
	}

	



$resultado->closeCursor();

}catch(Exception $e){
	die("Error: ". $e->GetMessage());

}finally{
	$base=null;//vaciar memoria
}


?>

</form>
</body>
</html>