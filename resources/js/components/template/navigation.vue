<template>
    <nav>
        <ul class="navigation-bar">
            <li class="right" v-for="header in headers"><inertia-link :href="header.link">{{ header.label }}</inertia-link></li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "navigation",
    data(){
        return {
            headers: [
                {
                    label: 'Contact Us',
                    link: '/contact-us',
                },
                {
                    label: 'About/Gallery',
                    link: '/about',
                },
                {
                    label: 'Home',
                    link: '/',
                }
            ]
        }
    }
};
</script>

<style scoped>
ul.navigation-bar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #FFFFFF;
}

ul.navigation-bar li {float: left;}

ul.navigation-bar li a {
    display: block;
    color: #000000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
#header {
    text-align: center;
}
nav {
    box-shadow: 0 2px 2px -2px rgba(0,0,0,.2);
}
ul.navigation-bar li a:hover:not(.active) {
    border-radius: 5px;
    background-color: #CF9FFF;
}

ul.navigation-bar li a.active {background-color: #04AA6D;}

ul.navigation-bar li.right {float: right;}

@media screen and (max-width: 600px) {
    ul.navigation-bar li.right,
    ul.navigation-bar li {float: none;}
}
</style>
