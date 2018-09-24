file= require('fs');

// Read the file
// read= file.readFileSync('readMe.txt', 'utf8');
// console.log(read);

// readArr = read.split(' '); // Converted it into array
// readArr.forEach(words=>{    // Read the array elements
//     console.log(words);
// })


// Write the file in some other file

readAsync= file.readFile('readMe.txt', 'utf8', function(err, data){
    if(err)
    console.log(err)

    console.log(data);
    
    writeAsync= file.writeFile('writeMe.txt', data, function(error, data){
        if(error)
        console.log(error);
    })
 
 })
 

 //     Deleting Files 
 file.unlink('writeMe.txt')


 // Making directories
 file.mkdir('newDir', function(){
     file.readFile('readMe.txt', 'utf8', function(err, data){
         console.log(data);
         
     })
 })

 // Remove Directory
 // file.rmdir()
 // Note: To remove a directory the directory must be empty. Therefore first unlink the file and then use this method.

