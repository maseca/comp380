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
                            <li> <b>Resource:</b> {{ info.resource }} </li>
                            <li> <b>Due Date:</b> {{ info.dueDate }} </li>
                            <li> <b>Tasks:</b> {{ info.tasks }} </li>
                            <li> <b>Requirements:</b> {{ info.reqs }} </li>
                            <li> <b>Description:</b> {{ info.description }} </li>
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
        name: "deliverable-card",

        props: ['info'],

        data: function () {
            return {
                hidden: false
            }
        }
    }
</script>
