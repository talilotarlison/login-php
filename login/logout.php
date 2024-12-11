<?php
session_start();
// Destroi apenas a sessao selecionada
//unset($_SESSION['email']);
// Destroi todas as sessao
session_destroy();
header('Location: index.php');
exit()

?>