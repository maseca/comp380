<template>
    <div class="container">
        <pmmodal
                :active=modalActive
                @deactivated="modalActive = false"
        ></pmmodal>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <h2 class="subtitle">Content?</h2>
                </div>
            </div>
            <div class="column is-narrow">
                <a class="button" @click=newModal>Create New Task</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "task-content",

        data: function () {
            return {
                modalActive: false
            }
        },

        methods: {
            newModal() {
                this.modalActive = true;
            }
        }
    }
</script>
