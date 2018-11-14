<template>
        <div class="columns">
            <pmmodal :active=modalActive
                     @deactivated="modalActive = false">
                <deliverable-modal :info="modalInfo"
                                   :addEdit="addEdit"
                                   @deactivated="modalActive = false"></deliverable-modal>
            </pmmodal>
            <div class="column">
                <deliverable-card v-for="card in cards"
                           :info=card
                           :key=card.id
                           @edit=editModal
                ></deliverable-card>
            </div>
            <div class="column is-narrow">
                <section class="section">
                    <a class="button" @click=newModal>Create New Deliverable</a>
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
    import DeliverableModal from "./DeliverableModal"
    import DeliverableCard from "./DeliverableCard"
    export default {
        name: "deliverable-content",

        components: {
            DeliverableModal,
            DeliverableCard
        },

        data: function () {
            return {
                edit: false,
                modalActive: false,
                modalInfo: {
                    id: 0, title: 'My Deliverable 1', resource: 'My Resource',
                    dueDate: '2/24/2014', tasks: ['Task 1', 'Task 2', 'Task 3'],
                    reqs: ['Requirement 1', 'Requirement 2', 'Requirement 3'],
                    description: 'A cool deliverable'
                },
                cards: [
                    {
                        id: 0, title: 'My Deliverable 1', resource: 'My Resource',
                        dueDate: '2/24/2014', tasks: ['Task 1', 'Task 2', 'Task 3'],
                        reqs: ['Requirement 1', 'Requirement 2', 'Requirement 3'],
                        description: 'A cool deliverable'
                    },
                    {
                        id: 1, title: 'My Deliverable 2', resource: 'My Resource',
                        dueDate: '2/24/2014', tasks: ['Task 1', 'Task 2', 'Task 3'],
                        reqs: ['Requirement 1', 'Requirement 2', 'Requirement 3'],
                        description: 'A cool deliverable'
                    },
                    {
                        id: 2, title: 'My Deliverable 3', resource: 'My Resource',
                        dueDate: '2/24/2014', tasks: ['Task 1', 'Task 2', 'Task 3'],
                        reqs: ['Requirement 1', 'Requirement 2', 'Requirement 3'],
                        description: 'A cool deliverable'
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
                    id: 0, title: 'My Deliverable 1', resource: 'My Resource',
                    dueDate: '2/24/2014', tasks: ['Task 1', 'Task 2', 'Task 3'],
                    reqs: ['Requirement 1', 'Requirement 2', 'Requirement 3'],
                    description: 'A cool deliverable'
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
