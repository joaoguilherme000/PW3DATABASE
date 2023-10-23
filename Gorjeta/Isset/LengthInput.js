const valorContaInput = document.getElementById('valor');

valorContaInput.addEventListener('input', function () {
    const valorInserido = parseFloat(this.value);
    const min = parseFloat(this.getAttribute('min'));
    const max = parseFloat(this.getAttribute('max'));

    if (isNaN(valorInserido) || valorInserido < min) {
        this.value = min;
    } else if (valorInserido > max) {
        this.value = max;
    }
});