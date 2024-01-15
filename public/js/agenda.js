function getAgendas() {
    var selectedDate = document.getElementById("selectedDate").value;
    if (selectedDate) {
        // Use AJAX or fetch to send the selected date to the server
        // and update the agendas based on the response
        // You can use Laravel routes and controllers to handle the backend logic
        // For simplicity, I'll show a basic example using fetch
        fetch(`/get-agendas/${selectedDate}`)
            .then((response) => response.json())
            .then((data) => updateAgendas(data));
    } else {
        alert("Please select a date.");
    }
}

function updateAgendas(data) {
    // Update the UI with the new agendas
    // You may need to modify this based on your actual data structure
    var agendaContainer = document.getElementById("agendaContainer");
    agendaContainer.innerHTML = ""; // Clear existing agendas

    data.forEach((item) => {
        // Create and append new agenda elements
        var agendaCard = document.createElement("div");
        agendaCard.className =
            "card rounded-4 mx-auto border-0 bg-blue-18 my-3";

        var cardBody = document.createElement("div");
        cardBody.className = "card-body";

        var agendaTitle = document.createElement("p");
        agendaTitle.className = "fs-md mb-2";
        agendaTitle.innerText = item.nama;

        // ... Add other elements as needed

        cardBody.appendChild(agendaTitle);
        agendaCard.appendChild(cardBody);
        agendaContainer.appendChild(agendaCard);
    });
}
