<!DOCTYPE html>
<html>
  <head>
    <title>Birdwatch.ai</title>

    <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">

    <style type="text/css">
        $red: #;
        body {
          background: #033F63;
        }
        .box{
          position: absolute;
          transform-origin: bottom right;
          width: 100px;
          height: 100px;
          right: 50%;
          top: 30%;
          animation: spin 1.5s infinite;
          animation-timing-function: cubic-bezier(.5, .1, .1, 1);
        }
        .feet{
          position: absolute;
          width: 30px;
          height: 30px;
          background: #758ECD;
          border-radius: 50%;
          bottom: -12px;
          right: -20px;
        }
        .branch{
          position: absolute;
          width: 60%;
          height: 60%;
          background: #DDC8C4;
          border-radius: 50%;
          bottom: 3px;
          left: 1px;
        }
        .body{
          position: absolute;
          width: 75px;
          height: 150px;
          background: #F13030;
          border-radius: 0 150px 150px 0;
          transform: rotate(45deg);
          bottom: -25px;
          right: -25px;
        }

        .hair{
          position: absolute;
          clip-path: polygon(100% 0, 0 49%, 100% 49%);
          width: 30px;
          height: 50px;
          background: #F13030;
          top: -48px;
          right: -20px;
          transform: rotate(10deg);
        }
        .head{
          position: absolute;
          width: 80px;
          height: 70px;
          background: #F13030;
          border-radius: 50%;
          overflow: hidden;
          top: -50px;
          right: -84px;
          animation: tilt 1.5s infinite;
        }
        .beak{
          position: absolute;
          width: 50%;
          height: 100%;
          left: 60%;
          background: #EFF9F0;
          overflow: hidden;
          border-left: solid 2px black;
        }
        .lower-beak{
          position: absolute;
          width: 80%;
          height: 30%;
          background: black;
          transform: rotate(30deg);
          bottom: -5px;
          left: -12px;
        }
        .patch{
          position: absolute;
          width: 85%;
          height: 82%;
          background: white;
          border-radius: 50%;
          left: 18%;
          bottom: 0;
        }
        .eye{
          position: absolute;
          background: black;
          width: 10px;
          height: 15px;
          border-radius: 50%;
          left: 27%;
          top: 12%;
        }
        .wing{
          position: absolute;
          width: 60px;
          height: 130px;
          background: #5998C5;
          border-radius: 0 130px 130px 0;
          top: 25%;
          left: 0%;
          transform: rotate(15deg);
          overflow: hidden;
          transform-origin: top left;
          animation: flap 1.5s infinite;


        }
        .tail{
          position: relative;
         clip-path: polygon(50% 0%, 0% 100%, 100% 0);
          background: #F13030;
          width: 80px;
          height: 90px;
          top: 69%;
          left: -44%;
          transform: rotate(21deg);

        }
        .red{
          position: absolute;
          width: 100%;
          height: 70%;
          background: #F13030;
          border-radius: 50%;
          top: -30px;
          left: -7px;
          transform: rotate(10deg);
        }
        .yellow{
          position: absolute;
          width: 100%;
          height: 80%;
          background: #FFF689;
          border-radius: 50%;
          left: -5px;
          transform: rotate(10deg);
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(359deg);
            }
        }
        @keyframes flap {
          0%{
            transform: rotate(5deg)
          }
          50%{
            transform: rotate(65deg)
          }
          80%{
            transform: rotate(5deg);
          }
          100%{
            transform: rotate(5deg)
          }
        }
        @keyframes tilt{
          0%{
            transform: rotate(0deg);
          }
          15%{
            transform: rotate(15deg)
          }
          100%{
            transform: rotate(0deg)
          }
        }

        .intro {
          font-family: 'Baloo Tammudu', cursive;
          color: white;
          text-align: center;
          font-size: 250%;
        }
    </style>
  </head>

  <body style="background-color: #033F63;">
    <div class="box">
      <div class="tail"></div>
      <div class="body">
        <div class="wing">
          <div class="yellow"></div>
          <div class="red"></div>
        </div>
      </div>
      <div class="feet">
        <div class="branch"></div>
      </div>
      <div class="hair"></div>
      <div class="head">
        <div class="patch">
          <div class="eye"></div>
        </div>
        <div class="beak">
          <div class="lower-beak"></div>
        </div>
      </div>
    </div>

    <p class="intro">Birdwatch.ai</p>

    <script type="text/javascript">
      function leave() {
        window.location = "home.php";
      }
      setTimeout("leave()", 3000);
    </script>

  </body>
</html>
