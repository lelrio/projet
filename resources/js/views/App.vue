<template>
    <div>
        <Header/>
        <div class="container">
            <router-view></router-view>
        </div>
        <Footer />
    </div>
</template>
<script>
    import Footer from '../components/footer';
    import Header from '../components/header';


    export default {
        components: {
            Footer,
            Header
        },
    }
</script>