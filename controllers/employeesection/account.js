function change1() {
    let name = document.getElementById('emp1').value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../../controllers/employeesection/accountsection.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change2() {
    let name = document.getElementById('emp2').value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../../controllers/employeesection/accountsection.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}