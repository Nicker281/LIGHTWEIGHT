<template>
  <div id="app">
    <Menu />
    <router-view/>
  </div>
</template>
<script>
import Menu from "./views/Menu.vue"
export default {
  name:"App",
  components: {
    Menu
  }
}
</script>
<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url('assets/img/bg.jpg') no-repeat center bottom;
background-size: cover;
padding:0;
min-height:100vh;
overflow: hidden;
}
*,
*::after,
*::before{
  padding: 0;
  margin:0;
  box-sizing: inherit;
  
}
html{
  font-size: 62.5%;
}
body{
  box-sizing: border-box;
}
a,
a:visited{
  text-decoration: none;
  color:black;
}
@font-face {
  font-family: 'font1';
  src: url('assets/fonts/gymkhana.ttf');
}
@font-face {
  font-family: 'titlefont';
  src: url('assets/fonts/octinsports.ttf');
}
@media only screen and (min-width: 100px) {
    html{
      font-size: 35%;
    }
}
@media only screen and (min-width: 480px) {
    html{
      font-size: 42.5%;
    }
}
@media only screen and (min-width: 600px) {
    html{
      font-size: 47.5%;
    }
}
@media only screen and (min-width: 900px) {
    html{
      font-size: 52.5%;
    }
}
@media only screen and (min-width: 1200px) {
    html{
      font-size: 62.5%;
    }
}


</style>
