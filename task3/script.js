let tableExists = false;

let names = ["Ирина", "Олег", "Анастасия", "Пётр", "Николай", "Мария", "Иван", "Василиса"];
let cities = ["Санкт-Петебрург", "Владимир", "Саратов", "Ярославль", "Муром", "Воронеж"];

let buttons = document.querySelectorAll(".disabled");
buttons.forEach(btn => {
    btn.setAttribute('disabled', 'disabled');
});

function createTable(){
    if(!tableExists){
    let tblDiv = document.getElementById("dynamicTable");
    let tbl = document.createElement("table");
    tbl.setAttribute('id', 'person-tbl');
    let headerRow = document.createElement('tr');

    let headers = ['№', "Имя", "Возраст", "Город"];

    headers.forEach(headerText => {
        let header = document.createElement('th');
        let textNode = document.createTextNode(headerText);
        header.appendChild(textNode);
        headerRow.appendChild(header); 
    });
    tbl.appendChild(headerRow);
    tblDiv.appendChild(tbl);
    tableExists = true;
    buttons.forEach(btn => {
    btn.removeAttribute('disabled');
    });
    }
    else{
        alert("Таблица уже создана");
    }
}

function addRow(){
    let tbl = document.getElementById("person-tbl");
    let row = tbl.insertRow(-1);

    let numCell = row.insertCell(0);
    let number = document.createTextNode(tbl.rows.length - 1);
    numCell.appendChild(number);

    let nameCell = row.insertCell(1);
    let name = document.createTextNode(names[Math.floor(Math.random() * (names.length-1))]);
    nameCell.appendChild(name);

    let ageCell = row.insertCell(2);
    let age = document.createTextNode(Math.floor(18 + Math.random() * 82));
    ageCell.appendChild(age);

    let cityCell = row.insertCell(3);
    let city = document.createTextNode(cities[Math.floor(Math.random() * (cities.length-1))]);
    cityCell.appendChild(city);


}

function deleteRow(){
    let numberStr = document.getElementById('text-field').value;
    if(Number.isInteger(Number(numberStr)) && Number(numberStr)){
        let number = Number(numberStr);
        let tbl = document.getElementById("person-tbl");
        if(tbl.rows.length <= number){
            alert("Строка с таким номером отсутствует в таблице");
        }
        else{
            tbl.deleteRow(number);
            for (var i = 1, row; row = tbl.rows[i]; ++i) {
                row.cells[0].innerHTML = i;
            }
        }
    }
    else{
        if(!document.getElementById('text-field').value){
            alert("Необходимо ввести номер строки");
        }
        else{
            alert("Номер строки введён не верно");
        }
    }
}