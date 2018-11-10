<template>
    <ul class="menu-list">
        <li><a href="/tasks">Tasks</a></li>
        <li><a href="/actionitems">Action Items</a></li>
        <li><a href="/deliverables">Deliverables</a></li>
        <li><a href="/issues">Issues</a></li>
    </ul>
</template>

<script>
    export default {
        name: "side-nav",

        mounted() {
            console.log('Component mounted.')
        },

        data: function () {
            return {
                bingus: 0
            }
        }

    }
</script>
