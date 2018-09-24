function harmlessRansomNote(noteText, magazinText){
    var noteArr = noteText.split(' ')          // Helps create array out of string.
    var magazinArr= magazinText.split(' ')    // Helps create array out of string.
    var magazinObj= {}

    magazinArr.forEach( word=> {
        if(!magazinObj.word)    // If the object does not have any property as that of the word in the array then put the property value of the word 0 in it and increment it.
        magazinObj[word]=0
        magazinObj[word]++
    }) 


    var ransomNote= 'true';

    noteArr.forEach(word=> {
        if(magazinObj[word]){
        magazinObj[word]--;

        // if(magazinObj[word]<0)
        // return ransomNote= false
       }
        else
        // ransomNote=false;
        ransomNote= 'false';
        
    })

    // return ransomNote
    console.log(ransomNote);
    
}

harmlessRansomNote("hello", "Hello hi alsjdasd alsdj lsa dlas ldkasl dklas kdl as")



 // NOTE: Boolean value of true and false is not returning I don't kno wwhy therefore I used the string instead.


 /* 
    There are other ways to solve this problem but this is the most efficient way considering 
    time complexity. Because it takes the linear time path to solve this problem. 
    Meaning that if the size of the aray increases the time increases proportionally. 
 */