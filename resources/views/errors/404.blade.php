<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
  width: 100%;
  margin: 0;
  height: 100%;
  background-color: #1d3041;
  font-family: "Open Sans - Semibold", sans-serif;
  color: #fff;
}
h1 {
  text-align: center;
  margin-top: 1%;
  margin-bottom: 25px;
  font-size: 30px;
  font-weight: 400;
  text-transform: uppercase;
}
p {
  display: block;
  margin: 25px auto;
  max-width: 776px;
  text-align: center;
  color: #bcecf2;
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 24px;
}
.bl_page404__wrapper {
  position: relative;
  width: 100%;
  margin: 10px auto 10px;
  max-width: 440px;
  min-height: 410px;

}
.bl_page404__img {
  width: 100%;
}
.bl_page404__link {
  display: block;
  margin: 0 auto;
  width: 260px;
  height: 64px;
  box-shadow: 0 5px 0 #9c1007, inset 0 0 18px rgba(253, 60, 0, 0.75);
  background-color: #f95801;
  color: #fff;
  font-family: "Open Sans", sans-serif;
  font-size: 24px;
  font-weight: 700;
  line-height: 64px;
  text-transform: uppercase;
  text-decoration: none;
  border-radius: 30px;
  text-align: center;
}
.bl_page404__link:hover,
.bl_page404__link:focus {
  background-color: #ff7400;
}
.bl_page404__el1 {
  position: absolute;
  top: 108px;
  left: 102px;
  opacity: 1;
  animation: el1Move 800ms linear infinite;
  width: 84px;
  height: 106px;
  background: url("https://github.com/BlackStar1991/Pictures-for-sharing-/blob/master/404/bigBoom/404-1.png?raw=true")
    50% 50% no-repeat;
  z-index: 2;
}
.bl_page404__el2 {
  position: absolute;
  top: 92px;
  left: 136px;
  opacity: 1;
  animation: el2Move 800ms linear infinite;
  width: 184px;
  height: 106px;
  background: url("https://github.com/BlackStar1991/Pictures-for-sharing-/blob/master/404/bigBoom/404-2.png?raw=true")
    50% 50% no-repeat;
  z-index: 2;
}
.bl_page404__el3 {
  position: absolute;
  top: 108px;
  left: 180px;
  opacity: 1;
  animation: el3Move 800ms linear infinite;
  width: 284px;
  height: 106px;
  background: url("https://github.com/BlackStar1991/Pictures-for-sharing-/blob/master/404/bigBoom/404-3.png?raw=true")
    50% 50% no-repeat;
  z-index: 2;
}
@keyframes el1Move {
  0% {
    top: 108px;
    left: 102px;
    opacity: 1;
  }
  100% {
    top: -10px;
    left: 22px;
    opacity: 0;
  }
}
@keyframes el2Move {
  0% {
    top: 92px;
    left: 136px;
    opacity: 1;
  }
  100% {
    top: -10px;
    left: 108px;
    opacity: 0;
  }
}
@keyframes el3Move {
  0% {
    top: 108px;
    left: 180px;
    opacity: 1;
  }
  100% {
    top: 28px;
    left: 276px;
    opacity: 0;
  }
}

</style>
<body>
    
<x-layout bodyClass="bg-gray-200">
<main class="bl_page404">
  <h1>Error 404. The page does not exist</h1>
  <p>Sorry! The page you are looking for can not be found. Perhaps the page you requested was moved or deleted. It is also possible that you made a small typo when entering the address. Go to the main page.
  </p>
  <div class="bl_page404__wrapper">
    <img src="https://github.com/BlackStar1991/Pictures-for-sharing-/blob/master/404/bigBoom/cloud_warmcasino.png?raw=true" alt="cloud_warmcasino.png">
    <div class="bl_page404__el1"></div>
    <div class="bl_page404__el2"></div>
    <div class="bl_page404__el3"></div>
    <a class="bl_page404__link" href="/">go Dashboard</a>
  </div>
</main>
</x-layout>
</body>
</html>