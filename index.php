<!DOCTYPE HTML>
<html lang="en">

<head>
	<?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/head.php"; ?>
	<link rel="stylesheet" href="style.min.css">
</head>

<body>
	<header>
		<?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/header.php"; ?>
	</header>

	<main>
		<noscript>
			<b>Warning: JavaScript must be enabled for this website to function properly.</b>
			<br><br>
		</noscript>

		<button type="button" name="paste" id="paste" onclick="pasteToBin()"
			title="push button to convert clipboard content to ascii">Paste and decode</button>

		<div role="table" aria-labelledby="table-name" aria-describedby="table-description">
			<div role="caption">
				<h2 id="table-name">Output</h2>
				<p id="table-description">
					This table shows the inserted text, broken down into individual characters, with the corresponding
					ASCII code and control character, if available.
				</p>
			</div>
			<div role="rowgroup" id="table-content">
				<div role="row">
					<div role="columnheader" id="col-header-nummer">Number</div>
					<div role="columnheader" id="col-header-string">String</div>
					<div role="columnheader" id="col-header-ascii">Ascii code</div>
					<div role="columnheader" id="col-header-steuerzeichen">Control character</div>
				</div>
			</div>
		</div>
	</main>
</body>
<script src="script.min.js"></script>

</html>
