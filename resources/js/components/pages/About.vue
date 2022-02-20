<template>
    <Head><title>About Page</title></Head>
    <navigation />
    <div class="container">
        <h1> About Us</h1>
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

        <div class="layout">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d767.7266913142232!2d-2.3007631500555417!3d53.59358784532368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ba4dd02f28675%3A0xd22368c8e8e6afdd!2sWeb%20Best%20Practice!5e0!3m2!1sen!2suk!4v1645368885901!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <h2>Gallery</h2>
        <SlideShow />
    </div>
    <Footer />
</template>

<script>
import navigation from "../template/navigation";
import Footer from "../template/footer";
import SlideShow from "./SlideShow";
export default {
    name: "About",
    components: {
        navigation,
        Footer,
        SlideShow
    },
    data(){
        return {
            images : [
                {
                    image : '/images/pillow-product.jpg',
                    name: 'pillow'
                },
                {
                    image : '/images/pillow-product.jpg',
                    name: 'pillow'
                },
                {
                    image : '/images/pillow-product.jpg',
                    name: 'pillow'
                },
                {
                    image : '/images/pillow-product.jpg',
                    name: 'pillow'
                },
                {
                    image : '/images/pillow-product.jpg',
                    name: 'pillow'
                },
                {
                    image : '/images/pillow-product.jpg',
                    name: 'pillow'
                },
            ]
        }
    }
};
</script>

<style scoped>
*{
    font-family: 'Montserrat', sans-serif;
}
.container{
    text-align: center;
}

.layout {
    margin-top: 30px;
    padding-top: 50px;
    margin-bottom: 30px;
    padding-bottom: 50px;
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: 250px 250px;
    justify-content: center;
    text-align: center;
    width: 100%;
    grid-column-gap: 5%;
    font-size: 1.2rem;
    border-radius: 25px;
    background-color: #C3B1E140;
    box-shadow: rgba(17, 17, 26, 0.1) 0 4px 16px, rgba(17, 17, 26, 0.1) 0 8px 24px, rgba(17, 17, 26, 0.1) 0 16px 56px;

}
p{
    grid-column: 1/1;
    width: 400px;
    height: 200px;
    font-size: 16px;
    padding: 0;
}
iframe{
    grid-column: 2/2;
    width: 400px;
    height: 400px;
}
@media only screen and (max-width: 1400px) {
    .layout{
        display: block;
    }
    p{
        margin: 0 auto 40px;
    }
}
</style>
