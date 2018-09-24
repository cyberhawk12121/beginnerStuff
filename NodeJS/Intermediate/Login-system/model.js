model_export= require('./schema');
model_export= User;
async function register(){
    user= new User({
        // username: <Fill the username> , 
        // password: <Fill the password> ,
    })

    // To catch errors, while saving data 
    try{
        saveUser = await user.save();
        console.log(saveUser);
    }catch (error) {
        console.log(error);
    }
   
}

register();