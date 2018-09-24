fs= require('fs')
http= require('http')

var myReadStream = fs.createReadStream( __dirname + '/readStream.txt', 'utf8')   // here  __dirname= C:\Users\sameer\Desktop\Work\Node.js
var myWriteStream= fs.createWriteStream(__dirname + '/writeStream.txt')

myReadStream.on('data', function(chunk){            // 'data' is a built-in event
    console.log('new chunk of data recieved: ');
    console.log(chunk);
    myWriteStream.write(chunk);
});



/*

Streaming is data flow in a certain amount, the amount is decided by how much the buffer can hold.
Analogy: If I want to water the plants. It's better to use a pipe than a whole bucket of water
The pipe will provide enough water as it is required at the moment without overdoing/overflowing 
the water. 

*/ 