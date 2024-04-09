<script setup>
import InputLabel from "./InputLabel.vue";
import PrimaryButton from "./PrimaryButton.vue";
import TextInput from "./TextInput.vue";
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
                            <svg
                                class="mx-auto h-12 w-12 text-gray-400"
                                stroke="currentColor"
                                fill="none"
                                viewBox="0 0 48 48"
                                aria-hidden="true"
                            >
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label
                                    for="file-upload"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                                >
                                    <span>Upload a file</span>
                                    <input
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

            <div class="my-3">
                <!-- UploadItem Component -->
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
                                    <button
                                        class="text-blue-500 text-sm font-medium"
                                    >
                                        Pause
                                    </button>
                                    <button
                                        class="text-blue-500 text-sm font-medium"
                                    >
                                        Resume
                                    </button>
                                    <button
                                        class="text-blue-500 text-sm font-medium"
                                    >
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
            </div>
        </div>
    </div>
</template>
