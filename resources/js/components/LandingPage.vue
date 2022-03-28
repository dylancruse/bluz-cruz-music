<template>
    <div>
        <!-- Jumbotron -->
        <section class="jumbotron text-center">
            <div class="container">
                <!-- Page Title -->
                <h1 class="jumbotron-heading mb-4">{{ pageTitle }}</h1>

                <!-- Main Links -->
                <div class="d-flex justify-content-center">
                    <card-link 
                        v-for="link in mainLinks"
                        :link="link"
                        :key="link.id"
                    >
                    </card-link>
                </div>

                <!-- Feature Video -->
                <div class="d-flex justify-content-center my-5">
                    <iframe width="560" height="315" :src="featureVideoLink" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="lead text-muted">Fresh, Pure, Energizing &#129371;&#129371; Milk Products</p>
                <p class="lead text-muted"></p>
                <p>
                    <a :href="freeDownloadLink" class="btn btn-success my-2 p-3">
                        <h3 class="mb-0">Free Download</h3>
                    </a>
                    <!-- <a href="#" class="btn btn-primary my-2">Secondary action</a> -->
                </p>
            </div>
        </section>

        <!-- More Music -->
        <div class="album py-5 mb-5 bg-light">
            <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Socials -->
        <div class="row text-white">
            <div class="col-lg-6">
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                <h4>Subheading</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                <h4>Subheading</h4>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>

            <div class="col-lg-6">
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                <h4>Subheading</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                <h4>Subheading</h4>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>
        </div>
    </div>
</template>

<script>
    import CardLink from "./CardLink.vue";

    export default {
        name: "LandingPage",

        components: {
            CardLink
        },

        data: function() {
            return {
                pageTitle: "Milk Products Out Now!!",
                featureVideoLink: "https://www.youtube.com/embed/Rik2_i8ikY8",
                freeDownloadLink: "https://bluzcruz.bandcamp.com/track/milk-products",
                mainLinks: [
                    {
                        id: 1,
                        type: "song",
                        icon: "fab fa-spotify",
                        imageUrl: "",
                        link: "https://open.spotify.com/track/6tFhISpvx7PGbwwhzfW4LW",
                        title: "Milk Products",
                        linkText: "Spotify",
                    },
                    {
                        id: 2,
                        type: "song",
                        icon: "",
                        imageUrl: "",
                        link: "https://soundcloud.com/bluzcruzmusic/milk-products",
                        title: "Milk Products",
                        linkText: "Soundcloud",
                    },
                    {
                        id: 3,
                        type: "song",
                        icon: "fa-brands fa-apple",
                        imageUrl: "",
                        link: "https://music.apple.com/us/album/milk-products-single/1611102091",
                        title: "Milk Products",
                        linkText: "Apple Music",
                    },
                ],
                footerLinks: [],
            };
        },
    }
</script>
