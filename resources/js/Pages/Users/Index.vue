<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

const page = usePage();

defineProps({
    users: Array,
});
</script>

<template>
    <Head title="Usuários" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Usuários
                </h2>

                <Link
                    :href="route('users.create')"
                    class="rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700"
                >
                    Novo usuário
                </Link>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6">

                        <!-- Mensagem de sucesso -->
                        <div
                            v-if="page.props.flash?.success"
                            class="mb-4 rounded-md bg-green-100 p-4 text-sm text-green-800"
                        >
                            {{ page.props.flash.success }}
                        </div>

                        <table class="w-full text-left">
                            <thead>
                                <tr class="border-b">
                                    <th class="px-4 py-2">Nome</th>
                                    <th class="px-4 py-2">E-mail</th>
                                    <th class="px-4 py-2">Superusuário</th>
                                    <th class="px-4 py-2">Criado em</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr
                                    v-for="user in users"
                                    :key="user.id"
                                    class="border-b"
                                >
                                    <td class="px-4 py-2">
                                        {{ user.name }}
                                    </td>

                                    <td class="px-4 py-2">
                                        {{ user.email }}
                                    </td>

                                    <td class="px-4 py-2">
                                        {{ user.is_superuser ? 'Sim' : 'Não' }}
                                    </td>

                                    <td class="px-4 py-2">
                                        {{ user.created_at }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p
                            v-if="users.length === 0"
                            class="py-4 text-gray-500"
                        >
                            Nenhum usuário cadastrado.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
