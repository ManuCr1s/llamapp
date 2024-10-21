<script>
export default{
    name:'RolesCreate'
}
</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {useForm} from '@inertiajs/vue3';
import RoleForm from '@/Components/Roles/Form.vue';
const form =useForm({
    name:'',
    guard_name:''
});
defineProps({
    roles:{
        type:Object,
        required:true   
    }
})
const deleteRole = id => {
    if(confirm('¿Esta seguro de Eliminar el Rol?')){
        Inertia.delete(route('role.destroy',id));
    }
}
</script>
<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 loading-tight">Crear Role</h1>   
        </template>
        <div class="bg-white py-10 sm:py-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <RoleForm :form="form" @submit="form.post(route('roles.store'))"></RoleForm>
            </div>
        </div>
    </AppLayout>
</template>