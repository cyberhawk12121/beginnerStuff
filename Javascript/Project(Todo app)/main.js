// Todo from the text form  

document.querySelector('#add').addEventListener('click',() => {
      let listOfTodo = document.createElement('li'); // Create the HTML element <li>.
      document.querySelector('#ul').appendChild(listOfTodo)
      let todoText= document.querySelector('#input').value
      listOfTodo.textContent= todoText;
} )

// numberofTodos= document.querySelector('#numOfTodos').value; // Take the number of todos user wants to add
// document.querySelector('#add').addEventListener('click', function todo(number){
//       for (let index = 0; index < number; index++) {
//                   let todo= document.querySelector('#input').value // Select the input form to retrieve the value inside it. 
//                   var listOfTodo = document.createElement('li'); // Create the HTML element <li>.
//                   listOfTodo.textContent= todo; // Add the content that user puts in the text input, into the list that I created      
//             }
//       })


// todo(numberofTodos);
