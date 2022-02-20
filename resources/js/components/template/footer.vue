<template>
    <div class="page">
        <div class="container">
            <div class="footer">
                <div v-for="link in footerLinks" :class="link.class">
                    <h2>{{ link.header }}</h2>
                    <inertia-link v-for="text in link.text" :href="link.link"><p>{{ text }}</p></inertia-link>
                </div>
                <div class="social">
                    <inertia-link id="facebook" href="#">Facebook</inertia-link>
                    <inertia-link id="instagram" href="#">Instagram</inertia-link>
                    <inertia-link id="twitter" href ="#">Twitter</inertia-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "footer",
    data(){
        return{
            footerLinks: [
                {
                    class: 'links-1',
                    header: 'Links',
                    link: '#',
                    text: [
                        'Example',
                        'Example',
                        'Example'
                    ]
                },
                {
                    class: 'links-2',
                    header: 'Links',
                    link: '#',
                    text: [
                        'Example',
                        'Example',
                        'Example'
                    ]
                },
                {
                    class: 'links-3',
                    header: 'Links',
                    link: '#',
                    text: [
                        'Example',
                        'Example',
                        'Example'
                    ]
                }
            ]
        }
    }
};
</script>

<style scoped lang="scss">
.page{
    height: 45.5vh;
    background-color: mediumpurple;
}
.links-1{
    grid-column: 1/4;
    grid-row: 1/3;
    width: 20%;
    p {
        margin: 0;
    }
}
.links-2{
    grid-column: 2/4;
    grid-row: 1/3;
    width: 20%;
    p {
        margin: 0;
    }
}
.links-3{
    grid-column: 3/4;
    grid-row: 1/3;
    width: 20%;
    p {
        margin: 0;
    }
}
.footer a{
    color: #FFFFFF;
    text-decoration: none;
}
.social{
    grid-column: 4/4;
    grid-row: 1/3;
    width:110px;
}
.social a{
    border-style: solid;
    text-align: center;
    display: block;
    margin: 0 auto 10px;
    font-size: 20px;
}
.address p{
    padding-bottom: 0;
}
#facebook{
    color: #405DE6;
    border-color: #405DE6;
}
#instagram{
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
}
#twitter{
    color: #00ACEE;
    border-color: #00ACEE;
}
.footer{
    padding-top: 30px;
    display: grid;
    grid-template-columns: auto auto auto auto;
    color: #FFFFFF;
}
@media only screen and (max-width: 600px) {
    .page{
        height: 25vh;
    }
    .footer{
        grid-column-gap: 70px;
    }
}
</style>
