const max=20
let stack = new Array(max)
let top = -1
console.log("Stack Kosong")

function push(value) {
    if (top <= max) {
        top++
        stack[top] = value
    } else {
        console.log("Stack Penuh")
    }
}

function pop() {
    if (top >= 0) {
        let value = stack[top]
        top--
        return value
    } else {
        console.log("Stack Kosong")
    }
}

function peek() {
    if (top >= 0) {
        return console.log("Elemen Stack" + stack)
    } else {
        console.log("Stack Kosong")
    }
}
for (let i = 0; i < max; i++) {
    push(i + 1)
}
console.log("Stack: " + stack)
console.log("Panjang Data: " + stack.length)
console.log(stack)
push(21)