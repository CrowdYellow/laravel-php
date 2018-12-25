<template>
    <button
            class="btn btn-block btn-default "
            :class="{'btn-success' : followed, 'btn-color-green' : !followed}"
            v-html="text"
            @click="follow"></button>
</template>

<script>
    export default {
        props:['user'],
        mounted() {
            axios.get('/api/user/'+this.user+'/follower').then(response => {
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
                return this.followed ? '<i class="fa fa-plus"></i>&nbsp;&nbsp; 已关注' : '<i class="fa fa-plus"></i>&nbsp;&nbsp; 关注他'
            }
        },
        methods:{
            follow() {
                axios.post('/api/user/follow', {'user':this.user}).then(response => {
                    this.followed = response.data.followed
                })
            }
        }
    }
</script>
