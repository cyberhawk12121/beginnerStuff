const http= require('http')
// const fs= require('fs')

var server= http.createServer(function(req, res) {
    console.log("request was made: "+ req.url);

    res.writeHead(200, {'Content-Type': 'application/json'});
    
    var myObj= {
        name: "sameer",
        age: 19,
    }

    // for(let key in myObj){
    //     res.end(myObj[key]);
    // }

    res.end(JSON.stringify(myObj));

})

server.listen(3000, '127.0.0.1')

console.log("Server Running");
