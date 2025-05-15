<?php
// Recebe os dados do formulário com a variável $_POST
$notaav1 = $_POST["notaav1"];
$notaav2 = $_POST["notaav2"];
$notaatv01 = $_POST["notaatv01"];
$notaatv02 = $_POST["notaatv02"];
$media = ($notaav1 + $notaav2 + $notaatv01 + $notaatv01) / 4;
// Exibe os dados na página de resposta: RespForm063.php
echo "Os dados recebidos do formulário Form063 são: <p>";
echo "<table width = '400' border='1' cellspacing='0' cellpadding='0'>
<tr>
<td width = '100'>Nota AV1:<td>
<td width = '400'>$notaav1</td>
</tr>
<tr>
<td width = '100'>Nota AV2:<td>
<td width = '400'>$notaav2</td>
</tr>
<tr>
<td width = '100'>Nota ATV01:<td>
<td width = '400'>$notaatv01</td>
</tr>
<tr>
<td width = '100'>Nota ATV02:<td>
<td width = '400'>$notaatv02</td>
</tr>
</table>
";
echo "Sua media e : <strong>$media </strong><br />";
if ($media<5)
$desempenho = "Tipico...";
elseif ($media<7)
$desempenho = "Esperado...";
elseif ($media<9)
$desempenho = "Surpreendente! Colou de quem???";
else
$desempenho = "Parabens! Tenho certeza que você estudou bastante";
echo "O seu desempenho foi $desempenho .";
?>
<html>
<head><title>Curso de PHP</title>
</head>
<body>
<p><font face="Arial, Helvetica, sans-serif" size="4">
<a href="Form06.html">Clique aqui para navegar para o formulario Form06</a>
</font>
</body>
</html>
