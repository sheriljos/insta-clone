<template>
    <div>
        <button type="button" class="btn btn-primary ml-5" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function() {
            return {
                status: this.follows,
            }
        },

        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        this.status = !this.status
                    })
                    .catch( err => {
                        if (err.response.status === 401) {
                            window.location = '/login';
                        } else {
                            window.location = 'profile';
                        }
                    })
            },
        },

        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
