<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <vue-tel-input v-model="phone"></vue-tel-input>
        </template>
    </default-field>
</template>

<script>
    import { FormField, HandlesValidationErrors } from 'laravel-nova'
    import {VueTelInput} from 'vue-tel-input';
    Vue.use(VueTelInput)
    export default {
        mixins: [FormField, HandlesValidationErrors],
        props: ['resourceName', 'resourceId', 'field'],
        components: {
            VueTelInput,
        },
        data() {
            return {
                phone: '',
            };
        },
        methods: {
            /*
             * Set the initial, internal value for the field.
             */
            setInitialValue() {
                this.value = this.field.value || ''
            },
            /**
             * Fill the given FormData object with the field's internal value.
             */
            fill(formData) {
                formData.append(this.field.attribute, this.value || '')
            },
            /**
             * Update the field's internal value.
             */
            handleChange(value) {
                this.value = value
            },
        },
    }
</script>
