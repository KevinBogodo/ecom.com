<?php
session_start();
unset($_SESSION['auth']);
// $_SESSION['flash']['danger'] = 'vous ete maintenant déconnecté';
header ('location: index.php');
