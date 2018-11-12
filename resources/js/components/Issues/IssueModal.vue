<template>
    <div class="box">
        <h1 class="title">{{ addEdit }} Issue</h1>
        <div class="columns">
            <div class="column">
                <ul>
                    <li> <b>Title:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.title /> </li>
                    <li> <b>Severity:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.severity /> </li>
                    <li> <b>Raised:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.raised /> </li>
                    <li> <b>Assigned:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.assigned /> </li>
                    <li> <b>Exp. Completion Date:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.expEnd /> </li>
                    <li> <b>Actual Completion Date:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.actEnd /> </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li> <b>Priority:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.priority /> </li>
                    <li> <b>Status:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.status /> </li>
                    <li> <b>Action Items:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.actionItems /> </li>
                    <li> <b>Decisions:</b>
                        <input class="input"
                               type="text"
                               :placeholder=info.decisions /> </li>
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
        name: "issue-modal",

        props: ['info', 'addEdit']
    }
</script>
