<template>
    <div v-if="!hidden">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    {{ info.name }}
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <ul>
                            <li> <b>Title:</b> {{ info.title }} </li>
                            <li> <b>Skills:</b> {{ info.skills }} </li>
                            <li> <b>Pay Rate:</b> {{ info.payRate }} </li>
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
        name: "resource-card",

        props: ['info'],

        data: function () {
            return {
                hidden: false
            }
        }
    }
</script>
