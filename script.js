function pasteToBin() {
    navigator.clipboard.readText()
        .then(text => {
            // Mapping für ASCII-Steuerzeichen und Sondernamen
            const asciiNames = new Map([
                [0, "NUL"], [1, "SOH"], [2, "STX"], [3, "ETX"], [4, "EOT"], [5, "ENQ"], [6, "ACK"], [7, "BEL"], [8, "BS"], [9, "TAB"], [10, "LF"], [11, "VT"], [12, "FF"], [13, "CR"], [14, "SO"], [15, "SI"], [16, "DLE"], [17, "DC1"], [18, "DC2"], [19, "DC3"], [20, "DC4"], [21, "NAK"], [22, "SYN"], [23, "ETB"], [24, "CAN"], [25, "EM"], [26, "SUB"], [27, "ESC"], [28, "FS"], [29, "GS"], [30, "RS"], [31, "US"], [32, "SPACE"], [127, "DEL"]
            ]);

            // Funktion zur Erkennung von Whitespace- und Newline-Zeichen
            function isWhitespaceOrNewline(char) {
                return /\s/.test(char);
            }

            // Erzeuge das Array mit Zeicheninformationen
            const charInfoArray = text.split("").map(char => {
                const ascii = char.charCodeAt(0);
                const name = asciiNames.get(ascii) || " ";
                const displayChar = isWhitespaceOrNewline(char) ? " " : char;
                return { char: displayChar, ascii, name };
            });

            createTableContent(charInfoArray);
        })
}

function createTableContent(charInfoArray) {
    const tableContent = document.querySelector('#table-content');
    tableContent.innerHTML = "";

    const header = createTableHeader();
    tableContent.appendChild(header);

    charInfoArray.forEach((info, index) => {
        const row = document.createElement("div");
        row.setAttribute("role", "row");

        const cellNumber = document.createElement("div");
        cellNumber.setAttribute("role", "cell");
        cellNumber.setAttribute("headers", "col-header-number");
        cellNumber.textContent = index + 1;

        const cellChar = document.createElement("div");
        cellChar.setAttribute("role", "cell");
        cellChar.setAttribute("headers", "col-header-string");
        cellChar.textContent = info.char;

        const cellAscii = document.createElement("div");
        cellAscii.setAttribute("role", "cell");
        cellAscii.setAttribute("headers", "col-header-ascii");
        cellAscii.textContent = info.ascii;

        const cellName = document.createElement("div");
        cellName.setAttribute("role", "cell");
        cellName.setAttribute("headers", "col-header-control");
        cellName.textContent = info.name || "";

        row.appendChild(cellNumber);
        row.appendChild(cellChar);
        row.appendChild(cellAscii);
        row.appendChild(cellName);

        tableContent.appendChild(row);
    });
}

function createTableHeader() {
    const row = document.createElement("div");
    row.setAttribute("role", "row");

    const number = document.createElement("div");
    number.setAttribute("role", "columnheader");
    number.id = "col-header-number";
    number.textContent = "Number";

    const string = document.createElement("div");
    string.setAttribute("role", "columnheader");
    string.id = "col-header-string";
    string.textContent = "String";

    const ascii = document.createElement("div");
    ascii.setAttribute("role", "columnheader");
    ascii.id = "col-header-ascii";
    ascii.textContent = "Ascii code";

    const control = document.createElement("div");
    control.setAttribute("role", "columnheader");
    control.id = "col-header-control";
    control.textContent = "Control character";

    row.appendChild(number);
    row.appendChild(string);
    row.appendChild(ascii);
    row.appendChild(control);
    return row;
}
