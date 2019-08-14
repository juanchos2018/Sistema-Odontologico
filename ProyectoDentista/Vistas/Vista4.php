
<?php require_once "dependencias.php" ?>

    <?php require_once("../Clases/Conexion.php");
    
        $c= new Conectar();
        $conexion=$c->conexion();

     $msgerror=null;
     $rs=null;
    if(isset($_POST['b'])) {
        $code=$_POST['txtdniotro'];
        $consu="SELECT * from Historial  where Dni = '$code'";
        
        $rs=mysqli_query($conexion,$consu);
        if (mysqli_num_rows($rs)==0) {
               $msgerror="Codigo $code no existe";
                  $rs=null;
            }
        
            }
            $pagina="Vista4.php";

     ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>

  
  

</head>
<body>

  



<form method="post" action="<?php echo($pagina) ?>"   >
            <input type='text' id='txtdniotro' name='txtdniotro'>        
            <input type="submit" name="b" id="b" value="b"   data-toggle="modal" data-target="#mod" >
<!-- <button type="button"  name="b" id="b" value="b"  >buscar</button> -->
          </form > 
          <?php 
            if ($msgerror) {?>
            <div id="mensaje"> <?php alert("error",$msgerror) ?></div>
           <?php } ?>

           <?php if ($rs) {?>
            <div id="resultado">
                  <?php 

            while($row = mysqli_fetch_assoc($rs)) {  ?>           
            
              <table  border="1">
                  <tr>
                    <td>dni</td>
                    <td>nombre</td>
                      
                  </tr>
                  <tr>
                        <td> <?php   echo  $row['Dni'];?></td>
                  <td> <?php   echo   $row['Nombre'];  ?></td>
                  </tr>
                
              </table>          
            

           <?php 
         }
            ?>
      
            </div>    
          
            <?php } ?>      
          
            </div>



  

</body>
</html>

<script type="text/javascript">
    
         $(document).ready(function(){
     $('#btn').click(function(){

         // var txtd= $("#txtd").val();
         // $('#tablaEstados').load("CitasMedicas/Tablacitas2.php?txtd="+txtd);
             //$('#tablaEstados').load("Ondtograma.php");
     });
                
     });

</script>
<script type="text/javascript">
 
    jQuery(document).ready(function(){
 
    jQuery('#mod').on('hidden.bs.modal', function (e) {
        jQuery(this).removeData('bs.modal');
        jQuery(this).find('.modal-content').empty();
    })
 
    })
</script>
