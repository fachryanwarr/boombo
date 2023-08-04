function count(seat_id) {
    const seats = document.getElementsByName("seat");
    const price = document.getElementById("ticket_price").innerHTML;

    const price_label = document.getElementById('price');
    const price_field = document.getElementById('total_price');
    const selected = document.getElementById('selected');

    let limit = 6;
    let total = 0;
    let selected_seat = [];

    for (i = 0; i < seats.length; i++) {
        if (seats[i].checked) {
            total++;

            if (total > limit) {
                document.getElementById(seat_id).checked = false;
                window.alert("The maximum number of seats selected is 6")
                return false;
            }

            selected_seat.push(seats[i].id);
        }
    }

    price_label.innerHTML = total * price;
    price_field.value = total * price;
    selected.value = selected_seat;
}