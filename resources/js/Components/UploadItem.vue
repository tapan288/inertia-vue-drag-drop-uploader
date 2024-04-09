<script setup>
import InputLabel from "./InputLabel.vue";
import PrimaryButton from "./PrimaryButton.vue";
import TextInput from "./TextInput.vue";

defineProps({
    upload: Object,
});
</script>

<template>
    {{ upload }}
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-gray-900">
            <div class="flex space-x-6">
                <div class="max-w-[240px] w-full space-y-3">
                    <div class="space-y-1">
                        <div
                            class="bg-gray-100 shadow-inner h-3 rounded overflow-hidden"
                        >
                            <div
                                class="h-full bg-indigo-600 rounded-full"
                                style="width: 50%"
                            ></div>
                        </div>
                        <div class="text-sm">Uploading</div>
                    </div>
                    <div class="space-y-1">
                        <div
                            class="bg-gray-100 shadow-inner h-3 rounded overflow-hidden"
                        >
                            <div
                                class="bg-green-500 h-full rounded-full"
                                style="width: 50%"
                            ></div>
                        </div>
                        <div class="text-sm">Encoding</div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <button class="text-blue-500 text-sm font-medium">
                            Pause
                        </button>
                        <button class="text-blue-500 text-sm font-medium">
                            Resume
                        </button>
                        <button class="text-blue-500 text-sm font-medium">
                            Cancel upload
                        </button>
                    </div>
                </div>

                <form class="flex-grow space-y-6">
                    <div>
                        <InputLabel for="title" value="Title" />
                        <TextInput
                            id="title"
                            type="text"
                            class="mt-1 block w-full"
                        />
                    </div>

                    <!-- TextArea -->

                    <div class="flex items-center space-x-3">
                        <PrimaryButton> Save </PrimaryButton>
                        <div class="text-sm">Video updated</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
