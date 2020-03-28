<template>
  <div class="home">
    <div class="infoHolder">
          <img src="../assets/img/logo.png" class="logo" />
          <p class="drop">Website live in:</p>
          <flip-countdown deadline="2020-04-24 00:00:00"></flip-countdown>
    </div>

  </div>
</template>

<script>
import FlipCountdown from 'vue2-flip-countdown'
export default { 
  name: 'Home',
  components: { FlipCountdown }
}
</script>
<style lang="scss" scoped>
.home{
  position: relative;
  min-height: 90vh;
  min-width: 100vw;
  .infoHolder{
        position: absolute;
       display: flex;
       flex-direction: column;
    top:9rem;
    left:50%;
    transform: translateX(-50%);
    min-width: 100vw;
    &::v-deep .flip-card__top,
    &::v-deep .flip-card__bottom,
     &::v-deep  .flip-card__back-bottom,
      &::v-deep .flip-card__back::before,
      &::v-deep .flip-card__back::after,
      &::v-deep .flip-card__top-4digits,
      &::v-deep .flip-card__bottom-4digits,
      &::v-deep .flip-card__back-bottom-4digits,
      &::v-deep .flip-card__back-4digits::before,
      &::v-deep .flip-card__back-4digits::after,
      &::v-deep .flip-card__bottom,
      &::v-deep .flip-card__back-bottom,
      &::v-deep .flip-card__bottom-4digits,
      &::v-deep .flip-card__back-bottom-4digits {
      color:white!important;
    }
    &::v-deep .flip-clock__slot{
      color:white!important;
      font-size: 2rem;

    }
    &::v-deep .flip-clock{
      margin-top:3rem;
      font-size: 6rem;
    }
    &::v-deep .flip-card{
      font-size: 6rem;
    }
    
    .logo{
    max-height:25rem;
    object-fit: contain
    }
    .countdown{
      color:white;
      margin-top:3rem;
      font-size: 4rem;
      text-align: center;
    }
    .drop{
      font-size: 7.5rem;
      color:white;
      text-align: center;
      text-transform: uppercase;
      font-family: titlefont;
      margin-top:3rem;
    }
  }
}
</style>
