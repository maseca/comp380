<template>
        <div class="columns">
            <pmmodal :active=modalActive
                     @deactivated="modalActive = false">
                <issue-modal :info="modalInfo"
                             :addEdit="addEdit"
                             @deactivated="modalActive = false"></issue-modal>
            </pmmodal>
            <div class="column">
                <div class="container">
                    <issue-card v-for="card in cards"
                               :info=card
                               :key=card.id
                               @edit=editModal
                    ></issue-card>
                </div>
            </div>
            <div class="column">
                <section class="section">
                    <a class="button" @click=newModal>Create New Issue</a>
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
    import IssueModal from "./IssueModal"
    import IssueCard from "./IssueCard"
    export default {
        name: "issue-content",

        components: {
            IssueModal,
            IssueCard
        },

        data: function () {
            return {
                edit: false,
                modalActive: false,
                modalInfo: {
                    id: 0, title: 'My Issue 1', priority: 'Top Priority', severity: 'Critical',
                    raised: '2/24/2014', assigned: '2/24/2014', expEnd: '2/24/2014', actEnd: '2/24/2014',
                    actionItems: ['Action Item 1', 'Action Item 2', 'Action Item 3'],
                    decisions: ['Decision 1', 'Decision 2', 'Decision 3'], status: 'Closed',
                    description: 'A cool issue', statDesc: 'A cool status'
                },
                cards: [
                    {
                        id: 0, title: 'My Issue 1', priority: 'Top Priority', severity: 'Critical',
                        raised: '2/24/2014', assigned: '2/24/2014', expEnd: '2/24/2014', actEnd: '2/24/2014',
                        actionItems: ['Action Item 1', 'Action Item 2', 'Action Item 3'],
                        decisions: ['Decision 1', 'Decision 2', 'Decision 3'], status: 'Closed',
                        description: 'A cool issue', statDesc: 'A cool status'
                    },
                    {
                        id: 1, title: 'My Issue 2', priority: 'Top Priority', severity: 'Critical',
                        raised: '2/24/2014', assigned: '2/24/2014', expEnd: '2/24/2014', actEnd: '2/24/2014',
                        actionItems: ['Action Item 1', 'Action Item 2', 'Action Item 3'],
                        decisions: ['Decision 1', 'Decision 2', 'Decision 3'], status: 'Closed',
                        description: 'A cool issue', statDesc: 'A cool status'
                    },
                    {
                        id: 2, title: 'My Issue 3', priority: 'Top Priority', severity: 'Critical',
                        raised: '2/24/2014', assigned: '2/24/2014', expEnd: '2/24/2014', actEnd: '2/24/2014',
                        actionItems: ['Action Item 1', 'Action Item 2', 'Action Item 3'],
                        decisions: ['Decision 1', 'Decision 2', 'Decision 3'], status: 'Closed',
                        description: 'A cool issue', statDesc: 'A cool status'
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
                    id: 0, title: 'My Issue 1', priority: 'Top Priority', severity: 'Critical',
                    raised: '2/24/2014', assigned: '2/24/2014', expEnd: '2/24/2014', actEnd: '2/24/2014',
                    actionItems: ['Action Item 1', 'Action Item 2', 'Action Item 3'],
                    decisions: ['Decision 1', 'Decision 2', 'Decision 3'], status: 'Closed',
                    description: 'A cool issue', statDesc: 'A cool status'
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
