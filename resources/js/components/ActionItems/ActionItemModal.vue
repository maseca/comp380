<template>
    <div class="container">
        <h1 class="title">{{ addEdit }} Action Item</h1>
    <div class="columns">
        <div class="column">
            <ul>
                <li> <b>Title:</b>
                    <input class="input"
                           type="text"
                           :placeholder=info.title /> </li>
                <li> <b>Status:</b>
                    <input class="input"
                           type="text"
                           :placeholder=info.status /> </li>
                <li> <b>Exp. Completion Date:</b>
                    <input class="input"
                           type="text"
                           :placeholder=info.expEnd /> </li>
                <li> <b>Actual Completion Date:</b>
                    <input class="input"
                           type="text"
                           :placeholder=info.actEnd /> </li>
                <li> <b>Description:</b>
                    <input class="input"
                           type="text"
                           :placeholder=info.description /> </li>
                <li> <b>Status Description:</b>
                    <input class="input"
                           type="text"
                           :placeholder=info.statDesc /> </li>
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
        name: "action-item-modal",

        props: ['info', 'addEdit']
    }
</script>
