<template>
    <div class="box">
        <h1 class="title"> { addEdit } Project </h1>
        <div class="columns">
            <div class="column">
                <ul>
                    <li> <b>Title:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.title /> </li>
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
        name: "project-modal",

        props: ['info', 'addEdit']
    }
</script>
