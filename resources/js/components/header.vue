<template>
  <div class="header">
    <b-navbar id="contain">
      <b-navbar-brand href="/">
        <img src="/images/white.png" id="logo" alt="logo">
      </b-navbar-brand>
      <b-nav-item to="/">Home</b-nav-item>
      <b-nav-item to="/about">About</b-nav-item>
      <b-nav-item href="/shop">Store</b-nav-item>
      <b-nav-item href="/account" class="break">Account</b-nav-item>
      <b-dropdown text="User" right class="break mt-1">
        <b-dropdown-item href="/login">Login</b-dropdown-item>
        <b-dropdown-item href="/register">Register</b-dropdown-item>
      </b-dropdown>
    </b-navbar>
  </div>
</template>

<script>

export default {

}
</script>
<style scoped lang="scss">
li{
  list-style: none;
}
#logo{
  height: 100px;
  width: 100px;
}
#contain{
  display: flex;
  justify-content: space-evenly;
  background-color: black;
}
#contain a{
  color: white;
}
b-nav-item-dropdown{
  color: white;
}
@media screen and (max-width: 640px) {
  .break {
    display:block;
    clear:both;
  }
  #contain{
    overflow: scroll;
  }
  #logo{margin-left: 170px;}
}

</style>