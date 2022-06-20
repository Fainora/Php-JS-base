const calc = document.querySelector('.calc');
const result = document.querySelector('#result');

calc.addEventListener('click', function(event) {
    /* События срабатывает при нажатии на поле вывода "result" (т.е. дублирует введенный результат)
        и чтобы этого не было, мы проверяем событие на наличие класса "btn" (которое у наших кнопок).
        Если такого класса нет ("btn"), то выходим из функций */
    if(!event.target.classList.contains('btn'))
        return;
    const value = event.target.innerText; //получаем текстовое содержимое нашего элемента
    switch(value) {
        case 'C':
            result.innerText = '';
            break;
        case '=':
            result.innerText = eval(result.innerText);
            break;
        default:
            result.innerText += value;
    }
});