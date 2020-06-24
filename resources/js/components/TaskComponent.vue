<template>
    <div>
        <div class="input-group mb-3">
            <input v-model="task.title" type="text" class="form-control" placeholder="Add a new task">
            <div class="input-group-append">
                <button @click="addTask" class="btn btn-primary" type="button" id="button-addon2">Add</button>
            </div>
        </div>

        <div v-if="tasks.length" class="mx-4">
            <div class="form-check" v-for="(task, index) in tasks" :key="task.id">
                <input :checked="task.completed" @change="toggle(index)" class="form-check-input" type="checkbox" :id="index">
                <label class="form-check-label" :for="index">
                    {{ task.title }}
                </label>
            </div>
        </div>
        <p v-else>No tasks left!</p>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
               tasks: [],
               task: {},
            }
        },

        mounted() {
            let self = this

            axios.get('/api/tasks')
                .then(function (response) {
                    self.tasks = response.data
                })
        },

        methods: {
            toggle: function (index) {
                this.tasks[index].completed = !this.tasks[index].completed

                let self = this

                axios.put('/api/tasks/' + this.tasks[index].id, {
                    completed: this.tasks[index].completed
                })
                    .then(function (response) {
                        console.log(response.data)
                    })
            },

            addTask: function () {
                let self = this

                axios.post('/api/tasks/', {
                    title: this.task.title
                })
                    .then(function (response) {
                        console.log(response.data)
                        self.task.id = response.data.id
                        self.tasks.push(self.task)
                        self.task = {}
                    })
            }
        }
    }
</script>
