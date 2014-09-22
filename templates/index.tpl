<html>
	<head>
		<meta charset="utf-8"/>	
	</head>
	<body>
		<table>
			<tr>
				<td>{$imie}</td>
				<td>{$nazwisko}</td>
			</tr>
		</table>
		<table border="1"> 
			<tr>
				{section name=pracownicy loop=$pracownicy}
					<td>{$pracownicy[pracownicy]}</td>
				{/section}
			</tr>
		</table>
		<table border="1">
			<tr>
				<td>Imię</td>
				<td>Stanowisko</td>
			</tr>
			{foreach item=pracownik from=$pracownicy2}	
				<tr>
					<td>{$pracownik.imie}</td>
					<td>{$pracownik.stanowisko}</td>
				</tr>
			{/foreach}
		</table>
	</body>
</html>