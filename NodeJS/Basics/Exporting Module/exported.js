var url= 'https://hello.com/Welcome'
function message(){
    console.log('Welcome');
}

// By Exporting it, we made the function 'message' and the variable 'url' public and available to other modules.
module.exports.Message= message;

// Module is a piece of code. Like we say in OOP we practice Modularity, 
// i.e. We divide the code in chunks of smaller code 
// pieces to help decide which parts to make public and which private. 
// Just like we do in classes.