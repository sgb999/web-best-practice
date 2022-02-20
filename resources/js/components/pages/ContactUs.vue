<template>
    <Head><title>Contact Page</title></Head>
    <navigation />
    <div class="page">
        <div class="container">
            <div class="layout">
                <div class="form form_border">
                    <form @submit.prevent>
                        <div class="form-box">
                            <input v-model="form.first_name" id="first_name" class="form__input" placeholder=" " autocomplete="none">
                            <label for="first_name" class="form__label">First Name</label>
                        </div>
                        <div class="form-box">
                            <input v-model="form.last_name" id="last_name" class="form__input" placeholder=" ">
                            <label for="last_name" class="form__label">Last Name</label>
                        </div>
                        <div class="form-box">
                        <input v-model="form.email" id="email" class="form__input" placeholder=" ">
                        <label for="email" class="form__label">E-mail</label>
                        </div>
                        <div class="form-box">
                            <input v-model="form.message" id="message" row="4" class="form__input" placeholder=" ">
                            <label for="message" class="form__label">Message</label>
                        </div>
                        <button class="button">Submit</button>
                    </form>
                </div>
                <div class="email-box">
                    <a href="#">
                        <img src="/images/email.webp" alt="email">
                        <p>Please E-mail us.</p>
                        <p>example email</p>
                    </a>
                </div>
                <div class="phone-box">
                    <a href="#">
                        <img src="/images/phone.webp" alt="phone">
                        <p>Please E-mail us.</p>
                        <p>example email</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>
import navigation from "../template/navigation";
import Footer from "../template/footer";
export default {
    name: "ContactUs",
    components: {
        navigation,
        Footer
    },
    data(){
        return {
            form : {
                first_name : '',
                last_name : '',
                email : '',
                message : '',
                _token : this.$page.props.csrf,
                errors : [],
            },
            success : ''
        }
    },
    methods: {
        contact(){
            this.success = '';
            this.form.errors = [];
            axios.post('/contact-us', this.form)
            .then((response) => {
                if(response.data.success){
                    this.success = response.data.success;
                }
            }).catch(error => {
                if (error.response.data.errors) {
                    this.form.errors = error.response.data.errors;
                }
            });
        }
    }
};
</script>
<style scoped lang="scss">
*{
    font-family: 'Rubik', sans-serif;
}
.layout{
    margin-bottom: 30px;
    padding-bottom: 50px;
    padding-top: 50px;
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: 250px 250px;
    justify-content: center;
    text-align: center;
    grid-column-gap: 30%;
    font-size: 1.2rem;
    border-radius: 25px;
    background-color: #C3B1E140;
    box-shadow: rgba(17, 17, 26, 0.1) 0 4px 16px, rgba(17, 17, 26, 0.1) 0 8px 24px, rgba(17, 17, 26, 0.1) 0 16px 56px;
    a{
        color: black;
        text-decoration: none;
    }
}
.email-box{
    background-color: #FFFFFF;
    grid-column: 1/1;
    grid-row: 1/1;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 15rem;
    height: 10rem;
    padding-top: 10px;
    border-radius: 25px;
    box-shadow: rgba(17, 17, 26, 0.1) 0 4px 16px, rgba(17, 17, 26, 0.1) 0 8px 24px, rgba(17, 17, 26, 0.1) 0 16px 56px;
    img, p{
        display: block;
        margin: 0 auto;
        text-align: center;
    }
}
.phone-box{
    background-color: #FFFFFF;
    grid-column: 1/1;
    grid-row: 2/2;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 15rem;
    height: 10rem;
    padding-top: 10px;
    border-radius: 25px;
    box-shadow: rgba(17, 17, 26, 0.1) 0 4px 16px, rgba(17, 17, 26, 0.1) 0 8px 24px, rgba(17, 17, 26, 0.1) 0 16px 56px;
    img, p{
        display: block;
        margin: 0 auto;
        text-align: center;
    }
}
.form {
    border-radius: 25px;
    box-shadow: rgba(17, 17, 26, 0.1) 0 4px 16px, rgba(17, 17, 26, 0.1) 0 8px 24px, rgba(17, 17, 26, 0.1) 0 16px 56px;
    padding: 15px 20px;
    background-color: #FFFFFF;
    grid-column: 2/2;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 25rem;
    height: 28rem;
    &__input{
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border:2px solid purple;
        border-radius: 0.5em;
        font-family: inherit;
        font-size: inherit;
        color: black;
        outline: none;
        padding: 1.25rem;
        background: none;

        &:hover{
            border-color: #0a53be;
        }
        &:focus{
            border-color: red;
        }
    }
    &__label{
        position: relative;
        top: -3rem;
        left: -6rem;
        padding: 0 0.5rem;
        color: #FFFFFF;
        cursor: text;
        font-family: inherit;
        transition: top 200ms ease-in,
            left 200ms ease-in,
            font-size 200ms ease-in;
        background-color: purple;
    }
    button{
        color: #FFFFFF;
        border-radius: 50px;
        background-color: purple;
    }
    button:hover{

    }
}
.form-box .form__input:focus ~ .form__label,
.form__input:not(:placeholder-shown).form__input:not(:focus) ~ .form__label{
    top: -5.5rem;
    font-size: 0.8rem;
    left: -7.5rem;
    color: black;
    background-color: white;
}
@media only screen and (max-width: 1000px){
.layout{
    display: block;
    .form{
        margin: 0 auto;
    }
    .email-box{
        margin: 50px auto 0;
    }
    .phone-box{
        margin: 50px auto 0;
    }
}
}
</style>
