let buttons = document.querySelectorAll('button')
let display = document.querySelector('input')
buttons.forEach(button => {
    button.addEventListener('click', (e) => {
        let button = e.target
        if (button.innerHTML == 'AC') 
            display.value = ''
        else if(button.innerHTML == '=')
            display.value = eval(display.value)
        else if(button.innerHTML == 'CE')
            display.value = display.value.slice(0, -1)
        else
            display.value += button.innerHTML
     })
})