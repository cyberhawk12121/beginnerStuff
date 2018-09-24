
    // IT is NOTHING fascinating! It's just a new way of making data or function
        name1=  'string';
        name2= new String('string');
        console.log(name1);
        console.log(name2);
        
        console.log(typeof(name1));
        console.log(typeof(name2));
        
        function1= new Function('a', 'b', 'return a+b');
        function2= function(a,b){
            return a+b;
        }
        console.log(function1(2,4));
        console.log(function2(2,4));