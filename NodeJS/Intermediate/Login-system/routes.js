module.exports= function(app, urlencodedParser){
passport= require('passport');   
// localStrategy = require('passport-local').Strategy;
require('./passport.config');


    app.get('/', function(req, res, next){
        res.render('home');
    })

    app.get('/signup', function(req, res, next) {
       res.render('signup');
   });

   app.get('/profile', function(req, res, next){
       res.render('profile');
   })

//     app.post('/signup', urlencodedParser, function(req, res) {
//       // Passport authentication 
//       console.log(req.body.username);
//       console.log(req.body.password);
//       res.render('home');
//    });

   app.post('/signup:username' , passport.authenticate('local.signup', {
       successRedirect: '/profile',
       failureRedirect: '/signup',
    //    failureFlash: true,
   })

, function(req,res){
    username= req.body.username;
    password= req.body.password;
    console.log(username+ "<br>"+ password);
    
})


   app.get('/login', function(req, res, next){
    res.send("First Create this Page");
   })
}