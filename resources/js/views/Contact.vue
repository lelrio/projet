<template>
    <div class="containform">
        <h2>Contact us</h2>
        <p>Hello welcome to our contact page you will be able to contact us by sending a request with this form thanks for asking ! </p>
        <form action="" method="get" class="contact">
          <label>Email :</label>
          <b-input-group>
          <b-form-input type="email" name="email" placeholder="jean@valjean.fr"></b-form-input>
          </b-input-group>
          <label class="mt-3">Message :</label>
          <b-input-group>
            <b-form-input id="message" type="text" name="message" placeholder="Bonjour M/Mme blablabla"></b-form-input>
          </b-input-group>
          <br>
          <b-button variant="outline-dark" type="submit" value="send">Send</b-button>
        </form>
      </div>
</template>


<style scoped>
.containform{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.contact{
  display: flex;
  justify-content: center;
  align-items: flex-start;
  flex-direction: column;
  width: 50%;
}
#message{
  height: 100px;
  width: 250px;
  padding-bottom: 80px;
}
</style>


