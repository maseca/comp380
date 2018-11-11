<template>
    <div class="container">
        <pmmodal
                :active=modalActive
                :info="modalInfo"
                @deactivated="modalActive = false">
            <task-modal
                    @deactivated="modalActive = false"
            ></task-modal>
        </pmmodal>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <h2 class="subtitle">Gantt Chart Goes Here</h2>
                </div>
                <task-card
                    v-for="card in cards"
                    :info=card
                    :key=card.id
                ></task-card>
            </div>
            <div class="column is-narrow">
                <div class="box">
                    <a class="button" @click=newModal>Create New Task</a>
                </div>
                <div class="box">
                    <h2 class="subtitle">Search Bar Goes Here</h2>
                </div>
                <div class="box">
                    <h2 class="subtitle">Calendar Goes Here</h2>
                </div>
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
                modalActive: false,
                modalInfo: null,
                cards: [
                    {
                        id: 0, title: 'My Task 1', resource: 'My Resource', expStart: '2/24/2014',
                        expEnd: '2/24/2014', actStart: '2/24/2014', actEnd: '2/24/2014',
                        preTasks: ['Task 1', 'Task 2', 'Task 3'], sucTasks: ['Task 1', 'Task 2', 'Task 3'],
                        expEffort: 'A little', comEffort: 'Some', actEffort: 'A lot',
                        issues: ['Issue 1', 'Issue 2', 'Issue 3'], description: 'A cool task'
                    },
                    {
                        id: 1, title: 'My Task 2', resource: 'My Resource', expStart: '2/24/2014',
                        expEnd: '2/24/2014', actStart: '2/24/2014', actEnd: '2/24/2014',
                        preTasks: ['Task 1', 'Task 2', 'Task 3'], sucTasks: ['Task 1', 'Task 2', 'Task 3'],
                        expEffort: 'A little', comEffort: 'Some', actEffort: 'A lot',
                        issues: ['Issue 1', 'Issue 2', 'Issue 3'], description: 'A cool task'
                    },
                    {
                        id: 2, title: 'My Task 3', resource: 'My Resource', expStart: '2/24/2014',
                        expEnd: '2/24/2014', actStart: '2/24/2014', actEnd: '2/24/2014',
                        preTasks: ['Task 1', 'Task 2', 'Task 3'], sucTasks: ['Task 1', 'Task 2', 'Task 3'],
                        expEffort: 'A little', comEffort: 'Some', actEffort: 'A lot',
                        issues: ['Issue 1', 'Issue 2', 'Issue 3'], description: 'A cool task'
                    }
                ]
            }
        },

        methods: {
            newModal() {
                this.modalActive = true;
            },

            setModalInfo(info) {
                this.modalInfo = info;
            }
        }
    }
</script>
