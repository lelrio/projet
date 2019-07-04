<template>
  <div class="home">
    <div class="top">
      <div class="container">
        <div class="text_home">
          <p class="text">
            Bienvenue sur Shootix
            <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quam sit porro impedit natus beatae et cumque optio eius
          </p>
          <b-button variant="outline-dark" href="/shop" id="btn_shop">Vers la boutique</b-button>
        </div>
      </div>
    </div>
    <b-container fluid class="bv-example-row mt-2">
      <b-row>
        <b-col md="4" class="p-3 text-center">
          <img src="/images/app1.png" alt>
          <p class="text-center">Super Appareil photo</p>
        </b-col>
        <b-col md="4" class="p-3 text-center">
          <img src="/images/appa2.jpg" alt>
          <p class="text-center">Appareil cool</p>
        </b-col>
        <b-col md="4" class="p-3 text-center">
          <img src="/images/appa3.jpg" alt>
          <p class="text-center">Appareil moins cool</p>
        </b-col>
      </b-row>
    </b-container>
    <hr class="split">
    <b-container fluid class="bv-example-row mt-5">
      <b-row>
        <div class="buy">
          <div class="pstg">
            <h2>Voici ce que vous pourrez acheter</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aliquam obcaecati vitae doloremque quos, omnis blanditiis necessitatibus! Id mollitia officiis necessitatibus cumque adipisci maiores repellat sit quos. Velit, accusamus veniam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore quia iusto error voluptatibus labore? Obcaecati, nam dolorum. Assumenda dolorum enim repellendus nisi impedit numquam cupiditate maxime voluptatem dolorem? Totam, explicabo.</p>
            <b-button variant="outline-dark" href="/shop">Go to the store</b-button>
          </div>
        </div>
      </b-row>
    </b-container>
  </div>
</template>

<style scoped>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  color: white;
}
.top{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-image: url("/images/cam3.png");
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
  height: 510px;
}
.container a {
  color: white;
  border: 1px solid white;
  padding: 10px;
  margin: 10px;
}
.container a:hover {
  text-decoration: none;
  color: white;
}
.text_home {
  background-color: rgba(0, 0, 0, 0.85);
  padding: 50px;
  width: 70%;
}

@media screen and (max-width: 640px) {
  .text_home {
    display: block;
  height: 450px;
  }
  .text{
    height: 200px;
  }
  #btn_shop{
    margin-top: 100px;
  }
}

.split {
  width: 100%;
  border: 2px solid black;
}
.buy {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.pstg {
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
  flex-direction: column;
  width: 75%;
  text-align: start;
}
.pstg a {
  float: right;
}
.home{
  margin-top: 50px;
}
</style>

