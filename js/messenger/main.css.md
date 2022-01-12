### v1.0
```css
/*#chat-box {
    margin: 0 auto;
    background-color: bisque;
    width: 500px;
    height: 600px;
}

h1.title {
    padding-top: 3%;
    padding-bottom: 2%;
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-style: oblique;
}

h3 {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    padding-bottom: 2%;
}

.send {
    display: block;
    margin: auto;
}
*/

body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .chat-container{
    width: 60%;
    height: 60%;
    padding: 10px;
    border-radius: 5px;
    background-color: #18191c;
  /*   background-color: #7289da; */
  }
  
  .chat-message{
    overflow-y: auto; 
    height: 80%;
    padding: 5px;
  }

  #list {
      padding-top: 5%;
      color: white;
  }

  #message {
      display: block;
      margin: auto;
  }

  .titre {
      color: cornsilk;
      text-align: center;
  }
```
### v1.1
```css
/*#chat-box {
    margin: 0 auto;
    background-color: bisque;
    width: 500px;
    height: 600px;
}

h1.title {
    padding-top: 3%;
    padding-bottom: 2%;
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-style: oblique;
}

h3 {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    padding-bottom: 2%;
}

.send {
    display: block;
    margin: auto;
}
*/

body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .chat-container{
    width: 60%;
    height: 60%;
    padding: 10px;
    border-radius: 5px;
    background-color: bisque;
  }
  
  .chat-message{
    overflow-y: auto; 
    height: 80%;
    padding: 5px;
  }

  #list {
      padding-top: 5%;
  }

  #message {
      display: block;
      margin: auto;
  }

  .titre {
      text-align: center;
  }

  

  /* Thanks to gavin19 for compatibility help */
/*
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
body {
 min-width: 500px;
}

.exit {
  color: #000;
  opacity: 0;
  font-family: lucida console;
  -webkit-animation: ex 0s forwards;
  -webkit-animation-delay: 0s;
  -moz-animation: ex 0s forwards;
  -moz-animation-delay: 0s;
  -ms-animation: ex 0s forwards;
  -ms-animation-delay: 0s;
  -o-animation: ex 0s forwards;
  -o-animation-delay: 0s;
  animation: ex 0s forwards;
  animation-delay: 0s;
  border: 2px solid #000;
  position: absolute;
  left: 50%;
  margin-left: 300px;
  margin-top: -20px;
  border-radius: 5px;
}

.window {
  border: 2px solid #dbdbdb;
  border-radius: 10px;
  background-color: #000;
  width: 70%;
  height: 0;
  border-top-width: 20px;
  overflow: auto;
  -webkit-animation: clean 0s forwards;
  -moz-animation: clean 0s forwards;
  -ms-animation: clean 0s forwards;
  -o-animation: clean 0s forwards;
  animation: clean 0s forwards;
  margin: 100px auto auto;
}

.title {
  color: #000;
  font-weight: 700;
  font-family: Lucida Console;
  font-size: 13px;
  text-align: center;
  position: absolute;
  left: 50%;
  margin-left: -75px;
  margin-top: -15px;
  -webkit-animation: tit 0s;
  -moz-animation: tit 0s;
  -ms-animation: tit 0s;
  -o-animation: tit 0s;
  animation: tit 0s;
}

[class*="term"] {
  font-family: Ubuntu;
  font-size: 15px;
  color: white;
  line-height: 30px;
  opacity: 0;
  padding-left: 2%;
  -webkit-animation: text 0s forwards;
  -moz-animation: text 0s forwards;
  -ms-animation: text 0s forwards;
  -o-animation: text 0s forwards;
  animation: text 0s forwards;
}

.term1 {
  -webkit-animation-delay: 0s;
  -moz-animation-delay: 0s;
  -ms-animation-delay: 0s;
  -o-animation-delay: 0s;
  animation-delay: 0s;
}

.term2#yes {
  -webkit-animation-delay: 0s;
  -moz-animation-delay: 0s;
  -ms-animation-delay: 0s;
  -o-animation-delay: 0s;
  animation-delay: 0s;
}
.list {
    color: darkkhaki;
}
#message {
  background-color: black;
  border: 1px solid #000;
  color: white;
  font-family: ubuntu;
}

.term3 {
  margin-top: 500px;
  -webkit-animation-delay: 0s;
  -moz-animation-delay: 0s;
  -ms-animation-delay: 0s;
  -o-animation-delay: 0s;
  animation-delay: 0s;
}

::-webkit-scrollbar {
  width: 6px;
  height: 12px;
  background-color: #000;
  border-left: 0 solid #d2d2d2;
}

.window::-webkit-scrollbar-thumb {
  background-color: #dbdbdb;
  border-top: 5px solid #000;
}

::-webkit-scrollbar-corner {
  background-color: #000;
  color: #555;
}

@-webkit-keyframes text {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes text {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes text {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes text {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes text {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes clean {
  0% {
    margin-top: 900px;
  }
  25% {
    height: 0px;
  }
  100% {
    height: 300px;
  }
}

@-moz-keyframes clean {
  0% {
    left: 900px;
  }
  25% {
    height: 0px;
  }
  50% {
    margin-left: 320px;
  }
  100% {
    height: 300px;
  }
}

@-o-keyframes clean {
  0% {
    margin-left: 900px;
  }
  25% {
    height: 0px;
  }
  50% {
    margin-left: 320px;
  }
  100% {
    height: 300px;
  }
}

@-ms-keyframes clean {
  0% {
    margin-left: 900px;
  }
  25% {
    height: 0px;
  }
  50% {
    margin-left: 320px;
  }
  100% {
    height: 300px;
  }
}

@keyframes clean {
  0% {
    margin-left: 900px;
  }
  25% {
    height: 0px;
  }
  50% {
    margin-left: 320px;
  }
  100% {
    height: 600px;
  }
}

@-webkit-keyframes ex {
  100% {
    opacity: 1;
  }
}

@-moz-keyframes ex {
  100% {
    opacity: 1;
  }
}

@-o-keyframes ex {
  100% {
    opacity: 1;
  }
}

@-ms-keyframes ex {
  100% {
    opacity: 1;
  }
}

@keyframes ex {
  100% {
    opacity: 1;
  }
}
*/
```
