var http = require('http')

var server=  http.createServer(function(request, response){  // Request and response parameter are objects in reality
    response.writeHead(200, {'Content-Type' : 'text/plain'})// It's the information about the file we are requesting for
    response.end(" Response from server ")
});

server.listen(9000, '127.0.0.1')






