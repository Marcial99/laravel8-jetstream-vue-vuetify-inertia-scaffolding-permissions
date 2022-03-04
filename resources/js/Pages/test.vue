<!-- App.vue -->
<template>
    <v-app>
        <v-navigation-drawer app v-model="drawer">
            <!-- -->
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon
                @click.stop="drawer = !drawer"
            ></v-app-bar-nav-icon>
            <!-- -->
        </v-app-bar>

        <!-- Sizes your content based upon application components -->
        <v-main>
            <!-- Provides the application the proper gutter -->
            <v-container fluid>
                <v-parallax
                    src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
                ></v-parallax>
                <v-sheet
                    color="white"
                    elevation="3"
                    height="1480"
                    rounded
                    width="auto"
                ></v-sheet>
            </v-container>
        </v-main>

        <v-footer app>
            <!-- -->
        </v-footer>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: false,
    }),
};
</script>

<style></style>
