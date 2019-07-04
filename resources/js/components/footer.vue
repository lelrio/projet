<template>
  <div class="footer">
    <b-col md="6" offset-md="6" class="footerrs">
      <div class="row" id="test">
        <b-col md="5" class="left">
          <a href="/shop">Store</a>
          <b-nav-item to="/about">About</b-nav-item>
          <a href="/account">Account</a>
          
        </b-col>
      </div>
      <div class="row">
        <a href="https://www.facebook.com/"><b-img src="images/facebook.png" fluid alt="Responsive image"></b-img></a> 
        <a href="https://www.instagram.com/?hl=fr"><b-img src="images/instagram.png" fluid alt="instagra icone"></b-img></a> 
        <a href="https://www.linkedin.com"><b-img src="images/twitter.png" fluid alt="twitter icone"></b-img></a> 
        <a href="https://twitter.com/login?lang=fr"><b-img src="images/linkedin.png" fluid alt="linkedin icone"></b-img></a> 
      </div>
    </b-col>
  </div>
</template>

<script>
export default {};
</script>
<style scoped>
.nav-link{
  display: inline;
}
.footer {
  background-image: url("/images/fer.png");
  background-size: cover;
  height: 300px;
  margin-top: 50px;
}
a{
  color: white;
  text-decoration: none;
  font-size: 20px;
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
  justify-content: space-evenly;
  align-content: center;
  color: white;
}

</style>