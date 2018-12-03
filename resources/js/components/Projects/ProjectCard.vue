<template>
    <div v-if="!hidden">
        <div class="card">
            <header class="card-header">
                <a href="/tasks" class="card-header-title">
                    {{ info.title }}
                </a>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <ul>
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
        name: "project-card",

        props: ['info'],

        data: function () {
            return {
                hidden: false
            }
        }
    }
</script>
