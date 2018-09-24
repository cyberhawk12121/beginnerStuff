/*

Objects are made like this:  

var object= {
    properties: value, ... etc
}
And Also like this ->
*/


// ......... E.g. 1:  ............... //

function Object(name, age){
    this.hello= name;   // hello is the property that saves name of the client
    this.hi= age;      // hi is the property that saves age of the client
}

person = new Object('Sameer', 19);
console.log(person);


// It is same as doing this following thing.
// .............. E.g. 2: ..................//

Object2={};
Object2.name= "sameer";
Object2.age= 19;

name = Object2.name; 
console.log(name);
// In the above example
// Instead of 'this' keyword I wrote the object name two put the key inside it. 
// This tells us that "this" keyword is nothing but referring to that object name.







