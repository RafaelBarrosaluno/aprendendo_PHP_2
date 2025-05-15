<?php
// Recebe os dados do formulário com a variável $_POST
$matricula = $_POST["matricula"];
$curso = $_POST["curso"];
$turno = $_POST["turno"];
$disciplina = $_POST["disciplina"];
$opiniao = $_POST['opiniao'];
$receberEmail = $_POST['receberEmail'];
// Exibe os dados na página de resposta: RespForm062.php
echo "Os dados recebidos do formulário Form06.2 são: <p>";
echo "<table width = '400' border='1' cellspacing='0' cellpadding='0'>
<tr>
<td width = '150'>Matricula:<td>
<td width = '400'>$matricula</td>
</tr>
<tr>
<td width = '150'>Curso:<td>
<td width = '400'>$curso</td>
</tr>
<tr>
<td width = '150'>Turno:<td>
<td width = '400'>$turno</td>
</tr>
<tr>
<td width = '150'>Disciplina:<td>
<td width = '400'>$disciplina</td>
</tr>
</table>
";
echo "Opiniao sobre o site: <strong>$opiniao </strong><br /><br />";
echo "Desejo receber informacoes sobre as novidades no site : <strong>$receberEmail </strong><br /><br
/";
?>
<html>
<head><title>Curso de PHP</title>
</head>
<body>
<p><font face="Arial, Helvetica, sans-serif" size="4">
<a href="Form06.3.html">Clique aqui para navegar para o formulario Form06.3</a>
</font>
</body>
</html>
