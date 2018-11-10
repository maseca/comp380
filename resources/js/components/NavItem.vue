<template>
    <li><a :href=data.link :class=active>{{ data.text }}</a></li>
</template>

<script>
    export default {
        name: "nav-item",

        props: ['data', 'activeIndex'],

        computed: {
            active: function () {
                return this.data.id == this.activeIndex ? "is-active" : "";
            }
        }
    }
</script>
