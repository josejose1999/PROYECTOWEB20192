<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "optica");

if(isset($_POST["add_to_cart"]) )
    if (isset($_SESSION['user'])) {

			{
				if(isset($_SESSION["shopping_cart"]))
				{
					$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
					if(!in_array($_GET["id"], $item_array_id))
					{
						$count = count($_SESSION["shopping_cart"]);
						$item_array = array(
							'item_id'			=>	$_GET["id"],
							'item_name'			=>	$_POST["hidden_name"],
							'item_price'		=>	$_POST["hidden_price"],
							'item_quantity'		=>	$_POST["quantity"]
						);
						$_SESSION["shopping_cart"][$count] = $item_array;
					}
					else
					{
						echo '<script>alert("Este Producto Ya Fue Añadido")</script>';
					}
				}
				else
				{
					$item_array = array(
						'item_id'			=>	$_GET["id"],
						'item_name'			=>	$_POST["hidden_name"],
						'item_price'		=>	$_POST["hidden_price"],
						'item_quantity'		=>	$_POST["quantity"]
					);
					$_SESSION["shopping_cart"][0] = $item_array;
				}
			}
    }
    else{
  		echo '<script>alert("Registrese Para Pode Comprar")</script>';
    }

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<br />
		<section id="tienda">
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Tiendita  -  Sapines </h2><br />
			<br /><br />
			<?php
				$query = "SELECT * FROM productos ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))

					{
				?>
			<div class="col-md-4" >
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="img/<?php echo $row["image"]; ?>" class="img-responsive" ><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Añadir Al Carrito" />

					</div>
				</form>
			</div>

			<?php
					}
				}
			?>
			
		</div>
		</section>
		<br>
			<br>
	</div>
	<br />
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>