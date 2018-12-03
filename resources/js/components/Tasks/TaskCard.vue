<template>
    <div v-if="!hidden">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    {{ info.title }}
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <ul>
                            <li> <b>Exp. Start Date:</b> {{ info.expStart }} </li>
                            <li> <b>Exp. End Date:</b> {{ info.expEnd }} </li>
                            <li> <b>Actual Start Date:</b> {{ info.actStart }} </li>
                            <li> <b>Actual End Date:</b> {{ info.actEnd }} </li>
                            <li> <b>Predecessor Tasks:</b> {{ info.preTasks }} </li>
                            <li> <b>Successor Tasks:</b> {{ info.sucTasks }} </li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li> <b>Exp. Effort:</b> {{ info.expEffort }} </li>
                            <li> <b>Completed Effort:</b> {{ info.comEffort }} </li>
                            <li> <b>Actual Effort:</b> {{ info.actEffort }} </li>
                            <li> <b>Issues:</b> {{ info.issues }} </li>
                            <li> <b>Resource:</b> {{ info.resource }} </li>
                            <li> <b>Description:</b> {{ info.description }} </li>
                            <li> <b>Summary Task:</b> {{ info.summary ? "Yes" : "No" }} </li>
                        </ul>
                    </div>
                </div>
            </div>
            <footer class="card-footer">
                <a class="card-footer-item" @click="$emit('edit', info)">Edit</a>
                <a class="card-footer-item" @click="hidden = true">Delete</a>
            </footer>
        </div>
        <br/>
    </div>
</template>

<script>
    export default {
        name: "task-card",

        props: ['info'],

        data: function () {
            return {
                hidden: false
            }
        },
    }
</script>
