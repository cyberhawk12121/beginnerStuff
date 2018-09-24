// In this we'll see that the port we give, i.e. 3000 or 9000 or any random number.
// It is working here on the pc localhost, because all the port numbers are available
// But this might not be the case be in the industry where many ports are already taken
// So we do this so that we don't rely on the given port only.
express= require('express')
app= express();

app.get('/', (req, res)=> {
    res.send('Hello world');
})

const port= process.env.PORT || 3000;   // This is called the environment variable.
app.listen(port, ()=> {console.log(`Listening to port ${port}` );   
})

// To assign the value of port.
// Use export in the terminal and type PORT=<any number>.