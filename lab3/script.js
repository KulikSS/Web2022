const table = document.createElement("table");
const add_line_btn = document.getElementById("add_line");
let lineNum = 0;

function addTable() {
    if (document.getElementById('table') != null){
        alert("Table already exists");
    }
    else {

        table.innerHTML = "<table>\n" +
            "<tr>\n" +
            "      <th>\n" +
            lineNum+
            "      </td>\n" +
            "     </td>\n" +
            "      <td>\n" +
            "      </td>\n" +
            "</tr>"
        "              </table>";

        table.setAttribute('id','table')
        document.body.append(table);
        lineNum++;
        document.getElementById("add_line").disabled = false;
        document.getElementById("delete_line").disabled = false;
        document.getElementById("create_table").disabled = true;
    }
}

function addLine(){
    let tab = table.insertRow();
    tab.insertCell().append(lineNum);
    tab.insertCell().append("Something");
    lineNum++;
}

function deleteLine(){
    if (document.getElementById('num').value=="") {
        alert("Enter a number please");
        return null;
    }
    num = document.getElementById('num').value;
    try {
        table.deleteRow(num);
    }
    catch (DOMexcepion){
        alert("There is no line with this number")
    }
}
