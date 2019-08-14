 <?php
   require_once("../../Clases/Conexion.php");

    $cuotaNo = $_POST['cuotaNo'];
    $interes = $_POST['interes'];
    $abonoCapital = $_POST['abonoCapital'];
    

$sql = "INSERT INTO CitasHechas (Dni, Diente, Procedimiento, Costo, Fecha) VALUES ('16', '$cuotaNo', '$interes', '$abonoCapital')";
    if (mysqli_query($conn, $sql)) {
            // header('Location: ../loans.php?registrationstatus=true');
        echo "Si registro";
    } else {
            // header('Location: ../loans.php?registrationstatus=false');
        echo "No registro";
    }

?>