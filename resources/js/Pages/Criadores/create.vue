<script>
export default{
    name:'CriadoresCreate'
}
</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {useForm} from '@inertiajs/vue3';
import CriadorForm from '@/Components/Criadores/Form.vue';
const form =useForm({
    id_criador:'',
    apellido_paterno:'',
    apellido_materno:'',
    nombres:'',
    telefono:'',
    dni:'',
    nombre_ganaderia:'',
    estado:true,
    id_region:19,
    id_province:1,
    id_distrito:1,
    id_centro_poblado:1,
    id_caserio_anexo:1
});
defineProps({
    criadores:{
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
            <h1 class="font-semibold text-xl text-gray-800 loading-tight">Crear Criador</h1>   
        </template>
        <div class="bg-white py-10 sm:py-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <CriadorForm :form="form" @submit="form.post(route('criadores.store'))"></CriadorForm>
            </div>
        </div>
    </AppLayout>
</template>