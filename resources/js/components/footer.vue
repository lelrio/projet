<template>
  <div class="footer">
    <b-col md="6" offset-md="6" class="footerrs">
      <div class="row" id="test">
        <b-col md="5" class="left">
          <li>Boutique</li>
          <li>Contact</li>
          <li>À propos</li>
        </b-col>
        <b-col md="7">
          <li>Mon compte</li>
          <li>Conditions générales</li>
          <li>Mentions légales</li>
        </b-col>
      </div>
      <div class="row">
        <b-img src="images/facebook.png" fluid alt="Responsive image"></b-img>
        <b-img src="images/instagram.png" fluid alt="instagra icone"></b-img>
        <b-img src="images/twitter.png" fluid alt="twitter icone"></b-img>
        <b-img src="images/linkedin.png" fluid alt="linkedin icone"></b-img>
      </div>
    </b-col>
  </div>
</template>

<script>
export default {};
</script>
<style lang="scss">
.footer {
  background-image: url("/images/fer.png");
  background-size: cover;
  height: 300px;
  margin-top: 50px;
}
#test{
  display: flex!important;
  justify-content: center!important;
  align-items: center!important;
  margin-bottom: 40px;
  width: 70%;
}
.footerrs {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  color: white;
  background-color: rgba(0, 0, 0, 0.5);
  height: 100%;
  text-align: start;
}
.footerrs img {
  height: 50px;
  margin: 0 30px 0 0;
}
li {
  list-style: none;
}
.left{
  display: flex;
  justify-content: center;
  align-content: center;
  flex-direction: column;
}

</style>