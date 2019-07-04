<template>
  <div class="about mt-5">
    <div class="row" id="centered">
      <h1>Voici notre entreprise !</h1>
      <p>Pleine de jeune talent et d'ambition nous travaillons afin de vous fournir les meilleurs appareils Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero nulla atque adipisci est maxime quis ullam et nam ratione cumque explicabo vel, dicta similique veritatis voluptatem molestiae voluptate non eum? </p>
      <img class="img-fluid" src="/images/entreprises.jpg" alt>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque tempora, beatae vel inventore accusamus velit dolorem neque ipsa! Explicabo, cupiditate excepturi. Delectus, esse hic! Fugiat doloremque eius voluptatem deleniti mollitia.</p>
      <div class="btnstore">
        <b-button variant="outline-dark" href="/shop">Boutique</b-button>
      </div>
    </div>
  </div>
</template>

<style scoped>
@media screen and (max-width: 640px) {
  .about{
    padding: 20px;
  }
}
.btnstore{
  margin-top: 50px;
}
label{
  margin-bottom: 0;
}
.segment{
  display: flex;
  align-items: center;
  height: 100px;
  width: 100vw;
}
#segmentation{
  width: 100%;
  border: 1px solid black;
}
#centered{
  display: flex;
  justify-content: center;
  align-items: center;
}
#message{
  height: 100px;
  width: 250px;
  padding-bottom: 80px;
}
.img-fluid{
  height: 600px;
  width: 100%;
}
</style>

