

<style>
- let t="Animate the text colors";
header
  h1(data-val=t)=t
    @import url('https://fonts.googleapis.com/css2?family=Asap:wdth,wght@75..125,100..900&display=swap')
    ;

    //props to @dtab428 for background-image animation idea.

    //https://codepen.io/dtab428/pen/BavMgqB
body {
  margin: 0;
  min-height: 100vh;
  display: grid;
  place-content: center;
  font-family: "Asap", sans-serif;
  font-optical-sizing: auto;
  background-color: #F9F6EF;
}
h1 {
  text-decoration: underline 1px #9997;
  font-weight: 900;
  font-size: 6.5vw;
  position: relative;
  animation: smush 30s linear alternate infinite;
  --as: calc(.5lh - (1cap - 1ex));
  -webkit-box-reflect:
  below calc(-1 *  var(--as) )
  linear-gradient(#0000 50%, #0009);
  &:before,
  &:after {
    --tm: 2s;
    position: absolute;
    inset: 0;
    content: attr(data-val);
    color: transparent;
    opacity: 0;
    animation: show var(--tm) linear alternate infinite;
  }
  &:before {
    z-index: 1;
    background: //fallback for firefox bug
      linear-gradient(45deg,
          hsl(0, 100%, 70%),
          hsl(30, 100%, 70%),
          hsl(60, 100%, 70%),
          hsl(90, 100%, 70%),
          hsl(120, 100%, 70%),
          hsl(150, 100%, 70%),
          hsl(180, 100%, 70%),
          hsl(210, 100%, 70%),
          hsl(240, 100%, 70%),
          hsl(270, 100%, 70%),
          hsl(300, 100%, 70%),
          hsl(330, 100%, 70%),
          hsl(360, 100%, 70%)
        );//fallback
  background: linear-gradient(in hsl longer hue 45deg, #f66 0 0);
    background-clip: text;
    -webkit-background-clip: text;
  }
  &:after {
    animation-delay: calc(var(--tm) / 4);
    z-index: 2;
    background: //fallback for firefox bug
      linear-gradient(-45deg,
          hsl(0, 100%, 70%),
          hsl(30, 100%, 70%),
          hsl(60, 100%, 70%),
          hsl(90, 100%, 70%),
          hsl(120, 100%, 70%),
          hsl(150, 100%, 70%),
          hsl(180, 100%, 70%),
          hsl(210, 100%, 70%),
          hsl(240, 100%, 70%),
          hsl(270, 100%, 70%),
          hsl(300, 100%, 70%),
          hsl(330, 100%, 70%),
          hsl(360, 100%, 70%)
        );//fallback
  background: linear-gradient(in hsl longer hue -45deg, #f66 0 0);
    background-clip: text;
    -webkit-background-clip: text;
  }
}
@keyframes show {
  to {
    opacity: 1;
  }
}
@keyframes smush {
  from {
    font-variation-settings:
    "wdth" 75;
  }
  to {
    font-variation-settings:
    "wdth" 150;
  }
}
  </style>

 
