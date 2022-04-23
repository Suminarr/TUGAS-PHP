<?php
    function kelulusan($total_nilai){
        if($total_nilai > 55){
            return 'LULUS';
        }else{
            return 'TIDAK LULUS';
        }
    }
?>