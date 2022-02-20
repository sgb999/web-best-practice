<template>
    <div class="container">
        <div class="banner-container">
            <div class="banner" v-for="banner in bannerData">
                <img :src="banner.link" :alt="banner.name" width="1000" height="600">
            </div>
            <div class="banner" v-for="banner in bannerData">
                <img :src="banner.link" :alt="banner.name" width="800" height="600">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Banner",
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

.banner-container {
    width: 80%;
    display: flex;
    animation: marquee 20s infinite linear;
}

.banner-container .banner {
    flex-shrink: 0;
}

img {
    width: 100%;
    object-fit: contain;
    border: 5px solid rgba(255, 255, 255, 0.9);
}

@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}
</style>
