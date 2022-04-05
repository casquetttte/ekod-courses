## v1.1
```js
const buttons = document.getElementsByClassName("btn")

for (const button of buttons) {
  button.addEventListener("click", clickBtn)
}
const resultZone = document.getElementById("result")
let calcul = []
function clickBtn(evt) {
  const symbole = evt.target.innerText
  const lastSymbole = resultZone.innerText[resultZone.innerText.length - 1]
  if (symbole === "=") {
    faireCalculTotal()
    resultZone.innerText = calcul[0]
  } else if (symbole === "c") {
    resultZone.innerText = ""
    calcul = []
  } else {
    if (isNaN(symbole) && isNaN(lastSymbole)) {
      resultZone.innerText = resultZone.innerText.slice(0, -1)
    }
    if (isNaN(symbole) && resultZone.innerText === "") {
      return
    }
    resultZone.innerText += symbole
    if (!isNaN(symbole) && !isNaN(lastSymbole)) {
      calcul[calcul.length - 1] += symbole
    } else {
      calcul.push(symbole)
    }
  }
}
function faireCalculTotal() {
  while (calcul.length >= 3) {
    console.log(calcul);
    const posMult = calcul.indexOf("*")
    const posDiv = calcul.indexOf("/")
    let posOperation = 1
    if (posMult === -1 && posDiv === - 1) {
      posOperation = 1
    } else if (posMult !== -1 && posDiv === - 1) {
      posOperation = posMult
    } else if (posMult === -1 && posDiv !== -1) {
      posOperation = posDiv
    } else if (posMult !== -1 && posDiv !== -1 && posMult < posDiv) {
      posOperation = posMult
    } else if (posMult !== -1 && posDiv !== -1 && posDiv < posMult) {
      posOperation = posDiv
    }
    calcul.splice(posOperation - 1, 3, faireCalcul(posOperation))
  }
}
function faireCalcul(position) {
  const symboleCalcul = calcul[position]
  if (symboleCalcul === "+") {
    return parseInt(calcul[position - 1]) + parseInt(calcul[position + 1])
  } else if (symboleCalcul === "-") {
    return calcul[position - 1] - calcul[position + 1]
  } else if (symboleCalcul === "/") {
    return calcul[position - 1] / calcul[position + 1]
  } else if (symboleCalcul === "*") {
    return calcul[position - 1] * calcul[position + 1]
  }
}
```
