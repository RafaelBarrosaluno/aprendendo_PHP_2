<?php
// Recebe os dados do formulário com a variável $_POST
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$ie = $_POST["ie"];
// Exibe os dados na página de resposta: RespForm061.php
echo "Os dados recebidos do formulário Form 06 são: <p>";
echo "<table width = '400' border='1' cellspacing='0' cellpadding='0'>
<tr>
<td width = '200'>Nome:<td>
<td width = '300'>$nome</td>
</tr>
<tr>
<td width = '200'>Sobrenome:<td>
<td width = '300'>$sobrenome</td>
</tr>
<tr>
<td width = '200'>Instituicao de Ensino:<td>
<td width = '300'>$ie</td>
</tr>
</table>
";
?>
<html>
<head><title>Curso de PHP</title>
</head>
<body>
<p><font face="Arial, Helvetica, sans-serif" size="4">
<a href="form06.2.html">Clique aqui para navegar para o formulario Form 06.2</a>
</font>
</body>
</html>
