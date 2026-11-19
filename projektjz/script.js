const zadanie = document.querySelector('#zadanie')
const przycisk = document.querySelector('#przycisk')
const lista = document.querySelector('#lista')

przycisk.addEventListener('click', () =>{
  const wartosc = zadanie.value
  const element = document.createElement('li')
  const checkbox = document.createElement('input')
  const usuwanie = document.createElement('button')
  const element = document.createElement('butto')
  checkbox.type = 'checkbox'
    element.appendChild(butto)
    butto.type = 'butto'
    element.innerText = wartosc
    lista.appendChild(element)
    element.appendChild(checkbox)
    
})

const list = document.getElementById("lista");

list.addEventListener("click", (przekreslenie) => {
  const item = przekreslenie.target.closest("li");
  if (!item) return;

  item.classList.toggle("kreska");
});

localStorage.setItem("zadania", "zadanie")

butto.addEventListener('click', () => {
  element.remove()
})