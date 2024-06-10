<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
<?php
$texto = "19.152.977-k";
$texto2=preg_replace('([^A-Za-z0-9 ])', '', $texto);

echo  $texto;
echo  $texto2;
echo  strlen($texto2);
 

 echo substr("calabacín", 3, 2);;
// Salida: marcosalonso@emailinventado.net
?>
<br>
    <?php
// Print the array from getdate()
print_r(getdate());
echo "<br><br>";

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
echo "<br><br>";

echo "$mydate[wday]/$mydate[mon]/$mydate[year]--$mydate[hours]:$mydate[minutes]:$mydate[seconds]";
echo "<br><br>";
?>
    <h1>pruebaDB_view</h1>
    <?php date_default_timezone_set("America/Santiago");
    echo gettype(date("h:m:s"))?>
    <?=base_url("PruebaDB_controller/pruebaDB_JSON")?>

<table id="ejemplo">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre usuario</th>
            <th>acciones</th>
        </tr>
    </thead>

</table>

</div>
<?php
$texto = "mar-cos+alonso@email+inventado.net";
$texto = preg_replace('([^A-Za-z0-9 \._\-@])', '', $texto);
echo $texto;
// Salida: marcosalonso@emailinventado.net
?>


</body>


<script>
$(document).ready(function(){
     $('#ejemplo').DataTable({
        
        ajax:{
		    url: "<?= base_url("PruebaDB_controller/pruebaDB_JSON");?>",
            type:"POST"
        },
        
        "columns":[
            {"data":"id"},
            {"data":"nombreUsuarios"},
            {"data":"accion"},
        ]
     });
        
        });
</script>
  
</script>
</html>