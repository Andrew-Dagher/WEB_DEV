function calculate() {
    // Get the input elements for the quantity of each book
    var webQuantity = document.getElementById("web").value;
    var phpQuantity = document.getElementById("PHP").value;
    var jqueryQuantity = document.getElementById("JQuery").value;

    // Check if any of the input fields are empty
    if (webQuantity === "") {
        alert("You forgot to fill out the Basic Web Programming quantity with an integer");
        event.preventDefault();
        return;
    }

    else if (phpQuantity === "") {
        alert("You forgot to fill out the Intro to PHP with an integer");
        event.preventDefault();
        return;
    }

    else if (jqueryQuantity === "") {
        alert("You forgot to fill out the Advanced JQuery with an integer");
        event.preventDefault();
        return;
    }

    // Check if any of the input fields are not positive integers
    else if (isNaN(Number(webQuantity)) || Number(webQuantity) < 0) {
        alert("The quantity for Basic Web Programming is not a positive integer");
        event.preventDefault();
        return;
    }

    else if (isNaN(Number(phpQuantity)) || Number(phpQuantity) < 0) {
        alert("The quantity for Intro to PHP is not a positive integer");
        event.preventDefault();
        return;
    }

    else if (isNaN(Number(jqueryQuantity)) || Number(jqueryQuantity) < 0) {
        alert("The quantity for Andvanced JQuery is not a positive integer");
        event.preventDefault();
        return;
    }


    // Convert the input values to numbers
    webQuantity = Number(webQuantity);
    phpQuantity = Number(phpQuantity);
    jqueryQuantity = Number(jqueryQuantity);

    // Calculate the total amount for each book based on its quantity and price
    var webTotal = webQuantity * 19.99;
    var phpTotal = phpQuantity * 86.0;
    var jqueryTotal = jqueryQuantity * 55.0;

    // Calculate the total order amount
    var totalAmount = webTotal + phpTotal + jqueryTotal;

    // Display the calculations and the total order amount in the HTML page
    var resultElement = document.getElementById("button");
    resultElement.innerHTML =
        "<p><b>Basic Web Programming (Quantity = </b>" + webQuantity + "<b>): </b>$" + webTotal.toFixed(2) + "</p>" +
        "<p><b>Intro to PHP (Quantity = </b>" + phpQuantity + "<b>): </b>$" + phpTotal.toFixed(2) + "</p>" +
        "<p><b>Advanced JQuery (Quantity = </b>" + jqueryQuantity + "<b>): </b>$" + jqueryTotal.toFixed(2) + "</p>" +
        "<h2><b>Final Total: </b>$" + totalAmount.toFixed(2) + "</h2>";

    // Prevent the form from submitting and refreshing the page
    event.preventDefault();
}
