<template>
        <div class="columns">
            <pmmodal :active=modalActive
                     @deactivated="modalActive = false">
                <project-modal :info="modalInfo"
                                   :addEdit="addEdit"
                                   @deactivated="modalActive = false"></project-modal>
            </pmmodal>
            <div class="column">
                <project-card v-for="card in cards"
                           :info=card
                           :key=card.id
                           @edit=editModal
                ></project-card>
            </div>
            <div class="column is-narrow">
                <section class="section">
                    <a class="button" @click=newModal>Create New Project</a>
                </section>
            </div>
        </div>
</template>

<script>
    import ProjectCard from "./ProjectCard"
    import ProjectModal from "./ProjectModal"
    export default {
        name: "project-content",

        components: {
            ProjectModal,
            ProjectCard
        },

        data: function () {
            return {
                edit: false,
                modalActive: false,
                modalInfo: {
                    id: 0, title: 'My Project 1', description: 'A cool project'
                },
                cards: [
                    { id: 0, title: 'My Project 1', description: 'A cool project' },
                    { id: 1, title: 'My Project 2', description: 'A cool project' },
                    { id: 2, title: 'My Project 3', description: 'A cool project' }
                ]
            }
        },

        computed: {
            addEdit() {
                return this.edit ? "Edit" : "Create New";
            }
        },

        methods: {
            newModal() {
                this.modalInfo = { id: 0, title: 'My Project 1', description: 'A cool project' };
                this.edit = false;
                this.modalActive = true;
            },

            editModal(info) {
                this.modalInfo = info;
                this.edit = true;
                this.modalActive = true;
            }
        }
    }
</script>

