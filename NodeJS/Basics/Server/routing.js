const http= require('http')
const fs= require('fs')

// Node.js method of sending a file on the server.


const server= http.createServer((req, res) => {         // 'http' object has a method createServer(). which has req and res parameters that behave in the way I'm using them right now.
    console.log("Request is made: "+req.url);
    if (req.url==='/home' || req.url==='/') {
        res.writeHead(200, {'Content-Type' : 'text/html'})    // 200 is the status code that tells this content is "OK". 
        readHTML= fs.createReadStream(__dirname+'/HTMLserving.html', 'utf8')
        readHTML.pipe(res);
        // test: res.end('There we go!')
    }
    else if(req.url==="/contact"){
        res.writeHead(200, {'Content-Type': 'text/html'})
        fs.createReadStream(__dirname+'/contactServing.html', 'utf8').pipe(res)
    }
    else if(req.url==='/api'){
        object= {
            End: "It's the last page"
        }
        res.writeHead(200, {'Content-Type': 'application/json'})
        fs.createReadStream(__dirname+'\api');
        res.end(JSON.stringify(object.End));
    }       
});

server.listen(3000,'127.0.0.1')

console.log("this HTML page is routing on the link: 127.0.0.0:3000/home ");
