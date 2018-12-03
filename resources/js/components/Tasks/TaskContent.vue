<template>
    <div class="columns">
        <pmmodal :active=modalActive
                 @deactivated="modalActive = false">
            <task-modal :info="modalInfo"
                        :addEdit="addEdit"
                        @deactivated="modalActive = false"></task-modal>
        </pmmodal>
        <div class="column">
            <div class="box">
                <h2 class="subtitle">Gantt Chart Goes Here</h2>
            </div>
            <task-card v-for="card in cards"
                       :info=card
                       :key=card.id
                       @edit=editModal
            ></task-card>
        </div>
        <div class="column is-narrow">
            <section class="section">
                <a class="button" @click=newModal>Create New Task</a>
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
    import TaskModal from "./TaskModal"
    import TaskCard from "./TaskCard"
    export default {
        name: "task-content",

        components: {
            TaskModal,
            TaskCard
        },

        data: function () {
            return {
                edit: false,
                modalActive: false,
                modalInfo: {
                    id: 0, title: 'My Task 1', resource: 'My Resource', expStart: '2/24/2014',
                    expEnd: '2/24/2014', actStart: '2/24/2014', actEnd: '2/24/2014',
                    preTasks: [], sucTasks: ['Task 2', 'Task 3'],
                    expEffort: 'A little', comEffort: 'Some', actEffort: 'A lot',
                    issues: ['Issue 1', 'Issue 2', 'Issue 3'], description: 'A cool task', summary: true
                },
                cards: [
                    {
                        id: 0, title: 'My Task 1', resource: 'My Resource', expStart: '2/24/2014',
                        expEnd: '2/24/2014', actStart: '2/24/2014', actEnd: '2/24/2014',
                        preTasks: [], sucTasks: ['Task 2', 'Task 3'],
                        expEffort: 'A little', comEffort: 'Some', actEffort: 'A lot',
                        issues: ['Issue 1', 'Issue 2', 'Issue 3'], description: 'A cool task', summary: true
                    },
                    {
                        id: 1, title: 'My Task 2', resource: 'My Resource', expStart: '2/24/2014',
                        expEnd: '2/24/2014', actStart: '2/24/2014', actEnd: '2/24/2014',
                        preTasks: ['Task 1'], sucTasks: ['Task 3'],
                        expEffort: 'A little', comEffort: 'Some', actEffort: 'A lot',
                        issues: ['Issue 1', 'Issue 2', 'Issue 3'], description: 'A cool task', summary: true
                    },
                    {
                        id: 2, title: 'My Task 3', resource: 'My Resource', expStart: '2/24/2014',
                        expEnd: '2/24/2014', actStart: '2/24/2014', actEnd: '2/24/2014',
                        preTasks: ['Task 1', 'Task 2'], sucTasks: [],
                        expEffort: 'A little', comEffort: 'Some', actEffort: 'A lot',
                        issues: ['Issue 1', 'Issue 2', 'Issue 3'], description: 'A cool task', summary: true
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
                    id: 0, title: 'My Task 1', resource: 'My Resource', expStart: '2/24/2014',
                    expEnd: '2/24/2014', actStart: '2/24/2014', actEnd: '2/24/2014',
                    preTasks: ['Task 1', 'Task 2', 'Task 3'], sucTasks: ['Task 1', 'Task 2', 'Task 3'],
                    expEffort: 'A little', comEffort: 'Some', actEffort: 'A lot',
                    issues: ['Issue 1', 'Issue 2', 'Issue 3'], description: 'A cool task'
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
