<?php

require_once "../Helper/Input.php";
require_once "../BusinessLogic/RemoveTodolist.php";

function ViewRemoveTodolist()
{
    echo "MENGHAPUS TODO" . PHP_EOL;
    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x"){
        echo "Batal menambah todo" . PHP_EOL;
    }else {
      $success = removeTodoList($pilihan);

    if($success){
        echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
    }else{
        echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
    }
}

    


    
}

?>