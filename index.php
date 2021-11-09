<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpetual Calendar</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: arial;
      color: #0e3742;
      text-align: center;
      font-weight: bolder;
    }

    body {
      margin: 0;
      background-color: #d7f7ef;
    }

    header span {
      color: #fff;
    }

    .div span {
      text-shadow: none;
      color: #fff;
      transition: 1s;
    }



    main {
      width: 800px;
      margin: 50px auto;
      background-color: #07252d;
      display: flex;
      flex-wrap: wrap;
      border-radius: 20px;
    }

    header {
      flex-basis: 100%;
      height: 80px;
      border-bottom: 1px solid #d7f7ef;
      display: flex;
      flex-direction: column;
      line-height: 75px;
      font-size: 40px;
    }

    aside {
      flex-basis: 200px;
      height: 600px;
      border-top: 1px solid #d7f7ef;
      border-right: 1px solid #d7f7ef;
      border-bottom: 1px solid #d7f7ef;
    }

    .div1 {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 15px;
    }

    .clock {
      width: 171px;
      height: 171px;
      border-radius: 50%;
      background: rgb(161, 161, 161);
    }

    .hour {
      width: 45px;
      height: 11px;
      position: absolute;
      top: 225px;
      margin-left: 80px;
      transform-origin: 5px 6px;
      background-color: hotpink;
      transform: rotate(0deg);
      /* animation: s 5s linear infinite; */
    }

    .minute {
      position: absolute;
      width: 70px;
      height: 9px;
      position: absolute;
      top: 226px;
      margin-left: 77px;
      transform-origin: 8px 5px;
      background-color: darkmagenta;
      transform: rotate(0deg);
      /* animation: s 10s linear infinite; */
    }

    .second {
      position: absolute;
      width: 90px;
      height: 3px;
      position: absolute;
      top: 229px;
      margin-left: 75px;
      transform-origin: 10px 2px;
      background-color: pink;
      transform: rotate(0deg);
      /* animation: s 2s linear infinite; */
    }

    .div {
      height: 80px;
      font-size: 30px;
      display: flex;
      flex-wrap: wrap;
    }
    .div span{
      flex-basis: 100%;
      height: 45px;
    }
    .div a{
      flex-basis: 50%;
      height: 30px;
      background-color: blue;
      border: 1px solid white;
      opacity: 0.3;
      
    }
    .div:hover a{
      opacity: 1;
    }

    div:nth-child(1){

    }
    div:nth-child(2){

    }
    .div2 {
      height: 160px;
      border: 1px solid black;
      display: flex;
      flex-wrap: wrap;
      padding-top: 20px;
      padding-left: 20px;
    }

    .div2 span {
      width: 90px;
      height: 30px;
      color: brown;
      margin-left: 10px;
      line-height: 35px;
    }

    .div2 input {
      width: 70px;
      height: 30px;
    }

    /* input[type='number']:nth-child(1){
            width: 80px;
            height: 30px;
        }
        input[type='number']:nth-child(2){
            width: 50px;
            height: 30px;
        }
        input[type='submit']{
            width: 80px;
            height: 30px;
        } */

    section {
      flex-basis: calc(100% - 200px);
      border-top: 1px solid white;
      border-left: 1px solid white;
    }
  </style>

  <script>
    function clock_cal() {
      let time = new Date();
      let hour = time.getHours();
      let minute = time.getMinutes();
      let second = time.getSeconds();
      document.getElementsByClassName("hour")[0].style.transform = "rotate(" + (hour * 30 + minute / 2 - 90) + "deg)";
      document.getElementsByClassName("minute")[0].style.transform = "rotate(" + (minute * 6 + second / 10 - 90) + "deg)";
      document.getElementsByClassName("second")[0].style.transform = "rotate(" + (second * 6 - 90) + "deg)";
    }
    var clock = setInterval(clock_cal, 1000);

    function check() {
      var ckY = document.getElementsByClassName("input")[0].value;
      var ckM = document.getElementsByClassName("input")[1].value;

      document.getElementsByClassName("hint")[0].innerText = (ckY <= 0) ? " > 0" : "";
      document.getElementsByClassName("hint")[1].innerText = (ckM <= 0 || ckM > 12) ? "input:1-12" : "";
      document.getElementsByClassName("input")[2].type = ((ckM <= 12 && ckM >= 1) && ckY > 0) ? "submit" : "button";
    }
  </script>
</head>

<body>
  <main>
    <header>
      <span>Perpetual Calendar</span>
    </header>
    <aside>
      <div class="div1">
        <div class="clock">
          <div class="hour"></div>
          <div class="minute"></div>
          <div class="second"></div>
        </div>
      </div>

      <div class="div">
        <span class="font">2021</span>
        <a href=""></a>
        <a href=""></a>
      </div>
      <div class="div">
        <span class="font">10</span>
        <a href=""></a>
        <a href=""></a>
      </div>
      <div class="div">
        <span class="font">21</span>
        <a href=""></a>
        <a href=""></a>
      </div>
      <div class="div2">
        <input type="number" value="2021" name="year" class="input" onkeyup="check()" onclick="check()"><span class="hint"></span>
        <input type="number" value="11" name="month" class="input" onkeyup="check()" onclick="check()"><span class="hint"></span>
        <input type="button" value="submit" class="input">
      </div>
    </aside>
    <section>

    </section>
  </main>
</body>
<script>
  clock_cal();
</script>


</html>