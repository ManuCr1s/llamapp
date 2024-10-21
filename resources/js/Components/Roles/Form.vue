<script>
export default{
    name:'RoleForm'
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
            {{ updating ? 'Actualizar Role' : 'Insertar un Nuevo Rol' }}
        </template>
        <template #description>
            {{ updating ? 'Actualizar el rol seleccionado' : 'Crear un nuevo Rol' }}
        </template>
        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="name" value="Name"></InputLabel>
                <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="mt-1 block w-full"> </TextInput>
                <InputError :message="$page.props.errors.name" class="mt-2"></InputError>
                <InputLabel for="guard_name" value="Guard"></InputLabel>
                <TextInput id="guard_name" v-model="form.guard_name" type="text" autocomplete="guard_name" class="mt-1 block w-full"> </TextInput>
                <InputError :message="$page.props.errors.guard_name" class="mt-2"></InputError>
            </div>
        </template>
        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Actualizar' : 'Crear' }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>