function filterTable() {
let dropdown, table, rows, cells, department, filter, sum, average, total;
dropdown = document.querySelector(".dep-filter");
table = document.getElementById("emp-table");
rows = table.getElementsByTagName("tr");
filter = dropdown.value;
sum = document.getElementById("sum");
average = document.getElementById("average");

// Loops through rows and hides those with countries that don't match the filter
for (let row of rows) { // `for...of` loops through the NodeList
    cells = row.getElementsByTagName("td");
    annualSalary = cells[9] || null; 
    department = cells[3] || null; // gets the 2nd `td` or nothing
    // if the filter is set to 'All', or this is the header row, or 2nd `td` text matches filter
    if (filter === "All" || !department || (filter === department.textContent)) {
    row.style.display = ""; // shows this row
    let subTotal = Array.from(table.rows).slice(1).reduce((total,row) => {
                    return total + parseFloat(row.cells[9].innerHTML); 
            }, 0);
            console.log("sub",subTotal);
        }
    else {
    row.style.display = "none"; // hides this row
    }
}
}

filterTable();


// function updateSubTotal() {
//     let subTotal = Array.from(table.rows).slice(1).reduce((total,row) => {
//             return total + parseFloat(row.cells[9].innerHTML); 
//     }, 0);
//     sum.append(innerHTML = "$" + subTotal.toFixed(2));
// }

//   updateSubTotal()

// function averageAge() {
//     let subTotal = Array.from(table.rows).slice(1).reduce((total, row) => {
//       return total + parseFloat(row.cells[7].innerHTML)/row.cells[7].length;      
//     }, 0);

//     average.append(innerHTML = subTotal);
//   }

//   averageAge()