## v1.0
```css
body {
    font-size: 30px;
    font-family: sans-serif;
    margin: 0;
    background-color: black;
}
*{
    box-sizing: border-box;
    font-size: inherit;
}
#calculator {
    font-size: 0;
    padding-bottom: 6px;
    background-color: #18181a;
    width: 100vw;
    height: 100vh;
    border-radius: 25px;
    overflow: hidden;
}
.btn {
    cursor: pointer;
    padding: 10px;
    text-align: center;
    display: inline-flex;
    box-sizing: border-box;
    font-size: 20px;
    font-weight: bold;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    justify-content: center;
    align-items: center;
    background-color: #2f2a25;
    border: 1px solid #18181a;
    color: white;
    width: calc(100vw / 4);
    height: calc(120vw / 4);
}
.btn:hover {
    background-color: #DDD;
}
.btn:active {
    background-color: #FFF;
}
#result {
    box-sizing: border-box;
    background-color: #2f2a25;
    color: white;
    padding: 30px;
    height: calc(100vh - 120vw);
    font-size: 30px;
    display: flex;
    align-items: end;
    justify-content: end;
}
.eq {
    background-color: orange;
}
```
