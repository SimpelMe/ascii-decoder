<!DOCTYPE HTML>
<html lang="en">

<head>
	<?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/head.php"; ?>
	<!-- <meta charset="utf-8">
	<title>Ascii-Decoder</title> -->
	<link rel="stylesheet" href="style.min.css">
</head>

<body>
	<header>
		<?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/header.php"; ?>
		<!-- <nav>
			<a id="logo" class="cursordefault" href="/"><img src="../Simpel.png" alt="simpel icon" height="48"
					width="48"></a>
			<h1>Beep-Loop</h1>
			<a id="github" href="https://github.com/SimpelMe/ascii-decoder" target="_blank" rel="noopener noreferrer"
				title="watch source code">
				<img id="github-cat" src="../github.svg" alt="github logo">
			</a>
		</nav> -->
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
		<details>
			<summary>Explaining the control characters</summary>
			<p>Some of the ascii codes represent 
				<a href="https://en.wikipedia.org/wiki/ASCII#Control_characters">control characters</a>. For further details click the links in the table.
			</p>
			<table>
				<thead>
					<tr>
						<th>Dec</th>
						<th>Abbr</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>0</td>
						<td>NUL</td>
						<td><a href="https://en.wikipedia.org/wiki/Null_character">Null</a></td>
					</tr>
					<tr>
						<td>1</td>
						<td>SOH</td>
						<td><a href="https://en.wikipedia.org/wiki/Start_of_Heading">Start of
								Heading</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>STX</td>
						<td><a href="https://en.wikipedia.org/wiki/Start_of_Text">Start of
								Text</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>ETX</td>
						<td><a href="https://en.wikipedia.org/wiki/End-of-Text_character">End of
								Text</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>EOT</td>
						<td><a href="https://en.wikipedia.org/wiki/End-of-Transmission_character">End
								of Transmission</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>ENQ</td>
						<td><a href="https://en.wikipedia.org/wiki/Enquiry_character">Enquiry</a></td>
					</tr>
					<tr>
						<td>6</td>
						<td>ACK</td>
						<td><a href="https://en.wikipedia.org/wiki/Acknowledge_character">Acknowledgement</a></td>
					</tr>
					<tr>
						<td>7</td>
						<td>BEL</td>
						<td><a href="https://en.wikipedia.org/wiki/Bell_character">Bell</a> (Alert)</td>
					</tr>
					<tr>
						<td>8</td>
						<td>BS</td>
						<td><a href="https://en.wikipedia.org/wiki/Backspace">Backspace</a></td>
					</tr>
					<tr>
						<td>9</td>
						<td>HT (TAB)</td>
						<td><a href="https://en.wikipedia.org/wiki/Horizontal_Tab">Horizontal
								Tab</a></td>
					</tr>
					<tr>
						<td>10</td>
						<td>LF</td>
						<td><a href="https://en.wikipedia.org/wiki/Line_Feed">Line Feed</a></td>
					</tr>
					<tr>
						<td>11</td>
						<td>VT</td>
						<td><a href="https://en.wikipedia.org/wiki/Vertical_Tab">Vertical
								Tab</a></td>
					</tr>
					<tr>
						<td>12</td>
						<td>FF</td>
						<td><a href="https://en.wikipedia.org/wiki/Form_Feed">Form Feed</a></td>
					</tr>
					<tr>
						<td>13</td>
						<td>CR</td>
						<td><a href="https://en.wikipedia.org/wiki/Carriage_Return">Carriage
								Return</a></td>
					</tr>
					<tr>
						<td>14</td>
						<td>SO</td>
						<td><a href="https://en.wikipedia.org/wiki/Shift_Out">Shift Out</a></td>
					</tr>
					<tr>
						<td>15</td>
						<td>SI</td>
						<td><a href="https://en.wikipedia.org/wiki/Shift_In">Shift In</a></td>
					</tr>
					<tr>
						<td>16</td>
						<td>DLE</td>
						<td><a href="https://en.wikipedia.org/wiki/Data_Link_Escape">Data Link
								Escape</a></td>
					</tr>
					<tr>
						<td>17</td>
						<td>DC1</td>
						<td><a href="https://en.wikipedia.org/wiki/Device_Control_1">Device
								Control 1</a> (often <a href="https://en.wikipedia.org/wiki/XON">XON</a>)</td>
					</tr>
					<tr>
						<td>18</td>
						<td>DC2</td>
						<td><a href="https://en.wikipedia.org/wiki/Device_Control_2">Device
								Control 2</a></td>
					</tr>
					<tr>
						<td>19</td>
						<td>DC3</td>
						<td><a href="https://en.wikipedia.org/wiki/Device_Control_3">Device
								Control 3</a> (often<a href="https://en.wikipedia.org/wiki/XOFF">XOFF</a>)</td>
					</tr>
					<tr>
						<td>20</td>
						<td>DC4</td>
						<td><a href="https://en.wikipedia.org/wiki/Device_Control_4">Device
								Control 4</a></td>
					</tr>
					<tr>
						<td>21</td>
						<td>NAK</td>
						<td><a href="https://en.wikipedia.org/wiki/Negative-acknowledge_character">Negative
								Acknowledgement</a></td>
					</tr>
					<tr>
						<td>22</td>
						<td>SYN</td>
						<td><a href="https://en.wikipedia.org/wiki/Synchronous_Idle">Synchronous
								Idle</a></td>
					</tr>
					<tr>
						<td>23</td>
						<td>ETB</td>
						<td><a href="https://en.wikipedia.org/wiki/End-of-Transmission-Block_character">End
								of Transmission Block</a></td>
					</tr>
					<tr>
						<td>24</td>
						<td>CAN</td>
						<td><a href="https://en.wikipedia.org/wiki/Cancel_character">Cancel</a></td>
					</tr>
					<tr>
						<td>25</td>
						<td>EM</td>
						<td><a href="https://en.wikipedia.org/wiki/End_of_Medium">End of
								Medium</a></td>
					</tr>
					<tr>
						<td>26</td>
						<td>SUB</td>
						<td><a href="https://en.wikipedia.org/wiki/Substitute_character">Substitute</a></td>
					</tr>
					<tr>
						<td>27</td>
						<td>ESC</td>
						<td><a href="https://en.wikipedia.org/wiki/Escape_character">Escape</a></td>
					</tr>
					<tr>
						<td>28</td>
						<td>FS</td>
						<td><a href="https://en.wikipedia.org/wiki/File_Separator">File
								Separator</a></td>
					</tr>
					<tr>
						<td>29</td>
						<td>GS</td>
						<td><a href="https://en.wikipedia.org/wiki/Group_Separator">Group
								Separator</a></td>
					</tr>
					<tr>
						<td>30</td>
						<td>RS</td>
						<td><a href="https://en.wikipedia.org/wiki/Record_Separator">Record
								Separator</a></td>
					</tr>
					<tr>
						<td>31</td>
						<td>US</td>
						<td><a href="https://en.wikipedia.org/wiki/Unit_Separator">Unit
								Separator</a></td>
					</tr>
					<tr>
						<td>127</td>
						<td>DEL</td>
						<td><a href="https://en.wikipedia.org/wiki/Delete_character">Delete</a></td>
					</tr>
				</tbody>
			</table>

		</details>
	</main>
</body>
<script src="script.min.js"></script>

</html>