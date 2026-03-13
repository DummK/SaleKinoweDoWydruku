let selectedSeats = [];

window.addEventListener("DOMContentLoaded", () => {
    const selecto = new Selecto({
        container: document.body,
        dragContainer: document.body,
        selectableTargets: document.querySelectorAll(".seat"),
        selectByClick: false,
        selectFromInside: true,
        continueSelect: true,
        toggleContinueSelect: "shift",
        keyContainer: window,
        hitRate: 10,
    });

    // callback zaznaczania przez przeciąganie
    selecto.on("select", e => {
        e.added.forEach(el => {
            const cb = el.querySelector("input[type=checkbox]");
            if(cb) cb.checked = true;

            const id = cb.id;
            if (!selectedSeats.includes(id)) {
                selectedSeats.push(id);
            }

            el.classList.add("selectedSeat");
        });
        e.removed.forEach(el => {
            const cb = el.querySelector("input[type=checkbox]");
            if(cb) cb.checked = false;

            const id = cb.id;
            selectedSeats = selectedSeats.filter(s => s !== id);

            el.classList.remove("selectedSeat");
        });
    });

    // callback dla ręcznego klikania checkboxów
    const checkboxes = document.querySelectorAll(".inputClass");
    checkboxes.forEach(cb => {
        cb.addEventListener("change", function () {
            const id = this.id;
            const seat = this.closest(".seat");

            if (this.checked) {
                if (!selectedSeats.includes(id)) selectedSeats.push(id);
                seat.classList.add("selectedSeat");
            } else {
                selectedSeats = selectedSeats.filter(s => s !== id);
                seat.classList.remove("selectedSeat");
            }
        });
    });
});