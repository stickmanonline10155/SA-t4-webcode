//1
const balance = document.getElementById(
    "balance"
);
const money_plus = document.getElementById(
    "money-plus"
);
const money_minus = document.getElementById(
    "money-minus"
);
const list = document.getElementById("list");
const form = document.getElementById("form");
const text = document.getElementById("text");
const amount = document.getElementById("amount");

//last 
const localStorageTransactions = JSON.parse(localStorage.getItem('transactions'));

let transactions = localStorage.getItem('transactions') !== null ? localStorageTransactions : [];

//5
//Add Transaction
function addTransaction(e) {
    e.preventDefault();
    if (text.value.trim() === '' || amount.value.trim() === '') {
        alert('please add text and amount')
    } else {
        const transaction = {
            id: generateID(),
            text: text.value,
            amount: +amount.value
        }

        transactions.push(transaction);

        addTransactionDOM(transaction);
        updateValues();
        updateLocalStorage();
        text.value = '';
        amount.value = '';
    }
}


//5.5
//Generate Random ID
function generateID() {
    return Math.floor(Math.random() * 1000000000);
}

//2

//Add Trasactions to DOM list
function addTransactionDOM(transaction) {
    //GET sign
    const sign = transaction.amount < 0 ? "-" : "+";
    const item = document.createElement("li");

    //Add Class Based on Value
    item.classList.add(
        transaction.amount < 0 ? "minus" : "plus"
    );

    item.innerHTML = `
    ${transaction.text} <span>${sign}${Math.abs(
        transaction.amount
    )}</span>
    <button class="delete-btn" onclick="removeTransaction(${transaction.id})">x</button>
    `;
    list.appendChild(item);
}

//4

//Update the balance income and expence
function updateValues() {
    const amounts = transactions.map(
        (transaction) => transaction.amount
    );
    const total = amounts
        .reduce((acc, item) => (acc += item), 0)
        .toFixed(2);
    const income = amounts
        .filter((item) => item > 0)
        .reduce((acc, item) => (acc += item), 0)
        .toFixed(2);
    const expense =
        (amounts
            .filter((item) => item < 0)
            .reduce((acc, item) => (acc += item), 0) *
            -1).toFixed(2);

    balance.innerText = `$${total}`;
    money_plus.innerText = `$${income}`;
    money_minus.innerText = `$${expense}`;
}


//6 

//Remove Transaction by ID
function removeTransaction(id) {
    transactions = transactions.filter(transaction => transaction.id !== id);
    updateLocalStorage();
    Init();
}
//last
//update Local Storage Transaction
function updateLocalStorage() {
    localStorage.setItem('transactions', JSON.stringify(transactions));
}

//3

//Init App
function Init() {
    list.innerHTML = "";
    transactions.forEach(addTransactionDOM);
    updateValues();
}

Init();

form.addEventListener('submit', addTransaction);


// SHOWING THE CURRENT DATE
var object = { 0: '星期天', 1: "星期一", 2: "星期二", 3: "星期三", 4: "星期四", 5: "星期五", 6: "星期六", }
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = year + "/" + month + "/" + day + ' ' + object[day];


// CALENDAR NUMBER
// const yearValue = document.querySelector('.year .value');
// const monthValue = document.querySelector('.month .value');
// const dateValue = document.querySelector('.date .value');

// const yearLeftArrow = document.querySelector('.year .left');
// const yearRightArrow = document.querySelector('.year .right');

// const monthLeftArrow = document.querySelector('.month .left');
// const monthRightArrow = document.querySelector('.month .right');

// const dateLeftArrow = document.querySelector('.date .left');
// const dateRightArrow = document.querySelector('.date .right');

// let currentDate = new Date();
// let currentYear = currentDate.getFullYear();
// let currentMonth = currentDate.toLocaleString('default', { month: 'short' });
// let currentDateOfMonth = currentDate.getDate();

// yearValue.innerHTML = currentYear;
// monthValue.innerHTML = currentMonth;
// dateValue.innerHTML = currentDateOfMonth;

// yearLeftArrow.addEventListener('click', function () {
//     currentYear -= 1;
//     yearValue.innerHTML = currentYear;
// });

// yearRightArrow.addEventListener('click', function () {
//     currentYear += 1;
//     yearValue.innerHTML = currentYear;
// });

// monthLeftArrow.addEventListener('click', function () {
//     currentDate.setMonth(currentDate.getMonth() - 1);
//     currentMonth = currentDate.toLocaleString('default', { month: 'short' });
//     monthValue.innerHTML = currentMonth;
// });

// monthRightArrow.addEventListener('click', function () {
//     currentDate.setMonth(currentDate.getMonth() + 1);
//     currentMonth = currentDate.toLocaleString('default', { month: 'short' });
//     monthValue.innerHTML = currentMonth;
// });

// dateLeftArrow.addEventListener('click', function () {
//     currentDate.setDate(currentDate.getDate() - 1);
//     currentDateOfMonth = currentDate.getDate();
//     dateValue.innerHTML = currentDateOfMonth;
// });

// dateRightArrow.addEventListener('click', function () {
//     currentDate.setDate(currentDate.getDate() + 1);
//     currentDateOfMonth = currentDate.getDate();
//     dateValue.innerHTML = currentDateOfMonth;
// });






