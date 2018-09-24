module.exports= function(app){
    
    app.get('/' , function(req, res){
        res.render('index');
    })

    app.post('/login',urlencodedParser,function(req, res){
        console.log(req.body.name);
        // A simple validation (Not even simple, It's below simple)
        if(req.body.name== "sameer")
        res.render('login-success', {data: req.body});
        else {
        res.status(400).send("You cannot login");
        
    }
    })

};
