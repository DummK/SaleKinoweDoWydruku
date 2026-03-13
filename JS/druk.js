function printDiv() {
    // Sprawdzamy, czy użytkownik cokolwiek wybrał
    const selected = document.querySelectorAll('.inputClass:checked');

    if (selected.length === 0) {
        alert("Najpierw wybierz miejsca, które chcesz wydrukować!");
        return;
    }

    // Wywołanie okna drukowania
    window.print();
}