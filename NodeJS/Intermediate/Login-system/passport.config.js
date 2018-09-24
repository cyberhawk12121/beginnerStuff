passport= require('passport');
localStrategy= require('passport-local').Strategy;
User= require('./schema');

process.nextTick(function(){

passport.serializeUser(function(user, done){
    done(err, user.id);
})

passport.deserializeUser(function(id, done) {
    model.findById(id, function(err, user) {
        done(err, user);
    })      
})

passport.use('local.signup', new localStrategy({
    usernameField: 'username',  // Both these properties take the name of the properties sent in the post request
    passwordField: 'password',
    passReqToCallback: true,
}, function(req, username, password, done) {
    
    // I should put it in an asynchronous function
   // DID IT
    user.findOne({'username': username}, function(err, user){   // It will check if the user with that username exists in the database 
        if(err)     // If there is any kind of error, throw it! 
        return done(err);
    
        if(user)    // If the username already exists
        return done(null, false, {message: 'E-mail is already in use'});
        
        // Otherwise save the new user
        newUser = new User(); // newUser is a Model
        // Saving username and password in the newUser collection
        newUser.username= username;
        newUser.password= newUser.generateHash(password);

        // Save the user
        newUser.save(function(err) {
            if(err)
            throw err;
            return done(null, newUser);
        })
    });
}));


})