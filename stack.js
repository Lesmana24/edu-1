let max = 20
let stack = [max]

for (let i = 0; i < max; i++) {
    stack[i] = i + 1
}
console.log(stack)

stack.push(100)
stack.push(200)
stack.push(50)
stack.pop()
console.log(stack)