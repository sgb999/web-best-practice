<template>
    <div class="marquee">
        <ul class="marquee-content">
            <img v-for="banner in bannerData" :src="banner.link" :alt="banner.name">
            <img v-for="banner in bannerData" :src="banner.link" :alt="banner.name">
        </ul>
    </div>
</template>

<script>
export default {
    name: "BannerTest",
    data(){
        return {
            bannerData: [
                {
                    name: 'pillow',
                    link: '/images/throwpillow.jpg'
                },
                {
                    name: 'blanket',
                    link: '/images/blanket.jpg'
                },
                {
                    name: 'cushion',
                    link: '/images/cushions.jpg'
                }
            ]
        }
    }
};
</script>

<style scoped>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.marquee {
    overflow: hidden;
    position: relative;
}
.marquee:before, .marquee:after{
    position: absolute;
    top: 0;
    z-index: 1;
}
.marquee:before {
    left: 0;
    background: linear-gradient(to right, #ffffff 0%, transparent 100%);
}
.marquee:after {
    right: 0;
    background: linear-gradient(to left, #ffffff 0%, transparent 100%);
}
.marquee-content{
    list-style: none;
    height: 100%;
    display: flex;
    animation: scrolling 10s linear infinite;
    flex-shrink: 0;
}
@keyframes scrolling {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-180vw);
    }
}
.marquee-content:hover{
    animation-play-state: paused;
}
</style>
