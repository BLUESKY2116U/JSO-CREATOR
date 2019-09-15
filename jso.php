<!DOCTYPE html>
<html>
<head>
	<title>Script JSO Creator</title>
	<!--
    =========================================================
    * JSO CREATOR
    =========================================================
    * Github : https://github.com/BLUESKY2116U/JSO-CREATOR
    * Copyright 2019 CYBER LION SQUAD (http://cyberlionsquad.otzo.com)
    * Script by MR.G4N70XY (https://wa.me/6281296645898)
    =========================================================
    * HARGAI PEMBUAT SCRIPT, JANGAN HAPUS BAGIAN INI!!!
    * JANGAN EDIT SCRIPT INI KALO GAK MAU ERROR!!!
    -->
	<script>
		function runCharCodeAt() {
			input = document.charCodeAt.input.value;
			output = "";
			for(i=0; i<input.length; ++i) {
				if (output != "") output += ", ";
				output += input.charCodeAt(i);
			}
			document.charCodeAt.output.value = output;
		}
	</script>
</head>
<body background="https://kompas.web.id/wp-content/uploads/2017/12/Wallpaper-Keren-Untuk-Desktop-Asus.jpg">
<body>
<center>
	<font face="Corbel" size="7" color="lighblue">Script JSO Creator</font>
	<font face="Corbel" size="3" color="blue">CYBER LION SQUAD</font>
	
	<form name="charCodeAt" method="post">
	<br></br>
		<textarea name="input" style="width: 200px;height: 100px;" placeholder="Script Deface"></textarea><br><br>
		<input type="button" onclick="runCharCodeAt()" value="Convert"><br><br>
		<textarea name="output" style="width: 200px;height: 100px;"></textarea><br><br>
		<input type="submit" name="submit" value="Create!!">
	</form>
	<br><br>
  <font face="Corbel" size="3" color="blue">Copyright 2019 <a href="http://cyberlionsquad.otzo.com/">CYBER LION SQUAD</a></font>
 </center>
</body>
</html>
