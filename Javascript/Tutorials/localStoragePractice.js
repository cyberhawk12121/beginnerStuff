// Event Listener
// document.querySelector('#form').addEventListener('submit', submitToLS);

//  function
function submitToLS(event){
    event.preventDefault();     // Prevents the page from reloading on submiting the form
    
    
    // PUTTING THE VALUE INTO THE DIV TO PRINT ON THE DOM
    let text = document.querySelector('#value').value; 
    let list= document.createElement('li');
     list.innerHTML = text;
    document.querySelector('#listlist').appendChild(list);
    //........END........ // 
    

    // We have retrieved the text
    let textArray = JSON.parse(localStorage.getItem('Names')) // I got the array from the
    
    
    if(textArray==  null) // THE REASON WHY- The console was giving me "can't push into null", is because the first time when I parsed the values from the LS, It was returning nothing/NULL. That is why I couldn't add anything into null.  
    {textArray= [] }
    
    
    // PUSH INTO THE ARRAY "textArray"
    textArray.push(text)
    
    
    // Put the array data in the LS after converting it into string using JSON.stringify() function
    localStorage.setItem('Names', JSON.stringify(textArray))

    document.querySelector('#form').reset();    // It resets the form data and lets the user write another set of data in the form inputs.



}

// PUTTING EVENT LISTENER HERE OR IN THE <body> tag, both are the same things.
document.addEventListener('DOMContentLoaded', onload); //LEARNT NEW THING TODAY (04/07/2018)
function onload(){
    // e.preventDefault();
    let names= localStorage.getItem('Names');
    if(names===null)
    return null

    console.log(names);  
    


    // FOREACH() for getting individual values from the arrays.
    JSON.parse(names).forEach((content)=> {
        let list = document.createElement('li');
        list.innerHTML = content;
        document.querySelector('#listlist').appendChild(list);
        console.log(content);
    });

} 