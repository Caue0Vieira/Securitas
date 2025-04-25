import './bootstrap';
import 'admin-lte';

document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('logo');
    const fileNameSpan = document.getElementById('logo-name');

    input.addEventListener('change', function () {
        const file = input.files[0];
        fileNameSpan.textContent = file ? file.name : 'Nenhum arquivo escolhido';
    });
});



