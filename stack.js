class Stack {
    constructor() {
      this.items = [];
    }
  
    push(element) {
      this.items.push(element);
    }
  
    pop() {
      if (this.isEmpty()) {
        return "Stack is empty";
      }
      return this.items.pop();
    }

    peek() {
      if (this.isEmpty()) {
        return "Stack is empty";
      }
      return this.items[this.items.length - 1];
    }
  
    isEmpty() {
      return this.items.length === 0;
    }
  
    // Mengembalikan ukuran stack
    size() {
      return this.items.length;
    }
  
    // Menghapus semua elemen stack
    clear() {
      this.items = [];
    }
  
    print() {
      console.log(this.items.toString());
    }
  }

const myStack = new Stack();

myStack.push(10);
myStack.push(20);
myStack.push(30);

// Menampilkan stack
myStack.print(); // Output: 10,20,30

// Melihat elemen teratas
console.log(myStack.peek()); // Output: 30

// Menghapus elemen teratas
console.log(myStack.pop()); // Output: 30

// Menampilkan stack setelah pop
myStack.print(); // Output: 10,20

// Memeriksa ukuran stack
console.log(myStack.size()); // Output: 2

// Memeriksa apakah stack kosong
console.log(myStack.isEmpty()); // Output: false

// Mengosongkan stack
myStack.clear();
console.log(myStack.isEmpty()); // Output: true