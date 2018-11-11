<template>
    <div class="columns is-gapless">
        <side-nav :active-index=myIndex></side-nav>
        <div class="column">
            <section class="hero is-primary is-bold">
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <h1 class="title">
                            {{ title }}
                        </h1>
                    </div>
                </div>
            </section>
            <section class="section has-background-light">
                <slot></slot>
            </section>
        </div>
    </div>
</template>

<script>
    import SideNav from "./SideNav"
    export default {
        name: "content-frame",

        components: {
            SideNav
        },

        props: ['title', 'myIndex']
    }
</script>
