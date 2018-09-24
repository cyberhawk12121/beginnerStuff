const countries= ['India', 'Australia', 'USA', 'England','Pakistan','Nepal'];

function display(){
setTimeout(() => {
   let html='';
   countries.forEach((country)=>{
       html+=  `<li> ${country} </li`;
   });
   document.body.innerHTML=html;
}, 1000);   // It's in milliseconds, i.e. =1 second
}