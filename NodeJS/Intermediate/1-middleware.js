express= require('express');
bodyParser= require('body-parser')
route1= require('./Custom Modules/1-module')
app= express();
app.set('view engine', 'ejs');
urlencodedParser= bodyParser.urlencoded({extended:false});
app.use('/css' , express.static('./css'));
route1(app);    // Now we can use the express properties in the module file.
app.listen(3000);