<?php
session_start();
    if(isset($_SESSION['usu_id'])){
    session_destroy();?>
    <script>alert('Sessão finalizada com sucesso')</script>
    <?php } else {?>
    <script>alert('Erro!! nenhuma sessão ativa')</script>
    <?php }
?>