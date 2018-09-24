// Modules
const express= require('express'),
mongoose= require('mongoose'),
// session= require(express-session),
bodyParser= require('body-parser');
csrf= require('csurf');
passport= require('passport');
routes = require('./routes');
// require('./passport.config')(passport);    
app = express();
var port= process.env.PORT||3000;

// Set view engine
app.set('view engine', 'ejs');

// connect to database
const db= 'mongodb://localhost/database-2' ;
mongoose.connect(db)
.then(()=> console.log("connected to Database"))
.catch((err) => console.log(err))

// Middleware
urlencodedParser= bodyParser.urlencoded({extended: false});
// To get the static files from a certain folder: 
// SYNTAX : express.static(folder_address, [options]);
app.use('/public' , express.static('public'))
// Specifying "/css" makes it a path prefix. Read here https://expressjs.com/en/starter/static-files.html for more info.
routes(app, urlencodedParser);

app.listen(port);