function change1() {
    let name = document.getElementById('emp1').value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../../controllers/managersection/managersection.php?name=' + name, true);
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
        xhttp.open('GET', '../../controllers/managersection/managersection.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change3() {
    let name = document.getElementById('emp3').value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../../controllers/managersection/managersection.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change4() {
    let name = document.getElementById('emp4').value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../../controllers/managersection/managersection.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change5() {
    let name = document.getElementById('emp5').value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../../controllers/managersection/managersection.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change6() {
    let name = document.getElementById('emp6').value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '../../controllers/managersection/managersection.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}