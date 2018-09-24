http = require('http')
fs= require('fs')

var server= http.createServer(function(req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'})
    var myreadStream= fs.createReadStream( __dirname + '/HTMLserving.html', 'utf8');
    myreadStream.pipe(res)
});

server.listen(9000, '127.0.0.1')
console.log("Hello I'm listening to port 9000")
