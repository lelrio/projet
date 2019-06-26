<template>
  <div class="about">
    <div class="contain">
      <div class="row" id="centered">
        <b-col md="8">
          <h1>Voici ce que vous pourrez acheter</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sint accusamus adipisci, dolores, reiciendis architecto asperiores praesentium, quam autem explicabo iure nisi id quasi tempore iusto laborum qui iste eius?</p>
          <img class="img-fluid" src="/images/entreprise.jpg" alt>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque tempora, beatae vel inventore accusamus velit dolorem neque ipsa! Explicabo, cupiditate excepturi. Delectus, esse hic! Fugiat doloremque eius voluptatem deleniti mollitia.</p>
          <div class="btnstore">
            <b-button variant="outline-dark" href="/store">Boutique</b-button>
          </div>
        </b-col>
      </div>
    </div>
  </div>
</template>

<style scoped>
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

</style>

