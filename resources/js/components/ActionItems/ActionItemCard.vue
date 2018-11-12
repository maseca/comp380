<template>
    <div v-if="!hidden" class="container">
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
                            <li> <b>Status:</b> {{ info.status }} </li>
                            <li> <b>Exp. Completion Date:</b> {{ info.expEnd }} </li>
                            <li> <b>Actual Completion Date:</b> {{ info.actEnd }} </li>
                            <li> <b>Description:</b> {{ info.description }} </li>
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
        name: "action-item-card",

        props: ['info'],

        data: function () {
            return {
                hidden: false
            }
        }
    }
</script>
