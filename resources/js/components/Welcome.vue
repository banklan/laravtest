<template>
    <div class="landing">
        <div class="welcome_banner">
            <div class="banner_caption text-center mb-10">
                <h1 class="mb-3 animate__animated animate__bounceInDown animate__slower">Welcome to LaravTest...</h1>
                <p class="animate__animated animate__bounceInRight animate__slower">An app to test how well digital ocean works!</p>
            </div>
            <div class="banner_cta">
                <v-btn class="mt-5" outlined elevation="12" color="white white--text" width="30%" x-large>CTA Button</v-btn>
            </div>
        </div>
        <v-container>
            <v-row justify="center" class="mt-5">
                <v-cols col="12" md="10">
                    <h1>Our services</h1>
                </v-cols>
            </v-row>
            <v-row justify="center" class="">
                <v-col cols="12" md="4">
                    <v-card light raised color="secondary white--text" elevation="12" shaped min-height="200" class="mx-auto">
                        <v-card-text class="text-center card-icon">
                            <i class="uil uil-jackhammer"></i>
                        </v-card-text>
                        <v-card-text class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusantium rem autem animi sed perferendis velit quod excepturi.
                        </v-card-text>
                        <v-card-text class="card-btn">
                            <v-btn x-large light color="white primary--text" outlined>
                                Join Us Now
                            </v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col cols="12" md="4">
                    <v-card light raised color="primary white--text" elevation="12" shaped min-height="200" class="mx-auto">
                        <v-card-text class="text-center card-icon">
                            <i class="uil uil-telescope"></i>
                        </v-card-text>
                        <v-card-text class="card-text">
                            Second ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusantium rem autem animi sed perferendis velit quod excepturi.
                        </v-card-text>
                        <v-card-text class="card-btn">
                            <v-btn x-large light color="white secondary--text" outlined>
                                Join Us Now
                            </v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col cols="12" md="4">
                    <v-card light color="secondary white--text" raised elevation="12" shaped min-height="200" class="mx-auto">
                        <v-card-text class="text-center card-icon">
                            <i class="uil uil-constructor"></i>
                        </v-card-text>
                        <v-card-text class="card-text">
                            Third ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusantium rem autem animi sed perferendis velit quod excepturi.
                        </v-card-text>
                        <v-card-text class="card-btn">
                            <v-btn x-large light color="white primary--text" outlined>
                                Join Us Now
                            </v-btn>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<style lang="scss" scoped>
.v-card{
    display: flex !important;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}
.v-card__text{
    &.card-text{
        color: #fff;
        padding: 1.5rem 1rem;
        font-size: 1.1rem;
        font-weight: 300;
        line-height: 1.8;
    }
    &.card-icon{
        text-align: center !important;
        margin: 1.5rem;
        i{
            font-size: 6.5rem;
            color: #fff;
            font-weight: 400 !important;
        }
    }
    &.card-btn{
        text-align: center;
        margin-bottom: 1.5rem;
    }
}
</style>

</style>

