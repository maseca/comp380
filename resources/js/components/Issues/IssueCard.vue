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
                            <li> <b>Priority:</b> {{ info.priority }} </li>
                            <li> <b>Raised:</b> {{ info.raised }} </li>
                            <li> <b>Assigned:</b> {{ info.assigned }} </li>
                            <li> <b>Action Items:</b> {{ info.actionItems }} </li>
                            <li> <b>Description:</b> {{ info.description }} </li>
                            <li> <b>Status:</b> {{ info.status }} </li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li> <b>Severity:</b> {{ info.severity }} </li>
                            <li> <b>Exp. Completion Date:</b> {{ info.expEnd }} </li>
                            <li> <b>Actual Completion Date:</b> {{ info.actEnd }} </li>
                            <li> <b>Decisions:</b> {{ info.decisions }} </li>
                            <li> <b>Status Description:</b> {{ info.statDesc }} </li>
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
        name: "issue-card",

        props: ['info'],

        data: function () {
            return {
                hidden: false
            }
        }
    }
</script>
