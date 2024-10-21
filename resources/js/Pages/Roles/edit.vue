<script>
export default{
    name:'RolesEdit'
}
</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {useForm} from '@inertiajs/vue3';
import RoleForm from '@/Components/Roles/Form.vue';
const props = defineProps({
    role:{
        type:Object,
        required:true   
    }
});
const form = useForm({
    name:props.role.name,
    guard_name:props.role.guard_name
});
</script>
<template>
    <AppLayout title="Editar Role">
        
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 loading-tight">Crear Role</h1>   
        </template>
        <div class="bg-white py-10 sm:py-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <RoleForm :updating="true" :form="form" @submit="form.put(route('roles.update',role.id))"></RoleForm>
            </div>
        </div>
    </AppLayout>
</template>