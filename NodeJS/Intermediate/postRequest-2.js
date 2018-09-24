const express= require('express');
const  app= express();
app.use(express.json())
courses= [
    {1: 'course1'},
    {2: 'course2'},
    {3: 'course3'}
]

app.get('/', (req, res)=> {
    res.send(courses)
})

app.post('/courses', (req, res)=>{
    // We haven't made any HTML for getting the values.
    // Infact we're giving the object properties on our own   
    const course= {
        id: courses.length+1,
        name: req.body.name,
    };
    courses.push(course);
    res.send(course);

})


app.listen(3000);