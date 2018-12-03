<template>
    <div class="">
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
            <div class="box">
                Sorting Options Go Here
            </div>
            <slot></slot>
        </section>
        </div>
</template>

<script>
    export default {
        name: "project-frame",

        props: ['title']
    }
</script>
