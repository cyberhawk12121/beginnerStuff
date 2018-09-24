console.log("hello world") 

// Event Listeners
document.querySelector('#addTweet').addEventListener('submit', addTweet) // ADD TWEET


// Functions
function addTweet(e){
      e.preventDefault()

// The Tweet list
      tweetList= document.createElement('li')
      Addtweet= document.querySelector('#tweet').value
      
// .............. To Check if the box is unfilled or not ............... //
      if (Addtweet == "")
      {
            alert("Fill the content box!! ")
            // document.querySelector('#error').textContent= "Fill the box!"
            return false;
      }
      alert('Tweet Added')
      tweetList.innerHTML=Addtweet
      tweetList.classList = 'tweet'
      document.querySelector('#list').appendChild(tweetList)
      // ADD TO LOCAL STORAGE 
      // addToLocalStorage(Addtweet);


// The Remove mark
      cross= document.createElement('a')
      cross.textContent= 'x'
      cross.href= "#"
      cross.classList='cross'
      cross.id= 'remove'
      tweetList.appendChild(cross)



      // ADD TO LOCAL STORAGE
      addToLocalStorage(Addtweet);

      this.reset(); // This is very important line. 

      
/* this.reset() function resets the form and removes the previous filled value in the text area.
This prevents the user to use the backspace every time they write anything. 
It puts the pointer back to the very beginning and not at the end of the last added element.
It the case of removal of element when we press the cross button the last element is removed no matter
which button is clicked. It is because the pointer is at the end therefore the last element is removed first.
Using this "this.reset()" function solves this problem.
*/

      

}


// .................................... //
// REMOVE ELEMENT // 
// .................................... //

tweetList_ul = document.querySelector('#list')     // Getting the <ul> element 
tweetList_ul.addEventListener('click', removeTweet) // REMOVE TWEET

function removeTweet(event){
      if(event.target.classList.contains('cross')){   
            event.target.parentElement.remove();
            // localStorage.removeItem(event.target.parentElement.innerHTML) // I can use this method if I know exactly which number element I'm clicking upon. I'll try to find the solution, I promise!!
            // removeItemFromLS(event.target.parentElement.innerHTML)
      }
      let tweets= JSON.parse(localStorage.getItem('Tweets'))
      let text=event.target.parentElement.textContent;  
      textToRemove=text.slice(0 , text.length-1);      // Text without the 'x' icon. It takes the starting and ending point and neglects the other parts of the string
      console.log(textToRemove)

      tweets.forEach((tweetLS,index)=>{
            if(tweetLS===textToRemove)
            tweets.splice(index, 1);
      })
      console.log(tweets);
      
      localStorage.setItem('Tweets', JSON.stringify(tweets));
}



function addToLocalStorage(AddtweetParameter){
     
      // Save the tweets array that came from the getItemFromStorage() function.
      // Then this function will further add items in it. 

      tweets= getItemFromStorage();
      tweets.push(AddtweetParameter);
      localStorage.setItem('Tweets', JSON.stringify(tweets));      

}   


function getItemFromStorage(){
      let tweets;

      // Get the value, If null is returned then we create an empty array
      if(JSON.parse(localStorage.getItem('Tweets'))===null){ // if the array that we got from the localStorage is empty, then do {...}
            tweets=[]
      }
      else{
            tweets = JSON.parse(localStorage.getItem('Tweets')); // Taking the data from the local storage and convert it into array because that is what parse()    
        }
      return tweets;
}


      // RETAIN THE TWEETS EVEN UPON PAGE LOAD 

      document.addEventListener('DOMContentLoaded', onload())
      
      
      function onload(){

            names= localStorage.getItem('Tweets')

            if(names===null)
            names=[];
            

            JSON.parse(names).forEach((content)=>{
                  console.log(`${content} `); // CHECK

                  let List= document.createElement('li')
                  List.textContent= content
                  List.classList= 'tweet'
                  document.querySelector('#list').appendChild(List)


                  let remove = document.createElement('a')
                  remove.textContent = 'x'
                  remove.href = "#"
                  remove.classList = 'cross'
                  remove.id = 'remove'
                  List.appendChild(remove)

            })

      }


