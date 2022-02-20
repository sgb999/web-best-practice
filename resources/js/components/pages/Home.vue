<template>
    <Head><title>Home Page</title></Head>
    <navigation />
    <div class="background">
        <section class="bed-info container" style="padding-bottom: 200px; margin-bottom: 20px;">
            <p class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <img class="image" src="/images/purple-bed.jpg" alt="purple-bed" height="500" width="500">
        </section>
    </div>

    <banner />
    <div class="background">
        <section class="container products-container">
            <h2>Shop our Products</h2>
            <div class="products">
                <img src="/images/pillow-product.jpg" alt="pillow product">
                <p>product 1</p>
                <img src="/images/pillow-product.jpg" alt="pillow product">
                <p>product2</p>
                <img src="/images/pillow-product.jpg" alt="pillow product">
                <p>product 3</p>
            </div>
        </section>
    </div>
    <Footer />
</template>

<script>
import navigation from "../template/navigation";
import Footer from "../template/footer";
import banner from "./BannerTest";
export default {
    name: "Home",
    components :{
        navigation,
        banner,
        Footer
    }
};
</script>

<style scoped lang="sass">
*
    font-family: 'Ubuntu', sans-serif

.container
    padding-top: 20px
    h2, p
        padding-bottom: 10px
        color: #800080
.bed-info
    margin-top: 30px
    padding-top: 50px
    margin-bottom: 30px
    padding-bottom: 50px
    display: grid
    grid-template-columns: auto auto
    grid-template-rows: 250px 250px
    justify-content: center
    text-align: center
    width: 100%
    grid-column-gap: 5%
    font-size: 1.2rem
    border-radius: 25px
    background-color: #C3B1E140
    box-shadow: rgba(17, 17, 26, 0.1) 0 4px 16px, rgba(17, 17, 26, 0.1) 0 8px 24px, rgba(17, 17, 26, 0.1) 0 16px 56px
@keyframes fadeIn
    0%
        opacity: 0
    100%
        opacity: 1
.text
    animation: fadIn linear 5s
    grid-row: 2/2
.image
    grid-row: 1/3
.products-container
    animation: fadein 2s
    img
        width: 300px
    @keyframes fadein
        from
            opacity: 0
        to
            opacity: 1
.products
    margin-top: 30px
    padding-top: 50px
    margin-bottom: 30px
    display: grid
    grid-template-columns: auto auto auto
    grid-template-rows: 250px 250px
    img
        grid-row: 1/1
    p
        grid-row: 2/2
    justify-content: center
    text-align: center
    width: 100%
    height: 400px
    grid-column-gap: 5%
    font-size: 1.2rem
    border-radius: 25px
    background-color: #C3B1E140
    box-shadow: rgba(17, 17, 26, 0.1) 0 4px 16px, rgba(17, 17, 26, 0.1) 0 8px 24px, rgba(17, 17, 26, 0.1) 0 16px 56px
    img
        cursor: pointer
        transition: transform 0.8s
    img:hover
        box-shadow: rgba(17, 17, 26, 0.1) 0 4px 16px, rgba(17, 17, 26, 0.1) 0 8px 24px, rgba(17, 17, 26, 0.1) 0 16px 56px
        transform: scale(1.2)
@media only screen and (max-width: 1000px)
    .bed-info
        display: block
        height: 900px
    .products
        display: block
        height: 900px
        img
            transition: none
            cursor: default
        img:hover
            transform: none
</style>
