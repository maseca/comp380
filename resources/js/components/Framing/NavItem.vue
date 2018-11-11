<template>
    <li><a :href=info.link :class=active>{{ info.text }}</a></li>
</template>

<script>
    export default {
        name: "nav-item",

        props: ['info', 'activeIndex'],

        computed: {
            active: function () {
                return this.info.id == this.activeIndex ? "is-active" : "";
            }
        }
    }
</script>
