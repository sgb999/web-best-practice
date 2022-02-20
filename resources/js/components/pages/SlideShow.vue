<template>
    <div class="slideshow">
        <button @click="i--" :disabled="i <= 0" class="left-button">&lt;</button>
        <img :src="images[this.i]">
        <button @click="i++" :disabled="i >= images.length - 1" class="right-button">&gt;</button>
    </div>

</template>

<script>
export default {
    name: "SlideShow",
    data(){
        return {
            i : 0,
            images : [
                '/images/blanket.jpg',
                '/images/cushions.jpg',
                '/images/throwpillow.jpg'
            ]
        }
    },
    methods: {
       changeImg(){
           if(this.i < this.images.length - 1){
               this.i++;
           }
           else if (this.i >= this.images.length - 1){
               this.i = 0;
           }
       }
    },
    mounted(){
        window.setInterval(() => {
            this.changeImg()
        }, 5000);
    }

};
</script>

<style scoped lang="sass">
.slideshow
    display: flex
    justify-content: center
    margin-bottom: 30px
    button
        border: none
        outline: none
    button:hover
        background-color: lightgray
    .left-button
        height: 30px
        position: relative
        top: 13rem
        left: 1.2rem
    .right-button
        height: 30px
        position: relative
        top: 13rem
        right: 1.2rem
        color: #00000080
    img
        width: 500px
        height: 500px
        animation: fadeIn 500ms
        @keyframes fadeIn
            from
                opacity: 0
            to
                opacity: 1

@media only screen and (max-width: 1400px)
.slideshow
    img
       width: 440px
    .right-button
        right: 1.2rem
    .left-button
        left: 1.2rem



</style>
