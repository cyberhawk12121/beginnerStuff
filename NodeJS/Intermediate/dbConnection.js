const mongoose= require('mongoose')
myDB= 'mongodb://localhost/DataBase-1'  // Name of database is: DataBase-1
mongoose.connect(myDB) // It's a promise because we've written '.then' after it
.then(()=>console.log("Connected to mongoDB... ")) // If the promise is fulfilled then write this.
.catch(err => console.log('could not connect to DB'))   // If we come across any error then catch the error 

// Schemas (Only in mongoose): It's to define the shape of documents in mongoDB 
// It simply means what things will be there in the Database, for E.g. number, names, boolean etc. 
// It's just like telling what DataTypes will be there. Like we do in SQL DB. 
// We set the id as integer and names as string. It's that!!
const schema= new mongoose.Schema({
    name: String,
    author: String,
    tag: [String],
    date: {type: Date, default: Date.now},
    isPublished: Boolean,
})

// Model: It's the class instance which will fill the schema entry. 

const Course= mongoose.model('Course', schema); // Course is a class.
// In normal language it looks somewhat Like this: 
/* 
    class Course {
        name: String,
        author: String... etc
        // It's because we passed the Schema in here.
    }

*/

async function createCourse(){
const course= new Course({  // Created an instance of Course class
    name: "NodeJS course",
    author: "Sameer",
    tag: ['node', 'backend'],
    isPublished: true,
});
// We just passed the values in the object. replacing the String, arrays and other DataTypes 
// that we put in the schema.
// It's is clear now. 
const result= await course.save();  // It will save the result in the mongoDB
console.log(result);
}

// createCourse();

async function getCourses(){
    const courses= await Course.find({author: "Sameer"});   // It is like conditional statements to 
    // get only those data from DB where the condition fulfills.
    console.log(courses);
}

getCourses();

/* 
NOTE: We made the 'saving to database' operation asynchronous because it takes time to go 
through the files in the File System and save data. Therefore we don't want to slow down the 
other server operations.
In this case it makes no sense. We are on the freaking localhost!
*/