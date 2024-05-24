document.addEventListener('DOMContentLoaded', () => {
    const seats = document.querySelectorAll('.seat.available');

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            const row = seat.getAttribute('data-row');
            const col = seat.getAttribute('data-col');

            // Display the pop-up message
            const confirmation = window.confirm("RESERVE THIS SEAT?");
            // const confirmation = window.confirm(`RESERVE THIS SEAT? (${row}, ${col})`);
            if (confirmation) {
                seat.classList.add('selected');
            }
        });
    });
});
