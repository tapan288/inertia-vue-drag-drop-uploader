<script setup>
import FileIcon from "./FileIcon.vue";
import InputLabel from "./InputLabel.vue";
import PrimaryButton from "./PrimaryButton.vue";
import TextInput from "./TextInput.vue";
import { ref } from "vue";
import UploadItem from "./UploadItem.vue";

const uploads = ref([]);

const handleUploadedFiles = (files) => {
    Array.from(files).forEach((file) => {
        uploads.value.unshift({
            id: 1,
            title: file.name,
        });
    });
};
</script>

<template>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed rounded-md border-gray-300"
                    >
                        <div class="space-y-1 text-center">
                            <FileIcon />
                            <div class="flex text-sm text-gray-600">
                                <label
                                    for="file-upload"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                                >
                                    <span>Upload a file</span>
                                    <input
                                        @change="
                                            handleUploadedFiles(
                                                $event.target.files
                                            )
                                        "
                                        id="file-upload"
                                        name="file-upload"
                                        type="file"
                                        class="sr-only"
                                        multiple
                                    />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>

                            <p class="text-xs text-gray-500">
                                MP4, AVI up to 100MB
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-3" v-for="upload in uploads" :key="upload.id">
                <!-- UploadItem Component -->
                <UploadItem :upload="upload" />
            </div>
        </div>
    </div>
</template>
