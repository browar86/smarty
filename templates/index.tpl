<html>
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
	</body>
</html>