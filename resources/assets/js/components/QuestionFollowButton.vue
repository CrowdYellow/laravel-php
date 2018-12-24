<template>
    <button
            class="btn btn-default"
            :class="{'btn-success' : followed}"
            v-html="text"
            @click="follow"></button>
</template>

<script>
    export default {
        props:['question', 'user'],
        mounted() {
            axios.post('/api/question/follower', {'question':this.question, 'user':this.user}).then(response => {
                this.followed = response.data.followed
            })
        },
        data() {
            return {
                followed: false
            }
        },
        computed: {
            text () {
                return this.followed ? '<i  class="fa fa-heart"></i> 已关注' : '<i  class="fa fa-heart"></i> 关注该问题'
            }
        },
        methods:{
            follow() {
                axios.post('/api/question/follow', {'question':this.question, 'user':this.user}).then(response => {
                    this.followed = response.data.followed
                })
            }
        }
    }
</script>
