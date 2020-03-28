<template>
   <div class="root">
          <img src="../assets/img/logoMenu.png" class="logo"/>
          <div class="menuItems">
              <router-link to="/" class="item1">              
                SHOP
              </router-link>
              <router-link to="/about" class="item2">
                ABOUT US
              </router-link>
          </div>
          <a href="https://www.instagram.com/lightweight.official/" target="_blank" class="insta">
            <img src="../assets/img/insta.png" class="instaLogo"/>
          </a>
    </div> 
</template>
<script>
export default {
    name: "Menu"
}
</script>
<style lang="scss" scoped>
.root{
    min-height: 10vh;
    min-width: 100vw;
    box-shadow: .5rem .5rem .5rem rgba(0,0,0,0.5);
    position: fixed;
    background: rgba(255,255,255,0.95);
    display: flex;
    position: relative;
    .logo{
        position: absolute;
        top:1vh;
        left:3rem;
        height: 8vh;
    }
    .menuItems{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        font-size: 2rem;

        .item1{
            margin-right:6rem;
                    font-family: font1;
        }
        .item2{
            margin-left:6rem;
                    font-family: font1;
        }

    }
    .insta{
        .instaLogo{
            max-height:4vh; 
        }
        position: absolute;
        top:3vh;
        right:3rem;
        height: 4vh;
    }
}
</style>