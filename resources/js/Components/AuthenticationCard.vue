<template>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-b from-primary-300 to-primary-700">
        <div>
            <slot name="logo" />
        </div>

        <div
            class="w-3-4 md:w-full rounded-md sm:max-w-md mt-6 px-6 py-4 bg-slate-100 shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
