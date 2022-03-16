<template>
    <button
        :type="type"
        class="tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-bg-gray-800 tw-border tw-border-transparent tw-rounded-md tw-font-semibold tw-text-xs tw-uppercase tw-tracking-widest tw-hover:bg-gray-700 tw-active:bg-gray-900 tw-focus:outline-none tw-focus:border-gray-900 tw-focus:shadow-outline-gray tw-transition tw-ease-in-out tw-duration-150"
    >
        <slot></slot>
    </button>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: "submit",
        },
    },
};
</script>
