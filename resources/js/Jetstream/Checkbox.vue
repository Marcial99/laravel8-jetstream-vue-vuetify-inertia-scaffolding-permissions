<template>
    <input
        type="checkbox"
        :value="value"
        v-model="proxyChecked"
        class="tw-rounded tw-border-gray-300 tw-text-indigo-600 tw-shadow-sm tw-focus:border-indigo-300 tw-focus:ring tw-focus:ring-indigo-200 tw-focus:ring-opacity-50"
    />
</template>

<script>
export default {
    model: {
        prop: "checked",
        event: "change",
    },

    props: {
        checked: {
            type: [Array, Boolean],
            default: false,
        },
        value: {
            default: null,
        },
    },

    computed: {
        proxyChecked: {
            get() {
                return this.checked;
            },
            set(val) {
                this.$emit("change", val);
            },
        },
    },
};
</script>
