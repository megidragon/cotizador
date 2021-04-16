<template>
    <div class="alert alert-danger" v-if="display">
        <div class="container">
            <ul>
                <li v-for="error in errors">{{ error[0] }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ErrorDisplayComponent',
    props: {
        display: {
            default: false,
            required: false,
            type: Boolean
        },
        errors: {
            required: true,
            type: Object
        }
    }
}
</script>
