<template>
  <div class="header">
    <div id="nav">  
      <b-navbar toggleable="lg">
        <b-navbar-brand href="Home">
          <img src="/images/logo_final.png" id="logo" alt="logo">
        </b-navbar-brand>
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        <b-collapse id="nav-collapse" is-nav>
          <b-row>
            <b-col>
              <router-link to="/">Home</router-link>
            </b-col>
            <b-col>
              <router-link to="/about">About</router-link>
            </b-col>
            <b-col>
              <router-link to="/store">Store</router-link>
            </b-col>
            <b-col>
              <router-link to="/panier"> Panier </router-link>
            </b-col>
          </b-row>
          <b-navbar-nav class="ml-auto">
            <b-nav-item-dropdown style="margin-right:50px;">
              <template slot="button-content">
                <a>Compte</a>
              </template>
              <div class="logs" >
                <a href="/login" class="log">Login</a>
                <a href="/register" class="log">Sign in</a>
              </div>
            </b-nav-item-dropdown>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
    </div>
  </div>
</template>

<script>

export default {

}
</script>
<style scoped lang="scss">
#logo{
  height: 100px;
  width: 100px;
}
.logs{
  display: flex;
  flex-direction: column;
  .log{
    padding: 20px;
  }
}
.ml{
  margin-right: 100px;
}
#nav {
  .col {
    margin-left: 100px;
  }
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>