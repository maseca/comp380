<template>
    <div class="box">
        <h1 class="title">{{ addEdit }} Resource</h1>
        <div class="columns">
            <div class="column">
                <ul>
                    <li> <b>Name:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.name /> </li>
                    <li> <b>Title:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.title /> </li>
                    <li> <b>Skills:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.skills /> </li>
                    <li> <b>Pay Rate:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.payRate /> </li>
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
        name: "resource-modal",

        props: ['info', 'addEdit']
    }
</script>
