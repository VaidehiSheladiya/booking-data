
function calculatePrice() {
    const age = document.getElementById('age').value;
    const ticketType = document.getElementById('ticket_type').value;
    let price = 0;

    
    if (ticketType === 'regular') {
        if (age < 18) {
            price = 10; 
        } else if (age >= 18 && age <= 60) {
            price = 20; 
        } else {
            price = 15; 
        }
    } else if (ticketType === 'vip') {
        if (age < 18) {
            price = 30; 
        } else if (age >= 18 && age <= 60) {
            price = 50; 
        } else {
            price = 40;
        }
    }

    document.getElementById('calculatedPrice').innerText = `Ticket Price: $${price}`;
}

document.getElementById('ticketForm').addEventListener('change', calculatePrice);
