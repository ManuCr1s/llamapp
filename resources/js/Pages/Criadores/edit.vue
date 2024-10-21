<script>
export default{
    name:'CriadoresEdit'
}
</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {useForm} from '@inertiajs/vue3';
import CriadorForm from '@/Components/Criadores/Form.vue';
const props = defineProps({
    criador:{
        type:Object,
        required:true   
    }
});
const form = useForm({
    apellido_paterno:props.criador.apellido_paterno,
    apellido_materno:props.criador.apellido_materno,
    nombres:props.criador.nombres,
    telefono:props.criador.telefono,
    dni:props.criador.dni,
    nombre_ganaderia:props.criador.nombre_ganaderia,
});
</script>
<template>
    <AppLayout title="Editar Role">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 loading-tight">Editar Criador</h1>   
        </template>
        <div class="bg-white py-10 sm:py-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <CriadorForm :updating="true" :form="form" @submit="form.put(route('criadores.update',criador.id))"></CriadorForm>
            </div>
        </div>
    </AppLayout>
</template>