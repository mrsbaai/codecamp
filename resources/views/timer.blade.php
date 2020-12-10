<html lang="en"><head>

    <meta charset="UTF-8">
    
  <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
  <meta name="apple-mobile-web-app-title" content="CodePen">
  
  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  
  <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  
  
    <title>Countdown Timer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    
  <style>
  html,
  body {
    height: 100%;
  }
  
  body {
    background: black;
  }
  
  * {
    touch-action: none;
  }
  
  .container {
    height: 100%;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
            justify-content: center;
    -webkit-box-align: center;
            align-items: center;
    overflow: hidden;
  }
  
  .countdown {
    display: block;
    width: 66vmin;
    height: 66vmin;
    position: relative;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
            justify-content: center;
    -webkit-box-align: center;
            align-items: center;
    font-family: 'Oswald', sans-serif;
    font-weight: 400;
    font-size: 25vmin;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    -webkit-transition: width, height, border-radius, font-size;
    transition: width, height, border-radius, font-size;
    -webkit-transition-duration: 0.2s;
            transition-duration: 0.2s;
  }
  .countdown--ended {
    -webkit-animation: buzz 0.5s;
            animation: buzz 0.5s;
  }
  .countdown:active {
    -webkit-transform: scale(1.02);
            transform: scale(1.02);
  }
  @-webkit-keyframes buzz {
    0% {
      -webkit-transform: rotate(0);
              transform: rotate(0);
    }
    10%, 30%, 50%, 70%, 90% {
      -webkit-transform: rotate(6deg);
              transform: rotate(6deg);
    }
    20%, 40%, 60%, 80% {
      -webkit-transform: rotate(-6deg);
              transform: rotate(-6deg);
    }
    100% {
      -webkit-transform: rotate(0);
              transform: rotate(0);
    }
  }
  @keyframes buzz {
    0% {
      -webkit-transform: rotate(0);
              transform: rotate(0);
    }
    10%, 30%, 50%, 70%, 90% {
      -webkit-transform: rotate(6deg);
              transform: rotate(6deg);
    }
    20%, 40%, 60%, 80% {
      -webkit-transform: rotate(-6deg);
              transform: rotate(-6deg);
    }
    100% {
      -webkit-transform: rotate(0);
              transform: rotate(0);
    }
  }
  .countdown--wide {
    width: 100%;
    height: 100%;
    font-size: 50vmin;
    border-radius: 0;
  }
  .countdown__fill {
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    bottom: 0;
    background: #FF5722;
    opacity: 1;
  }
  .countdown__digit {
    width: 100%;
    color: #FF5722;
    text-align: center;
    mix-blend-mode: difference;
    pointer-events: none;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
  }
  .countdown__buttons {
    position: absolute;
    right: 50px;
    top: 50%;
    height: 200px;
    margin-top: -100px;
    color: white;
    z-index: 1;
  }
  .countdown__button {
    height: 50%;
  }
  
  .full-button {
    position: absolute;
    right: 10px;
    bottom: 10px;
    padding: 1em 0.5em 0.5em 2em;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    color: white;
    cursor: pointer;
  }
  </style>
  
    <script>
    window.console = window.console || function(t) {};
  </script>
  
    
    
    <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
  
  
  <style>.OpenVideo {
    display: none !important;
    visibility: hidden !important; }
  
  .ov-video-popup, .ov-theatre-mode {
    position: fixed !important;
    top: 0px !important;
    left: 0px !important;
    bottom: 0px !important;
    right: 0px !important;
    width: 100% !important;
    height: 100% !important;
    border: none !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
    z-index: 2147483646 !important; }
  
  .ov-theater-mode {
    background: rgba(0, 0, 0, 0.95) !important;
    pointer-events: none;
    transition: opacity 0.3s;
    opacity: 0;
    display: block;
    cursor: default; }
  
  .ov-iframe-theaterMode {
    position: fixed !important;
    width: 70vw !important;
    height: calc(( 9/ 16)*70vw) !important;
    top: calc((100vh - ( 9/ 16)*70vw)/2) !important;
    left: calc((100vw - 70vw)/2) !important;
    z-index: 2147483646 !important; }
  
  .ov-theater-mode {
    position: fixed !important;
    left: 20vw !important;
    top: 20vh !important;
    width: 50vw !important;
    height: calc(9/16*50vw) !important; }
  </style></head>
  
  <body translate="no">
    <div class="container">
    <div class="countdown countdown--wide" id="countdown" style="touch-action: pan-x pan-y; user-select: none;">
      <div class="countdown__fill" id="ticker" style=""></div>
      <div class="countdown__digit" id="seconds">10</div>
      <!--.countdown__buttons-->
      <!--	.countdown__button +-->
      <!--	.countdown__button --->
    </div>
  </div><a class="full-button" id="toggle">Toggle size</a>
      <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js"></script>
        <script id="rendered-js">
  function Timer(duration, element) {
    var self = this;
    this.duration = duration;
    this.element = element;
    this.running = false;
  
    this.els = {
      ticker: document.getElementById('ticker'),
      seconds: document.getElementById('seconds') };
  
  
    document.getElementById('toggle').addEventListener('click', function () {
      var cl = 'countdown--wide';
      if (self.element.classList.contains(cl)) {
        self.element.classList.remove(cl);
      } else {
        self.element.classList.add(cl);
      }
    });
  
    var hammerHandler = new Hammer(this.element);
    hammerHandler.get('pan').set({ direction: Hammer.DIRECTION_VERTICAL });
    hammerHandler.on('panup pandown', function (ev) {
      if (!self.running) {
        if (ev.direction === Hammer.DIRECTION_UP && self.duration < 999000) {
          self.setDuration(self.duration + 1000);
        } else if (ev.direction === Hammer.DIRECTION_DOWN && self.duration > 0) {
          self.setDuration(self.duration - 1000);
        }
      }
    });
  
    hammerHandler.on('tap', function () {
      if (self.running) {
        self.reset();
      } else {
        self.start();
      }
    });
  }
  
  Timer.prototype.start = function () {
    var self = this;
    var start = null;
    this.running = true;
    var remainingSeconds = this.els.seconds.textContent = this.duration / 1000;
  
    function draw(now) {
      if (!start) start = now;
      var diff = now - start;
      var newSeconds = Math.ceil((self.duration - diff) / 1000);
  
      if (diff <= self.duration) {
        self.els.ticker.style.height = 100 - diff / self.duration * 100 + '%';
  
        if (newSeconds != remainingSeconds) {
          self.els.seconds.textContent = newSeconds;
          remainingSeconds = newSeconds;
        }
  
        self.frameReq = window.requestAnimationFrame(draw);
      } else {
        //self.running = false;
        self.els.seconds.textContent = 0;
        self.els.ticker.style.height = '0%';
        self.element.classList.add('countdown--ended');
      }
    };
  
    self.frameReq = window.requestAnimationFrame(draw);
  };
  
  Timer.prototype.reset = function () {
    this.running = false;
    window.cancelAnimationFrame(this.frameReq);
    this.els.seconds.textContent = this.duration / 1000;
    this.els.ticker.style.height = null;
    this.element.classList.remove('countdown--ended');
  };
  
  Timer.prototype.setDuration = function (duration) {
    this.duration = duration;
    this.els.seconds.textContent = this.duration / 1000;
  };
  
  var timer = new Timer(300000, document.getElementById('countdown'));
  timer.start();
  //# sourceURL=pen.js
      </script>
  
    
  
  
  
  
   
  <script src="moz-extension://e7260fdc-a0e0-4f1e-86ae-78f78d25e82f/inject-scripts/searchvideos.js" async=""></script></body></html>