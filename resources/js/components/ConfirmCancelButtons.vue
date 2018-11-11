<template>
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <a class="button"> Confirm </a>
        </div>
        <div class="column">
            <a class="button" @click="$emit('deactivated')"> Cancel </a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "confirm-cancel-buttons"
    }
</script>
