<template>
    <div class="box">
        <h1 class="title">{{ addEdit }} Task</h1>
        <div class="columns">
            <div class="column">
                <ul>
                    <li> <b>Title:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.title /> </li>
                    <li> <b>Exp. Start Date:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.expStart /> </li>
                    <li> <b>Exp. End Date:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.expEnd /> </li>
                    <li> <b>Actual Start Date:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.actStart /> </li>
                    <li> <b>Actual End Date:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.actEnd /> </li>
                    <li> <b>Predecessor Tasks:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.preTasks /> </li>
                    <li> <b>Successor Tasks:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.sucTasks /> </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li> <b>Exp. Effort:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.expEffort /> </li>
                    <li> <b>Completed Effort:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.comEffort /> </li>
                    <li> <b>Actual Effort:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.actEffort /> </li>
                    <li> <b>Issues:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.issues /> </li>
                    <li> <b>Resource:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.resource /> </li>
                    <li> <b>Description:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.description /> </li>
                </ul>
                <section class="section">
                    <confirm-cancel-buttons @deactivated="$emit('deactivated')"></confirm-cancel-buttons>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "task-modal",

        props: ['info', 'addEdit']
    }
</script>
