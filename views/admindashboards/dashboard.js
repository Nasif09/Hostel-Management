function change1() {
    let name = document.getElementById("emp1").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change2() {
    let name = document.getElementById("emp2").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change3() {
    let name = document.getElementById("emp3").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change4() {
    let name = document.getElementById("emp4").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change5() {
    let name = document.getElementById("emp5").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function change6() {
    let name = document.getElementById("emp6").value;
    if (name != "") {
        let xhttp = new XMLHttpRequest();
        xhttp.open(
            "GET",
            "../../controllers/adminsection/adminselection.php?name=" + name,
            true
        );
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                window.location.href = this.responseText;
            }
        }
    }
}
function search() {
    let name = document.getElementById('empshow').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controllers/adminsection/employeedetailsvalidator.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name=' + name);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementsByTagName('p')[0].innerHTML = this.responseText;
        }
    }
}
function searchbranch() {
    let name = document.getElementById('branchid').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../../controllers/adminsection/branchdetailsvalidator.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('name=' + name);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementsByTagName('p')[0].innerHTML = this.responseText;
        }
    }
}
function showavaiablepackage() {
    let name = document.getElementById('branchroom').value;
    if (name != " ") {
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../../controllers/adminsection/getpackage.php?name=' + name, true);
        xhttp.send();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByTagName('select')[7].innerHTML = this.responseText;
            }
        }
    }
}