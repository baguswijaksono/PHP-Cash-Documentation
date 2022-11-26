<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Password Strength Checker JavaScript| CodingNepal</title>
   </head>
   <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
  text-align: center;
  background: #f2f2f2;
}
.container{
  background: #fff;
  padding: 20px 30px;
  width: 420px;
  border-radius: 5px;
  box-shadow: 0 0 15px rgba(0,0,0,0.2);
}
.container header{
  font-size: 24px;
  font-weight: 600;
  line-height: 33px;
}
.container form{
  margin: 20px 5px 10px 5px;
  position: relative;
}
.container form .field{
  height: 45px;
  width: 100%;
  display: flex;
  position: relative;
}
form .field input{
  width: 100%;
  height: 100%;
  border: 1px solid lightgrey;
  padding-left: 15px;
  outline: none;
  border-radius: 5px;
  font-size: 17px;
  transition: all 0.3s;
}
form .field input:focus{
  border-color: #27ae60;
  box-shadow: inset 0 0 3px #2fd072;
}
form .field .showBtn{
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  display: none;
  user-select: none;
}
form .indicator{
  height: 10px;
  margin: 10px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  display: none;
}
form .indicator span{
  position: relative;
  height: 100%;
  width: 100%;
  background: lightgrey;
  border-radius: 5px;
}
form .indicator span:nth-child(2){
  margin: 0 3px;
}
form .indicator span.active:before{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border-radius: 5px;
}
.indicator span.weak:before{
  background-color: #ff4757;
}
.indicator span.medium:before{
  background-color: orange;
}
.indicator span.strong:before{
  background-color: #23ad5c;
}
form .text{
  font-size: 20px;
  font-weight: 500;
  display: none;
  margin-bottom: -10px;
}
form .text.weak{
  color: #ff4757;
}
form .text.medium{
  color: orange;
}
form .text.strong{
  color: #23ad5c;
}
   </style>
   <body>
      <div class="container">
         <header>Password Strength Indicator <br>in HTML CSS & JavaScript</header>
         <form action="#">
            <div class="field">
               <input onkeyup="trigger()" type="password" placeholder="Type password">
            </div>
            <div class="indicator">
               <span class="weak"></span>
               <span class="medium"></span>
               <span class="strong"></span>
            </div>
            <div class="text"></div>
         </form>
      </div>
      <script>
         const indicator = document.querySelector(".indicator");
         const input = document.querySelector("input");
         const weak = document.querySelector(".weak");
         const medium = document.querySelector(".medium");
         const strong = document.querySelector(".strong");
         const text = document.querySelector(".text");
         const showBtn = document.querySelector(".showBtn");
         let regExpWeak = /[a-z]/;
         let regExpMedium = /\d+/;
         let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;
         function trigger(){
           if(input.value != ""){
             indicator.style.display = "block";
             indicator.style.display = "flex";
             if(input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value.match(regExpStrong)))no=1;
             if(input.value.length >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input.value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) && input.value.match(regExpStrong))))no=2;
             if(input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value.match(regExpStrong))no=3;
             if(no==1){
               weak.classList.add("active");
               text.style.display = "block";
               text.textContent = "Your password is too week";
               text.classList.add("weak");
             }
             if(no==2){
               medium.classList.add("active");
               text.textContent = "Your password is medium";
               text.classList.add("medium");
             }else{
               medium.classList.remove("active");
               text.classList.remove("medium");
             }
             if(no==3){
               weak.classList.add("active");
               medium.classList.add("active");
               strong.classList.add("active");
               text.textContent = "Your password is strong";
               text.classList.add("strong");
             }else{
               strong.classList.remove("active");
               text.classList.remove("strong");
             }
             showBtn.style.display = "block";
             showBtn.onclick = function(){
               if(input.type == "password"){
                 input.type = "text";
                 showBtn.textContent = "HIDE";
                 showBtn.style.color = "#23ad5c";
               }else{
                 input.type = "password";
                 showBtn.textContent = "SHOW";
                 showBtn.style.color = "#000";
               }
             }
           }else{
             indicator.style.display = "none";
             text.style.display = "none";
             showBtn.style.display = "none";
           }
         }
      </script>
   </body>
</html>