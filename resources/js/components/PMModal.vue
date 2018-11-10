<template>
    <div :class=active>
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                HI MOM
            </div>
        </div>
        <button
                class="modal-close is-large"
                aria-label="close"
                @click=deactivate
        ></button>
    </div>
</template>

<script>
    export default {
        name: "pmmodal",

        data: function () {
            return {
                isActive: true
            }
        },

        methods: {
            deactivate() {
                this.isActive = false;
            }
        },

        computed: {
            active() {
                return this.isActive ? "modal is-active" : "modal";
            }
        }
    }
</script>
