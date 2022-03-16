<template>
    <input
        class="tw-border-gray-300 tw-focus:border-indigo-300 tw-focus:ring tw-focus:ring-indigo-200 tw-focus:ring-opacity-50 tw-rounded-md tw-shadow-sm"
        :value="value"
        @input="$emit('input', $event.target.value)"
        ref="input"
    />
</template>

<script>
export default {
    props: ["value"],

    methods: {
        focus() {
            this.$refs.input.focus();
        },
    },
};
</script>
