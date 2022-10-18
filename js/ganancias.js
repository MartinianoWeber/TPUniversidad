const ganancias = document.querySelectorAll('.ganancias')
const lastTable = document.querySelector('#lastTable')

let arr = []
ganancias.forEach(ganancia => {
    arr.push(parseInt(ganancia.textContent))
})
let total = arr.reduce((a,b)=> a + b, 0)

console.log(arr)

let tr = document.createElement('tr')
let td = document.createElement('td')
td.textContent = `El total ganado: ${total}`
tr.appendChild(td)
lastTable.appendChild(tr)

