<template>
    <div class="card w-25 m-2">
        <a :href="link.link" class="card-link">
            <div class="d-flex justify-content-center p-2">
                <h4
                v-if="link.imageUrl !== ''"
                class="mb-0"
                >
                    <img :src="link.imageUrl" :alt="link.linkText"> 
                    <span class="ml-1">{{ this.link.linkText }}</span>
                </h4>
                <h4
                v-else
                class="mb-0"
                >
                    <i :class="iconClasses"></i> 
                    <span class="ml-1">{{ this.link.linkText }}</span>
                </h4>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        name: "CardLink",

        props: {
            link: {
                type: Object,
                required: true,
                default() {
                    return {
                        id: 1,
                        type: "song",
                        icon: "fab fa-spotify",
                        imageUrl: "",
                        link: "https://open.spotify.com/track/6tFhISpvx7PGbwwhzfW4LW",
                        title: "Milk Products",
                        linkText: "Spotify",
                    }
                },
            }
        },

        computed: {
            iconClasses() {
                let classes = this.link.icon;

                if (this.link.linkText == "Spotify") {
                    classes += " spotify-green rounded-circle";
                }

                return classes === "" ? 'fa-solid fa-music' : classes;
            }
        }
    }
</script>
