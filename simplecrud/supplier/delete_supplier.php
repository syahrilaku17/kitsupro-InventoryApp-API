<?php
require_once('koneksi.php');
if($_SERVER['REQUEST_METHOD']=='POST') {
  $response = array();
  //mendapatkan data
  $id_supplier = $_POST['id_supplier'];
  $sql = "DELETE FROM supplier WHERE id_supplier = '$id_supplier'";
  $msg=mysqli_error($con);
  if(mysqli_query($con,$sql)) {
    $response["value"] = 1;
    $response["message"] = "Berhasil dihapus";
    echo json_encode($response);
  } else {
    $response["value"] = 0;
    $response["message"] = "oops! Gagal dihapus! \n\n Error Karena:\n".mysqli_error($con);
    echo json_encode($response);
  }
  mysqli_close($con);
}
