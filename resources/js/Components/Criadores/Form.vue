<script>
export default{
    name:'CriadorForm'
}
</script>
<script setup>
    import FormSection from '@/Components/FormSection.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    defineProps({
        form:{
            type:Object,
            required:true
        },
        updating:{
            type:Boolean,
            required:false,
            default:false
        }
    });
    defineEmits(['submit'])

</script>
<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Actualizar Criador' : 'Insertar un Nuevo Criador' }}
        </template>
        <template #description>
            {{ updating ? 'Actualizar el criador seleccionado' : 'Crear un nuevo Criador' }}
        </template>
        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="apaterno" value="Apellido Paterno"></InputLabel>
                <TextInput id="apaterno" v-model="form.apellido_paterno" type="text" autocomplete="apellido_paterno" class="mt-1 block w-full"> </TextInput>
                <InputError :message="$page.props.errors.apellido_paterno" class="mt-2"></InputError>
                <InputLabel for="amaterno" value="Apellido Materno"></InputLabel>
                <TextInput id="amaterno" v-model="form.apellido_materno" type="text" autocomplete="apellido_materno" class="mt-1 block w-full"> </TextInput>
                <InputError :message="$page.props.errors.apellido_materno" class="mt-2"></InputError>
                <InputLabel for="name" value="Nombres"></InputLabel>
                <TextInput id="name" v-model="form.nombres" type="text" autocomplete="name" class="mt-1 block w-full"> </TextInput>
                <InputError :message="$page.props.errors.nombres" class="mt-2"></InputError>
                <InputLabel for="telefono" value="Telefono"></InputLabel>
                <TextInput id="telefono" v-model="form.telefono" type="text" autocomplete="telefono" class="mt-1 block w-full"> </TextInput>
                <InputError :message="$page.props.errors.telefono" class="mt-2"></InputError>
                <InputLabel for="dni" value="Dni"></InputLabel>
                <TextInput id="dni" v-model="form.dni" type="text" autocomplete="dni" class="mt-1 block w-full"> </TextInput>
                <InputError :message="$page.props.errors.dni" class="mt-2"></InputError>
                <InputLabel for="nombreganaderia" value="Nombre Ganaderia"></InputLabel>
                <TextInput id="nombreganaderia" v-model="form.nombre_ganaderia" type="text" autocomplete="nombre_ganaderia" class="mt-1 block w-full"> </TextInput>
                <InputError :message="$page.props.errors.nombre_ganaderia" class="mt-2"></InputError>
            </div>
        </template>
        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Actualizar' : 'Crear' }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>