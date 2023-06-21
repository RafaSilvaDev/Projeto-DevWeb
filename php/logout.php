<?php
session_start();

require 'config.php';

session_unset();
session_destroy();

echo '<script language="JavaScript" charset="utf-8">alert("Usuário desconectado com sucesso!")</script>';
echo '<meta HTTP-EQUIV="refresh" CONTENT="0; URL=../index.html">';
