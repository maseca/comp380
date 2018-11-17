<template>
        <div class="columns">
            <pmmodal :active=modalActive
                     @deactivated="modalActive = false">
                <resource-modal :info="modalInfo"
                             :addEdit="addEdit"
                             @deactivated="modalActive = false"></resource-modal>
            </pmmodal>
            <div class="column">
                <resource-card v-for="card in cards"
                           :info=card
                           :key=card.id
                           @edit=editModal
                ></resource-card>
            </div>
            <div class="column is-narrow">
                <section class="section">
                    <a class="button" @click=newModal>Create New Resource</a>
                </section>
                <div class="box">
                    <h2 class="subtitle">Search Bar Goes Here</h2>
                </div>
                <div class="box">
                    <h2 class="subtitle">Calendar Goes Here</h2>
                </div>
            </div>
        </div>
</template>

<script>
    import ResourceModal from "./ResourceModal"
    import ResourceCard from "./ResourceCard"
    export default {
        name: "resource-content",

        components: {
            ResourceModal,
            ResourceCard
        },

        data: function () {
            return {
                edit: false,
                modalActive: false,
                modalInfo: {
                    id: 0, title: 'Developer', name: 'John Doe',
                    skills: 'Fast Talker', payRate: '$15/hr'
                },
                cards: [
                    {
                        id: 0, title: 'Developer', name: 'John Doe',
                        skills: 'Fast Talker', payRate: '$15/hr'
                    },
                    {
                        id: 1, title: 'Developer', name: 'John Doe',
                        skills: 'Fast Talker', payRate: '$15/hr'
                    },
                    {
                        id: 2, title: 'Developer', name: 'John Doe',
                        skills: 'Fast Talker', payRate: '$15/hr'
                    }
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
                this.modalInfo = {
                    id: 0, title: 'Developer', name: 'John Doe',
                    skills: 'Fast Talker', payRate: '$15/hr'
                };
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
