// op and history document 
let op = document.getElementById("op");
let history = document.getElementById("history");

// getting innerHtml 
const getID = (element) => {
    let val = document.getElementById(element.id).innerHTML;
    op.innerHTML += val;
}

// calculataion logic
const equal = () => {
    try {
        let expression = op.innerHTML;
        if(expression) {
            let ans =  eval(expression.replace("^", "**"));
            op.innerHTML = ans;
            $("#history").prepend(`<div class="alert alert-warning">${expression} = ${ans}<div>`);
        } else {
            alert("Please enter expression.")
        }
    } catch (err) {
        alert("Invalid expression.");
    }
    
}
    
// backspace 
const backspace = () => op.innerHTML = op.innerHTML.slice(0, op.innerHTML.length - 1);

// clear 
const clr = () => op.innerHTML = "";