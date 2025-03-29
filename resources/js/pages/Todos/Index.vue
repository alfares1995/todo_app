//////////////////////////////////////////////////////////////////////////////////

<template>
    <AppLayout>
        <div class="max-w-2xl mx-auto p-6 bg-white shadow-lg rounded-lg">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Todo List</h1>

            <!-- Todo List -->
            <ul class="space-y-4">
                <li v-for="todo in todos" :key="todo.id"
                    class="flex items-center justify-between p-4 bg-gray-50 rounded-lg shadow-sm">
                    <div>
                        <p class="text-lg font-semibold text-gray-700">{{ todo.title }}</p>
                        <p class="text-sm text-gray-500">{{ todo.description }}</p>
                        <p class="text-sm text-gray-500">Created at: {{ todo.id }}</p>
                        
                        <span :class="todo.completed ? 'text-green-500' : 'text-yellow-500'" class="text-sm">
                            {{ todo.completed ? 'Completed' : 'Pending' }}
                        </span>
                    </div>
                    <div class="flex space-x-2">
                        <!-- Delete Button -->
                        <button @click="deleteTodo(todo.id)"
                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-200">
                            Delete
                        </button>

                        <!-- Complete Button -->
                        <button @click="completeTodo(todo)"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
                            {{ todo.completed ? 'Pending' : 'Complete' }}
                        </button>

                      
                    </div>

                </li>
            </ul>

            <!-- Add Todo Form -->
            <form @submit.prevent="submit" class="mt-8 space-y-4">
                <input v-model="form.title" placeholder="Title" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <textarea v-model="form.description" placeholder="Description"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                <button type="submit"
                    class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200"
                    :disabled="form.processing">
                    Add Todo
                </button>
            </form>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import { router } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3'

interface Todo {
    id: number;
    title: string;
    description: string;
    completed: boolean;
}

const props = defineProps<{
    todos: Todo[];
}>();

// Form for adding a new todo
const form = useForm({
    title: null,
    description: null,
    completed: false,
});

function submit() {
    form.post('/todos', {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
}

// Toggle todo completion status
function completeTodo(todo: { id: any; completed: any; }) {
    router.put(`/todos/${todo.id}`, {
        completed: !todo.completed
    }, {
        preserveScroll: true,
        onSuccess: () => {
            // Optional success handling
            console.log('Todo updated successfully!');
        },
        onError: (errors) => {
            console.error('Update failed:', errors);
        }
    });
}


// Delete a todo
const deleteTodo = (id: any) => {
     
    if (confirm(`Are you sure you want to delete this todo? ${id}`)) {
        router.delete(`/todos/${id}`, {
            preserveScroll: true,
            onSuccess: () => {
                // Optional success handling
                console.log('Todo deleted successfully!');
            },
            onError: (errors) => {
                console.error('Delete failed:', errors);
            }
        });
    }
};
</script>