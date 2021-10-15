
const deleteButtonElement = document.querySelectorAll('.delete-button');
console.log(deleteButtonElement);

deleteButtonElement.forEach(el => {

    el.addEventListener('submit', function (e) {
        e.preventDefault();
        const confirm = window.confirm('Sei sicuro di voler procedere?');
        if (confirm) this.submit();
    })
});

