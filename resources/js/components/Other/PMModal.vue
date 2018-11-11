<template>
    <div :class=activeClass>
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <slot></slot>
            </div>
        </div>
        <button
                class="modal-close is-large"
                aria-label="close"
                @click="$emit('deactivated')"
        ></button>
    </div>
</template>

<script>
    export default {
        name: "pmmodal",

        props: ['active'],

        computed: {
            activeClass() {
                return this.active ? "modal is-active" : "modal";
            }
        }
    }
</script>
