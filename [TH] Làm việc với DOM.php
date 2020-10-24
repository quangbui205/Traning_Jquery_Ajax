<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<div id = "myDIV" class="header">
    <h2 style="margin: 5px">My To Do List</h2>
    <input type="text" id="myInput" placeholder="Title">
    <button onclick="newElement()" class="addBtn">ADD</button>
</div>

<ul id="myUl">
    <li class="hello">asdasd</li>
    <li class="hello">asasdasdasdghgfhsd</li>
</ul>
 <script>
     $(document).ready(function () {
         $('ul').on('mouseenter','li',function () {
             $(this).css("background-color","red");

         }).on('mouseleave','li',function () {
             $(this).css("background-color","white");
         });
     });
     let myNodeList = document.getElementsByTagName("LI");
     for(i=0;i<myNodeList.length;i++)
     {
         let span = document.createElement("SPAN"); //createElement tạo phần tử span vs tên đc chỉ định là SPAN
         let txt = document.createTextNode(" X"); //Tạo 1 nút văn bản vs phần tử vs TEXT là "X"
         span.className ="close"; // className Tạo lớp cho đối tượng
         span.appendChild(txt);
         myNodeList[i].appendChild(span);
     }

     let close = document.getElementsByClassName("close");
     closeElement();
     function closeElement() {
         for(i=0;i<close.length;i++)
         {
             close[i].onclick = function () {
                 let div = this.parentElement;
                 div.style.display = "none";
             }
         }
     }
     function newElement() {
         let li = document.createElement("li");
         li.className="hello";
         let inputValue = document.getElementById("myInput").value;
         let t = document.createTextNode(inputValue);
         li.appendChild(t);
         console.log(li);
         if(inputValue==='')
         {
             alert("You must write something!");
         }
         else
         {
             document.getElementById("myUl").appendChild(li);
         }
         document.getElementById("myInput").value = "";
         let span = document.createElement("SPAN");
         let txt = document.createTextNode(" X");
         span.className="close";
         span.appendChild(txt);
         li.appendChild(span);
         closeElement();
     }
 </script>
</body>
</html>
