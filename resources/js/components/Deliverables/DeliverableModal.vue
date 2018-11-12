<template>
    <div class="box">
        <h1 class="title">{{ addEdit }} Deliverable</h1>
        <div class="columns">
            <div class="column">
                <ul>
                    <li> <b>Title:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.title /> </li>
                    <li> <b>Resource:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.resource /> </li>
                    <li> <b>Due Date:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.dueDate /> </li>
                    <li> <b>Tasks:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.tasks /> </li>
                    <li> <b>Requirements:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.reqs /> </li>
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
        name: "deliverable-modal",

        props: ['info', 'addEdit']
    }
</script>
