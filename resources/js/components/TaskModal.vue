<template>
    <div class="columns">
        <div class="column">
            <div class="box">
                <h2 class="subtitle">Content?</h2>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <h2 class="subtitle">Content?</h2>
            </div>
            <confirm-cancel-buttons
                    @deactivated="$emit('deactivated')"
            ></confirm-cancel-buttons>
        </div>
    </div>
</template>

<script>
    export default {
        name: "task-modal",

        props: ['info']
    }
</script>
