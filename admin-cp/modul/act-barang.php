<?php
if (isset($_POST['save-barang'])) {
   $data = [
      'barang'    => $_POST['barang'],
      'jenis' => $_POST['jenis'],
      'berat'       => $_POST['berat']
   ];
