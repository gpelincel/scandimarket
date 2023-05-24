let products_form = document.querySelectorAll('.product-info');
let select = document.querySelector('select');

select.addEventListener('change', () => {
    products_form.forEach(element => {
        if (select.value === element.id) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    });
});

